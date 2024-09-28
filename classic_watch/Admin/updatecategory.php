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
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="update CATEGORIES_TYPES set Category_Name='" . $_POST["t2"] ."' where Category_id='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px; margin-top: -78px;">

<table>
	<tr>
		<td><?php include('left.php'); ?></td>
		<td><form method="post">
<table  style="margin-right: -800px;"  border="0" width="500px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Category</td></tr>
<tr><td class="lefttxt">Selected Category Name</td><td><select name="t1" required/><option value="">Select</option>



<?php
$cn=makeconnection();
$s="select * from CATEGORIES_TYPES";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["t1"])
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
$s="select * from CATEGORIES_TYPES where Category_id='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Category_id=$data[0];
$Category_Name=$data[1];


mysqli_close($cn);

}

?>
<tr><td class="lefttxt"> Category Name</td><td><input type="text" required name="t2" value="<?php if(isset($_POST["show"])){ echo $Category_Name ;} ?> " /></td></tr>
</td></tr>


<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>
</table>
</form></td>
	</tr>
</table>

</div>
<div class="col-sm-9">






</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>



