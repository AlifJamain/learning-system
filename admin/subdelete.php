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
 $sub_id=$_GET['sub_id'];

$sql=mysqli_query($con,"delete from mst_subject where sub_id='$sub_id'");
 echo "<script>alert('Lesson Delete Successfully');</script>";	
    echo "<script type='text/javascript'> document.location = 'subview.php'; </script>";
    ?>