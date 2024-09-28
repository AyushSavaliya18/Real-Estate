<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>My-tour bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel='stylesheet' type="text/css" />

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
	$s="insert into categories_types(Category_id) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;   margin-top: -78px;  ">

<table>

<tr>
<td><?php include('left.php'); ?></td>
<td><form method="post">
<table style="margin-right: -900px;"   border="0" width="100%" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Product</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="1" align="center" width="95%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">Product_id</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Product Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Category_id</td>
<td style="font-size:15px; padding:50px; font-weight:bold;">image</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Quantity </td>
<td style="font-size:15px; padding:50px; font-weight:bold;">Description  </td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Company_name</td></tr>

<?php

$s="select * from product_table ORDER BY Product_id DESC";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$data[0]</td>
		<td style=' padding:5px;'>$data[1]</td>
		<td style=' padding:5px;'>$data[2]</td>
		<td style=' padding:5px;'><IMG src='../images/$data[3]' style='height:50PX' /></td>
		<td style=' padding:5px;'>$data[4]</td>
		<td style=' padding:5px;'>$data[5]</td>
		<td style=' padding:5px;'>$data[6]</td>
		<td style=' padding:5px;'>$data[7]</td>";
}

?>
</table>
</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>