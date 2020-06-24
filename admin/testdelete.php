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
 $test_id=$_GET['test_id'];

$sql=mysqli_query($con,"delete from mst_test where test_id='$test_id'");
echo "<script>alert('Quiz Delete Successfully');</script>";	
    echo "<script type='text/javascript'> document.location = 'testview.php'; </script>";
?>