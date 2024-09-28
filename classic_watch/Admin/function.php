<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
	error_reporting(0);
	$cn=mysqli_connect("localhost","root","","classic_watch");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost","root","","classic_watch");
?>
</body>
</html>