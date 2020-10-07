<?php 
session_start();
include_once('Conn.php');

$qry2=mysql_query("select * from question order by qclass asc");
$numrows=mysql_num_rows($qry2);
//echo '1';


 //   <td>$fetch['qclass'] </td>
//    <td> $_SESSION['opt1'] </td>
//    <td> $_SESSION['opt1'] </td>
//    <td> $_SESSION['opt2'] </td>
//    <td>$_SESSION['opt3'] </td>
//    <td> $_SESSION['opt4'] </td>
//    <td> $_SESSION['cor'] </td>

  
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
<div class="col-md-1">
</div>
<div class="col-md-10 dashboardcon">
<div align="center">

<script type="text/javascript">
function optiona(){
	var op1= $('#opt1').val();
	$('#rad1').val(opt1);

	}


</script>

  <h3><strong>Questions List</strong></h3>
 <table  class="table table-hover well">
  <tr>
    <td>Question N0</td>
    <td>Questions</td>
    <td>Class</td>
    <td>Test</td>
    <td>Option A</td>
    <td>Option B</td>
    <td>Option C</td>
    <td>Option D</td>
     <td>Correct</td>
     <td>Modify</td>
  </tr>  
  <?php
 while( $fetch=mysql_fetch_assoc($qry2))
{
	//$_SESSION['question']=$fetch['question'];
//  $_SESSION['opt1']=$fetch['option1'];
//$_SESSION['opt2']=$fetch['option2'];
//$_SESSION['opt3']=$fetch['option3'];
//$_SESSION['opt4']=$fetch['option4'];
//$_SESSION['cor']=$fetch['correctanswer'];
	
 echo '<tr>
  <td>  '.$fetch['qno'].' </td>
  <td> '.$fetch['question'].'  </td>
   <td> '.$fetch['qclass'].'  </td>
    <td> '.$fetch['test'].'  </td>
   <td>   '.$fetch['option1'].'       </td>
     <td>   '.$fetch['option2'].'       </td>
	   <td>   '.$fetch['option3'].'       </td>
	     <td>   '.$fetch['option4'].'       </td>
		   <td>   '.$fetch['correctanswer'].'       </td>
		    <td> <a href=#?qno='.$fetch['qno'].' > Edit </a> </td>
  </tr>';
}?>
</table>



</div>
</div>
</div>
</div>
</div>




</body>
</html>