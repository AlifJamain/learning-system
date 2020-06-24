<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

<body>
<?php
include("common/header.php");
include("includes/config.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysqli_error());
	if(mysqli_num_rows($rs)<1)
	{
		echo "<script>alert('Invalid Details');</script>";	
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
	else
	{
	echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";	
	$_SESSION['alogin']=$_POST['loginid'];;
	}
}
else if(!isset($_SESSION[alogin]))
{
	echo "<script>alert('Please Log In First');</script>";	
		exit;
}			
		


?>



</body>
</html>
