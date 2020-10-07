<?php
include_once('Conn.php');
$stdid=$_GET['regno'];
$sql=mysql_query("select * from testscore where stdid=$stdid limit 1");
$numrows=mysql_num_rows($sql);
if ($numrows==1){
$row=mysql_fetch_assoc($sql);

echo '<table class="Table">
  <tr>
   
    <td>Score</td>
  </tr>
  <tr>
    <td>'.$row['score'].'%</td>
  </tr>
</table>';
}
else

{
	echo 'No Result Found';
	
	}
?>