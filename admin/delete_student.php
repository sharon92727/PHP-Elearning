<?php
include('connect.php');
$get_id=$_GET['id'];

mysql_query("delete from student where student_id='$get_id'")or die(mysql_error());
header('location:student.php');

?>