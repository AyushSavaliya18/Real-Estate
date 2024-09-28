<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>CLASSIC_WATCH</title>
<style>

#body{
			background-image: url("img/apple-watch-series-3-lte-watchos-4-1-beta-1-video.jpg");
		
	}

</style>
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
<body id="body">
<!--header-->
<!--sticky-->

<?php include('function.php'); ?>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="select * from admin_login_table where Admin_Login_id ='" . $_POST["t1"] . "' and Admin_password ='" . $_POST["t2"] ."'";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["Admin_Login_id"]= $_POST["t1"];
		$_SESSION["Admin_password"]=$data[2];
		$_SESSION['loginstatus']="yes";
		header("location:index.php");
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>



<?php include('topforlogin.php'); ?>
<!--/sticky-->
<div>
<div class="col-sm-3" style=" min-height:450px;  margin-top: -400px;">

</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="500px" height="400px" align="center" class="tableshadow" style=" margin-right: 70px;">
	<tr><td colspan="2" class="toptd"></td></tr>

<tr><td></td><a href="../index.php"><font color="WHITE" align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GO BACK TO WEBSITE</a>
<td class="lefttxt"><table border="0" width="100px" height="200px"><td><font color="WHITE"><b>User Name</td></td><td><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" /></td></tr>
<tr><td class="lefttxt"><font color="WHITE"><b>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" /></td></tr></table>
<tr><td></td><td align="center" ><input type="submit" value="LOGIN" name="sbmt" /></td></tr>


</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>