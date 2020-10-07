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
<div class="col-md-6 .dashboardcon">
<div align="center">
  <h3><strong>Add Class</strong></h3>
<div class="alert alert-success alert1">
<b>Success! </b>Class Added Sucessfully
</div>
<div class="alert  alert-danger " id="error">
<b>Error! </b>An error occurred while processing your request
</div>
<form action="class_parse.php" method="post" name="form1" class="login">
  <label> <strong>Class Name</strong></label>
  <input name="name" type="text" class="username" required/><br/>
<label> <strong>Class Teacher</strong></label>
<input name="teacher" type="text" class="username" required /> <br/>

<input type="submit" name="Button1" class="loginbtn" value="Register"/>
</form>


<script>
						jQuery(document).ready(function(){
							$(".alert1").hide();
							jQuery("#error").hide();
						jQuery(".login").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type:"POST",
									url:"../admin/class_parse.php",
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
<div class="col-md-3">
</div>
</div>
</div>

</div>




</body>
</html>