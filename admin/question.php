<?php 
include_once('Conn.php');

if (isset($_POST['question'])){
$qn=$_POST['question'];
$class=$_POST['class'];
$test=$_POST['test'];
$opa=$_POST['optiona'];
$opb=$_POST['optionb'];
$opc=$_POST['optionc'];
$opd=$_POST['optiond'];
$cor=$_POST['correct'];
$no=$_POST['No'];
$qry=mysql_query("insert into question(qno,question,qclass,test,option1,option2,option3,option4,correctanswer)values('$no','$qn','$class','$test','$opa','$opb','$opc','$opd','$cor')") or die ('could Not Insert'.mysql_error());

} 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBT EXAM</title>
<link href="../style/style.css" type="text/css" rel="stylesheet" />
<link href="../style/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="..style\jGrowl\jquery.jgrowl.css" type="text/css" rel="stylesheet" />
<link href="..style\bootstrap-wysihtml5\src\bootstrap-wysihtml5.css" type="text/css" rel="stylesheet" />
<script src="..style\jGrowl\jquery.jgrowl.js" type="text/javascript"> </script>
<script src="..style\bootstrap-wysihtml5\src\bootstrap-wysihtml5.js"type="text/javascript"> </script>
<script src="../style/ckeditor/ckeditor.js" type="text/javascript"> </script>
<script src="../style/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"type="text/javascript"> </script>
<script src="../style/ckeditor/ckeditor.js" type="text/javascript"> </script>


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
<div class="alert alert-success alert1">
<b>Success! </b>Question Added Sucessfully
</div>
<div class="alert  alert-danger " id="error">
<b>Error! </b>An error occurred while processing your request
</div>

  <h3><strong>Add New Questions To Database</strong></h3>
  <form action="" method="post" name="form1" id="form1" class="login">
    <label> <strong>Question</strong></label>
 <textarea name="question" cols="" rows="" class="ckeditor"> </textarea><br/>
 
 <label> <strong>Number</strong></label><br/>
<input name="No" type="text"  require class="username"/><br/>

<label> <strong>Class</strong></label><br/>
<input name="class" type="text" class="username" required /> <br/>

<label> <strong>Test</strong></label><br/>
<input name="test" type="text"  require class="username"/><br/>

<label> <strong>Option A</strong></label><br/>
<input name="optiona" type="text" id="opt1" require class="username" change="optiona();"/>
  <br />

<br/>
<label> <strong>Option B</strong></label> <br/>

<input name="optionb" type="text"  require class="username"/><br/>
<label> <strong>Option C</strong></label><br/>

<input name="optionc" type="text"  require class="username"/><br/>
<label> <strong>Option D</strong></label><br/>

<input name="optiond" type="text"  require class="username"/>
<br/>
<label> <strong>Correct Option</strong></label><br/>
<input name="correct" type="text"  require class="username"/>

<br/>
<input type="submit" name="Button1" class="loginbtn" value="Submit"/>
</form>

<script>
						jQuery(document).ready(function(){
							$(".alert1").hide();
							jQuery("#error").hide();
						jQuery("#form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type:"POST",
									url:"../admin/question.php",
									data:formData,
									success: function(html){
								//alert(html);
									jQuery(".alert1").fadeToggle("fast");
									
									}
								});
								return false;
							});	
							});					
</script>



</div>
</div>
</div>
</div>
</div>




</body>
</html>