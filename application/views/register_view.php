<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.min.css">
</head>

<body style="background-color:white;">
<?php echo validation_errors(); ?>
<div class="container">
	<div class="row" style="background-color:cadetblue;">	
		<div class="span6">
			<h1>Blog</h1>
		</div>	
		<div class="span6">
			
		</div>
	</div>	
    <div class="row" style="margin-top:10%;padding:1%;">	    
		<div class="span5 offset4" style="background-color:lavender;">
			<form name="input" class="form-action" action="<?php echo base_url();?>index.php/register/process" style="margin:10%;" method="post">
				<p><Strong>Register</strong></p>
	        	<p><input type="text" class="span4" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email"></p>
	        	<p><input type="text" class="span3" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username"></p>
	       		<p><input type="password" class="span3" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"></p>
	       		<p><input type="password" class="span3" name="retype" value="<?php echo set_value('retype'); ?>" placeholder="Retype Password"></p>
	       		<p><button class="btn btn-success btn-small" name="submit" type="submit">Register</button></p>
	       	</form>	
	    </div>
	    <div class="span3">
	         
	    </div>
	</div>    
</div>
<body>
</html>