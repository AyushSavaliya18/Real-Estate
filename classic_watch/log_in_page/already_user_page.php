

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Of Classic Watch</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <form method="POST">
    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="log_in_page.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
		

        

    </div>
    </form>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>




<?php
  
   include 'conn.php';
   if(isset($_POST['signin']))
   {
   
               if($_SERVER["REQUEST_METHOD"] == "POST") 
               {
                  // username and password sent from form          
                  $myusername = $_POST['your_name'];
                  $mypassword = $_POST['your_pass'];
                 
                  $sql = "SELECT  * FROM USER_MASTER WHERE Name = '$myusername' and Password = '$mypassword'";

                  $result=mysqli_query($con,$sql);
                  $r=mysqli_num_rows($result);
                  

                  while($data=mysqli_fetch_assoc($result))
                  {
                  // If result matched $myusername and $mypassword, table row must be 1 row
                   
                  if($myusername == $data['Name']) 
                  {
                      session_start();
                        $_SESSION['login']=$data['Name'];
                        $_SESSION['user_id']=$data['User_Id'];
                       $_SESSION["user"] = "User Exit";

                      header("Location: ..\index.php ");   

                     
                  }
                  else 
                  {
                    //header("Location: already_user_page.php");
                  }
                }  
   }
}

?>
