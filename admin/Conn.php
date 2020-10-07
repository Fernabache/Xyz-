<?php
$server='localhost';
$user='';
$pass='';
$database='CBT';
mysql_connect($server,$user,$pass)or die ('could not connect'.mysql_error());
mysql_select_db($database) or die ('could not select'.mysql_error());


?>