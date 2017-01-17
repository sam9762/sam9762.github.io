
	<!DOCTYPE html>

	<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>Login form</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	   <form class="form-horizontal" action="http://localhost/xampp/10_login/login.php">
	<fieldset>

	<!-- Form Name -->
	<div class="col-lg-12">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">Please enter your login information</div>
							</div>
	</div>				

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-3 control-label" for="emailid">Patient ID</label>  
	  <div class="col-md-4">
	  <input id="uid" name="uid" placeholder="" class="form-control input-md" required="" type="text">
	    
	  </div>
	</div>

	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-3 control-label" for="password">Password</label>
	  <div class="col-md-4">
	    <input id="pwd" name="pwd" placeholder="" class="form-control input-md" required="" type="password">
	    <span class="help-block"> </span>
	  </div>
	</div>

	<div class="row">
	                                                            
		                                                               <div class="form-group">
		  <label class="col-md-3 control-label" for=""></label>
		  <div class="col-md-3"> 
		    <label class="radio-inline" for="-0">
		      <input id="0" type="radio" checked="checked" value="">
		      Patient
		    </label> 
		                                                            </div>
		                                                           
		                                                               <div class="form-group"> 
																	 
			  <div class="col-md-3">
			    <button id="login" name="login" class="btn btn-primary">Continue</button>
			  </div>
			
		                                                            </div>
		                                                        </div>
																</div>

	<!--Radio 
	<div class="row">
<div class="form-group">
  <label class="col-md-3 control-label" for=""></label>
  <div class="col-md-3"> 
    <label class="radio-inline" for="-0">
      <input id="0" type="radio" checked="checked" value="">
      Patient
    </label> 
  

	<!-- Button 
	<div class="form-group">
	  <label class="col-md-3 control-label" for="login"></label>
	  <div class="col-md-3">
	    <button id="login" name="login" class="btn btn-primary">Continue</button>
	  </div>
	</div>
	</div>
</div>
</div>-->
	</fieldset>
	</form>
<?php 
        if( isset($_COOKIE["loginerr"]) )
            echo("<br/>" .$_COOKIE["loginerr"]);
		else
		setcookie("loginerr","",time()-1 );
        ?>
		

	</body>
	</html>