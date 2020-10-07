<?php 
include_once('Conn.php');
$uname=$_POST['username'];
$pass=$_POST['password'];
$pre=$_POST['pre'];
mysql_query("insert into admin(username,password,pre) values('$uname','$pass','$pre')");

 ?>