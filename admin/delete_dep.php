<?php
include('connect.php');
$get_id=$_GET['id'];
mysql_query("delete from department where dep_id='$get_id'")or die(mysql_error());
header('location:department.php');
?>
