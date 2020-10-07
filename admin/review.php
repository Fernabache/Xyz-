
<?php
include_once('Conn.php');
$stdid=$_GET['stdid'];

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
<div class="col-md-12 header ">
<div class="col-md-3">
<img src="../images/logo.gif" class="logo"/>
</div>
<div class="col-md-6">
<div class="headtext" >
 XYZ International School
 </div>
 </div>
 
<div class="row">
<div class="col-md-12">
<div class="col-md-1">
<button type="button" class="btn btn-success" onclick="window.location='dashboard.php'">DashBoard</button>
</div>
<div class="col-md-11 .dashboardcon">
<div align="center">
  <h3><strong>Examination Review Page</strong></h3>
  
  <table class="table table-condensed" bgcolor="#FFFFFF" border="1">
   <thead>
  <tr>

    <td><b>Name</b></td>
    <td><b>Questions NO</b></td>
    <td><b>Answer</b></td>
     <td><b>Remark</b></td>
  </tr>
  </thead>
 <?php 
//  $sql=mysql_query("select * from testscore stdid=6");
//$numrows=mysql_num_rows($sql);
//if ($numrows>0){
//while($row=mysql_fetch_assoc($sql)){
$sql3=mysql_query("select * from student where id=".$stdid."");
$numrows3=mysql_num_rows($sql3);
while($row3=mysql_fetch_assoc($sql3)){
$sql4=mysql_query("select * from testattempt where stdid=".$stdid."");
$numrows4=mysql_num_rows($sql4);
while($row4=mysql_fetch_assoc($sql4)){

?>

  <tr>
    <td> <?php echo $row3['fullname']?></td>
    <td> <?php echo $row4['quid']?></td>
    <td> <?php echo $row4['ans']?></td>
    <td> <?php  if ($row4['ans'] === $row4['correctans']){
		echo '<img src="../images/Yes.ico" alt="Correct"> Correct';
		}    
		else{echo '<img src="../images/Erase.ico" alt="wrong">Wrong';
			} ?></td>
  </tr>

 <?php
 }//third loop
}//end of second loop
//}//end of first loop

//}//end of if
//
//	else{
//	echo 'No Result Found';
//	}

   ?>
     </table>
</div>
<div class="col-md-1">
</div>
</div>

</div>


<div class="row">
<div class="col-md-12 footer">
<div class="col-md-3">

</div>
<div class="col-md-6">
<div class="footertext">
 XYZ International School &copy; 2015
</div>
 </div>
 <div class="col-md-3">
 </div>
</div>

</body>
</html>