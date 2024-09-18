<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book master management</title>
    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>book master management</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "book_details";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed:"
            . $conn->connect_error);
    }
    $message = '';
    $error = '';
    if (
        $_SERVER["REQUEST_METHOD"] == "POST"
    ) {
        $book_code = isset($_POST['book_code']) ?
            intval($_POST['book_code']) : null;
        $book_name = trim($_POST['book_name']);
        $author_name = trim($_POST['author_name']);
        $cost = isset($_POST['cost']) ?
            intval($_POST['cost']) : 0;
        $isbn_no = trim($_POST['isbn_no']);
        if (isset($_POST['insert'])) {
            $stmt = $conn->prepare("insert into book_master(book_code,book_name, author_name, cost, isbn_no) values (?,?,?,?,?)");
            $stmt->bind_param("issis", $book_code, $book_name, $author_name, $cost, $isbn_no);
            if ($stmt->execute()) {
                $message = 'Book Record inserted successfully';
            } else {
                $error = 'book insertion failed';
            }
            $stmt->close();
        } elseif (isset($_POST['update'])) {
            if ($book_code) {
                $stmt = $conn->prepare("update book_master set book_name=?,author_name=?,cost=?,isbn_no=? where book_code=?");
                $stmt->bind_param("ssisi", $book_name, $author_name, $cost, $isbn_no, $book_code);
                if ($stmt->execute()) {
                    $message = 'Book Record updated successfully';
                } else {
                    $error = 'book updation failed';
                }
            } else {
                $error = 'book code not found';
            }
        } elseif (isset($_POST['delete'])) {
            if ($book_code) {
                $stmt = $conn->prepare("delete from book_master where book_code=?");
                $stmt->bind_param("i", $book_code);
                if ($stmt->execute()) {
                    $message = 'Book Record deleted successfully';
                } else {
                    $error ='error deleting book: '. $stmt->error;
                }
                $stmt->close();
            } else {
                $error ='book code not found';
            }
        }
    } ?>
    <?php if ($message): ?>
        <p style="color:green;">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>
    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="book_code">book_code</label>
        <input type="number" name="book_code" id="book_code"><br><br>
        <label for="book_name">book_name</label>
        <input type="text" name="book_name" id="book_name"><br><br>
        <label for="author_name">author_name</label>
        <input type="text" name="author_name" id="author_name"><br><br>
        <label for="cost">cost</label>
        <input type="number" name="cost" id="cost" step="0.01" min="0.01"><br><br>
        <label for="isbn_no">isbn_no</label>
        <input type="text" name="isbn_no" id="isbn_no"><br><br>
        <input type="submit" name="insert" value="insert_book">
        <input type="submit" name="update" value="update_book">
        <input type="submit" name="delete" value="delete_book">
    </form>
</body>
</html>