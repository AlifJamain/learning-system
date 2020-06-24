<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("common/header.php");
include("includes/config.php");
 $id=$_GET['username'];

$sql=mysqli_query($con,"delete from mst_user where username='$id'");
 echo "<script>alert('User Delete Successfully');</script>";	
    echo "<script type='text/javascript'> document.location = 'userview.php'; </script>";
    ?>