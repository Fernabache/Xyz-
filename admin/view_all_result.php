
<?php
include_once('Conn.php');
//$stdid=$_GET['regno'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBT EXAM</title>
<link href="../style/style.css" type="text/css" rel="stylesheet" />
<link href="../style/bootstrap.min.css" type="text/css" rel="stylesheet" />
<style type="text/css">
body {
	background-image: url(../images/img02.png);
}
</style>
</head>

<body>
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<div class="col-md-3">
</div>
<div class="col-md-9 .dashboardcon">
<div align="center">
  <h3><strong>Student Result Page</strong></h3>
  
  <table class="table table-condensed" bgcolor="#FFFFFF" border="1">
   <thead>
  <tr>

    <td>ID</td>
    <td>Name</td>
    <td>Class</td>
    <td>Test</td>
    <td>Result</td>
     <td>View Ans</td>
  </tr>
  </thead>
 <?php 
  $sql=mysql_query("select * from testscore");
$numrows=mysql_num_rows($sql);
if ($numrows>0){
while($row=mysql_fetch_assoc($sql)){

$sql2=mysql_query("select * from student where id=".$row['stdid']."");
$numrows2=mysql_num_rows($sql2);
while($row2=mysql_fetch_assoc($sql2)){
$sql3=mysql_query("select * from test where id=".$row['testid']."");
$numrows3=mysql_num_rows($sql3);
while($row3=mysql_fetch_assoc($sql3)){

?>

  <tr>
    <td><?php echo $row2['id']; ?></td>
    <td> <?php echo $row2['fullname']?></td>
    <td> <?php echo $row2['class']?></td>
    <td> <?php echo $row3['name']?></td>
    <td> <?php echo $row['score']?></td>
    <td> <?php echo '<a href=review.php?stdid='. $row['stdid'].' class="btn-primary">View</a>'?></td>
  </tr>

 <?php

  }//end of third loop


}//end of second loop
}//end of first loop

}//end of if
	else{
	echo 'No Result Found';
	}
   ?>
     </table>
</div>
</div>

</div>

</body>
</html>