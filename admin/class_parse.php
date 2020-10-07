<?php 
include_once('Conn.php');
$name=$_POST['name'];
$teacher=$_POST['teacher'];
mysql_query("insert into class(classname,classteacher) values('$name','$teacher')");
  ?>