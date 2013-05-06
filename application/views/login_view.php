<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css\bootstrap-responsive.min.css">
</head>

<body style="background-color:white;">

<div class="container">
	<div class="row" style="background-color:cadetblue;">	
		<div class="span6">
			<h1>Blog</h1>
		</div>	
		<div class="span6">
			
		</div>
	</div>	
    <div class="row" style="margin-top:10%;padding:1%;">	    
		<div class="span4 offset4" style="background-color:lavender;">
			<form name="input" class="form-action" action="<?php echo base_url();?>index.php/login/process" style="margin:10%;" method="post">
				<p><Strong>LOGIN</strong></p>
	        	<p><input type="text" size="30" name="username" value="" placeholder="Username"></p>
	       		<p><input type="password" size="30" name="password" value="" placeholder="Password"></p>
	       		<p><button class="btn btn-warning btn-small" name="submit" type="submit">Login</button>
	       		<a href="<?php echo base_url();?>index.php/forgot" name="">Forgot Password</a><p>
	       		<a href="<?php echo base_url();?>index.php/login/process" name="">Register</a>
	       	</form>	
	    </div>
	    <div class="span5">
	         
	    </div>
	</div>    
</div>
<body>
</html>