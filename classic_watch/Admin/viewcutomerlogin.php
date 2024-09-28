<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>CLASSIC_WATCH | Home :: </title>
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
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;   margin-top: -78px;">

<table>
	<tr>
		<td><?php include('left.php'); ?></td>
		<td><form method="post">
<table  style="margin-right: -900px;"    border="0" width="90%" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Custmer</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="1" align="center" width="95%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">User_Id</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Name </td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Mobile_Number  </td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Email_Id </td>
<!-- <td style="font-size:15px; padding:5px; font-weight:bold;">Password </td> -->

<td style="font-size:15px; padding:5px; font-weight:bold;">Birthdate </td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Address </td>
<td style="font-size:15px; padding:5px; font-weight:bold;">City </td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Pincode </td>
</tr>

<?php

$s="select * from user_master";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$data[0]</td>
		<td style=' padding:5px;'>$data[1]</td>
		<td style=' padding:5px;'>$data[2]</td>
		<td style=' padding:5px;'>$data[3]</td>
		<td style=' padding:5px;'>$data[5]</td>
		<td style=' padding:5px;'>$data[6]</td>
		<td style=' padding:5px;'>$data[7]</td>
		<td style=' padding:5px;'>$data[8]</td>

    ";		


}


?>

</table>
</td></tr></table>

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