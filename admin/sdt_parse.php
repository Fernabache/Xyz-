<?php 
include_once('Conn.php');

$name=$_POST['name'];
$class=$_POST['class'];
$dept=$_POST['dept'];
$uname=$_POST['uname'];
$pass=$_POST['password'];

mysql_query("insert into student(fullname,username,class,dept,password)values('$name','$uname','$class','$dept','$pass')");

 ?>