<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>CLASSIC_WATCH</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;  margin-top: -78px;">

<table>
<tr>
<td><?php include('left.php'); ?></td>
<td><form method="post" enctype="multipart/form-data">
<table style="margin-right: -700px;"   border="0" width="400px" height="450px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add Product</td></tr>
<tr><td class="lefttxt">Product Name</td><td><input type="text" name="t1" required="required" /></td></tr>
<tr><td class="lefttxt">Select Category</td><td><select name="t2" required/><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from categories_types";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
	{
			echo "<option value=$data[0] selected='selected'>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<tr><td class="lefttxt">Image</td><td><input type="file" name="t4" required="required" /></td></tr>
<tr><td class="lefttxt"> Price</td><td><input type="text" name="t8" required="required" /></td></tr>

<tr><td class="lefttxt">Qunatity</td><td><input type="text" name="t10" required="required" /></td></tr>
<tr><td class="lefttxt">Discription</td><td><textarea name="t7" required="required"></textarea></td></tr>
<tr><td class="lefttxt"> Company Name</td><td><input type="text" name="t11"  required="required" /></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td></tr>




</table>
</form></td>

</tr>

</table>

</div>
<div class="col-sm-9">
</div>

</div>

<?php include('bottom.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	//echo "<pre>"; print_r($_FILES); exit;
	$oldph=$_FILES['t4']['tmp_name'];
    $imgNm = "";
  	if(!empty($oldph)) { 
    	$imgNm = time().".jpg";
    	$newph="../images/".$imgNm;
    	move_uploaded_file($oldph,$newph);
		echo "<script>alert('new image path $newph::: $');</script>";
		echo "<script>alert('old image path ::: $oldph');</script>";
  	}
	// $cn=makeconnection();
	
	// $target_dir = "images/";
	// //t4
	// $target_file = $target_dir.basename($_FILES["t4"]["name"]);
	// $uploadok = 1;
	// $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	
	
	
		
	$s="insert into product_table(Product_name,Category_id ,image ,Price ,Quantity ,Description ,Company_name) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $imgNm . "','". $_POST["t8"] . "','" . $_POST["t10"] ."','" . $_POST["t7"] ."','" . $_POST["t11"] ."')";
	//echo "<pre>"; print_r($s); exit;
	mysqli_query($cn,$s);
	
	$_SESSION['Product_id']= $_POST['Product_id'];

	mysqli_close($cn);

	echo "<script>alert('Product added');</script>";
	

	// $select = "select * from product_table where product_name = ".$_POST['t1'];
    
    // $name = mysqli_query($cn,$select);
    
    // $num_of_rows= mysql_num_row($name);
    // if($num_of_rows >= 1 ){
    //     echo "<script>alert('Product already exist');</script>";
    // }
    // else{
    //     $s="insert into product_table(Product_name,Category_id ,image ,Price ,Quantity ,Description ,Company_name) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $imgNm . "','". $_POST["t8"] . "','" . $_POST["t10"] ."','" . $_POST["t7"] ."','" . $_POST["t11"] ."')";
    //     //echo "<pre>"; print_r($s); exit;
    //     mysqli_query($cn,$s);
        
    //     $_SESSION['Product_id']= $_POST['Product_id'];
    
    //     mysqli_close($cn);
    
    //     echo "<script>alert('Product added');</script>";
        
    // }
		
}
?>
</body>
</html>



