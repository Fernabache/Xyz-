 <?php 
$tag="";
if ((isset($_GET['type']))) 
$tag=$_GET['type'];
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBT EXAM</title>
<link href="../style/style.css" type="text/css" rel="stylesheet" />
<link href="../style/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script src="../style/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="../style/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<link href="../style/jquery-ui-1.9.2.custom/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/javascript"/>
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
 <div class="col-md-3">
 </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$(".drop").hide();
$(".qdrop").hide();
$(".parent").click(function(){
	$(".drop").slideToggle("slow");
});

$("#q").click(function(){
	$(".qdrop").slideToggle("slow");
});
});
</script>
<div class="row">
<div class="col-md-12">
<div class="col-md-3 dashboard">
<div class="parent">
<a href="#">User Management</a><br/>
<hr />
</div>
<div class="drop">
<a href="?type=admin">
Add Admin</a> <br/>
<hr />
<a href="?type=student"> Student </a><br/>
<hr />
Acc Setting<br/> <hr />
</div>
<a href="?type=class">
Class </a><br/><hr />
<a href="?type=test">Test </a><br/><hr />
<a href="#" id="q">Question</a> <br/><hr />
<div class="qdrop">
<a href="?type=question">Add Questions</a> <br/><hr />
<a href="?type=qlist">View Questions</a> <br/><hr />
</div>
<a href="?type=result" id="result">Check Result</a> <br/><hr />

</div>
<div class="col-md-8 ques">
<?php    

if ($tag=="")
   include_once('adminreg.php');
    elseif($tag=="admin")
	include_once('adminreg.php');
	elseif ($tag=="student")
	include_once('stdreg.php');	
	elseif ($tag=="class")
	include_once('class.php');
	elseif($tag=="test")
	include_once('test.php');
	elseif($tag=="question")
	include_once('question.php');
	elseif ($tag=="qlist")
	include_once('question_list.php');
	elseif ($tag=="result")
	include_once('view_all_result.php');
?>
</div>
<script >
//$(document).ready(function(e) {
//	$('#dialog').hide();
//$(function(){
//$('#dialog').dialog({
//	autoOpen:false	
//});
//	
//	
//	$('#result').on('click',function(){
//	$('#dialog').dialog('open');
//	});
//	
//	jQuery("#checker").click(function(e){
//		var regno=$('#Regno').val();
//								e.preventDefault();
//								//alert(regno);
//								var formData = jQuery(this).serialize();
//								$.ajax({
//									
//									type:"POST",
//									url:"../admin/result_checker.php?regno="+ regno,
//									data:formData,
//									success: function(html){			
//									if(html==0){
//								
//										//alert("something is wrong");
//										
//										return false;
//											
//										}else{
//											//alert("everything is alright");	
//											
//											//alert(html);
//											$('#re').append(html)
//										
//										}
//								}
//							});			
//							
//});
//	
//});
//
//});
</script>


<!--<div id="dialog" title="Result Checker">

<form action="" method="post">
<input name="regno" type="text" id="Regno" placeholder="Enter Student ID" /> <br/>
<input value="Check" name="button" type="button" class="loginbtn" id="checker"/>

<div id="re">


</div>

</form>

</div>-->


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
</div>


</div>




</body>
</html>