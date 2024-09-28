<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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

<?php
// if(isset($_POST["sbmt"]))
// {
// 	$cn=makeconnection();
// 	$f1=0;
	
	
// 	$target_dir = "productimage/";
// 	//t4
// 	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
// 	$uploadok = 1;
// 	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	

// 		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
// 			$f1=1;
// 	} 	

	
	
	
	
	
	
	
	 
	
// }
	 
?>

<?php
if(isset($_POST["sbmt"]))
{
	/*$cn=makeconnection();
	$target_dir = "productimage/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);*/
	
	if (empty($_FILES['t4']['name'])) {
	
		$s="update product_table set Product_name='" . $_POST["t1"] ."',Category_id='" . $_POST["t2"] . "',image='" . $_POST["h1"] . "',Price='" . $_POST["t8"] . "',Quantity='" . $_POST["t10"] . "',Description='" . $_POST["t7"] . "',Company_name='" . $_POST["t11"] . "' where Product_id='" . $_POST["s1"] . "'";
	
}
else
{
	$oldph=$_FILES['t4']['tmp_name'];
    $imgNm = "";
  	if(!empty($oldph)) { 
    	$imgNm = time().".jpg";
    	$newph="../images/".$imgNm;
    	move_uploaded_file($oldph,$newph);
  	}
	
	$s="update product_table set Product_name='" . $_POST["t1"] ."',Category_id='" . $_POST["t2"] . "',image='" .$imgNm . "',Price='" . $_POST["t8"] . "',Quantity='" . $_POST["t10"] . "',Description='" . $_POST["t7"] . "',Company_name='" . $_POST["t11"] . "' where Product_id='" . $_POST["s1"] . "'";}
	//echo "<pre>"; print_r($s); exit;
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Product Update');</script>";
    }

?>

<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">

<table><tr>
<td><?php include('left.php'); ?></td>
<td><form method="post" enctype="multipart/form-data">
<table   style="margin-right: -750px;"   border="0" width="500px" height="700px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Product</td></tr>
<tr><td class="lefttxt">Select Product</td><td><select name="s1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from product_table";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from product_table where Product_id='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Product_id=$data[0];
$Product_name=$data[1];
$Category_id=$data[2];
$image=$data[3];
$Price=$data[4];
$Quantity= $data[5];
$Description=$data[6];
$Company_name=$data[7];

mysqli_close($cn);

}

?>

</td></tr>

<tr><td class="lefttxt">Product Name</td><td><input type="text"  required="required"  value="<?php if(isset($_POST["show"])){ echo $Product_name ;} ?> " name="t1"  /></td></tr>
<tr><td class="lefttxt">Select Category</td><td><select name="t2"  required="required"  /><option value="<?php if(isset($_POST["show"])){ echo $Category_id ;} ?>">Select</option>

<?php
$cn=makeconnection();
$s="select * from categories_types";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $Category==$data[0])
	{
		
		echo "<option value=$data[0] selected='selected' >$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	
}
}
mysqli_close($cn);



?>







</select>

<tr><td class="lefttxt">Image</td><td><img src="../images/<?php echo @$image; ?>" width="150px" height="50px" />
<input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $image;} ?>" />
</td></tr>
<tr><td class="lefttxt">Image</td><td><input type="file"  required="required"  name="t4"/></td></tr>
<tr><td class="lefttxt"> Price</td><td><input type="text"  required="required"  name="t8" value="<?php if(isset($_POST["show"])){ echo $Price ;} ?> " /></td></tr>
<tr><td class="lefttxt"> Quantity</td><td><input type="text"  required="required"  name="t10" value="<?php if(isset($_POST["show"])){ echo $Quantity ;} ?> " /></td></tr>

<tr><td class="lefttxt">Description</td><td><textarea name="t7" /><?php if(isset($_POST["show"])){ echo $Description ;} ?></textarea></td></tr>

<tr><td class="lefttxt"> Comapany_name</td><td><input type="text" name="t11" value="<?php if(isset($_POST["show"])){ echo $Company_name ;} ?> " /></td></tr>





<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>




</table>
</form>
</td>

</tr></table>

</div>
<div class="col-sm-9">







</div>


</div>
<?php include('bottom.php'); ?>


	
		


</body>
</html>


