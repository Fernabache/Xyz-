 <?php
 include_once('../admin/conn.php');

 $name=($_POST['tname']);
 $time=$_POST['Time'] * 60;
 
  $sql=mysql_query("insert into test(name,time)values('$name','$time')");
 if ($sql){
	 echo 'Yes'; }	  
 else{
	 echo'false';
	 }
 ?>