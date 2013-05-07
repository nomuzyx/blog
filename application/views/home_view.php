<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.min.css">
	<script src="<?=base_url()?>js/jquery.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js"></script>
</head>
<body style="background-color:lavender;">

<div class="navbar navbar-inverse">
	<div class="navbar-inner">
  		<div class="container">
  			<a class="brand" href="<?php echo site_url('home'); ?>"> Blog</a>
    		<ul class="nav pull-right">
      			<li class="active"><a href="<?php echo site_url('login'); ?>">Login</a></li>
      			<li><a href="<?php echo site_url('register'); ?>">Signup</a></li>
    		</ul>
  		</div>
  	</div>	
</div>	
<div class="container">
    <div class="row" style="margin-top:0%;padding:0%;">	    
		<div class="span6">
				<p><strong>Blog List</strong></p>
	    </div>
	    <div class="span6">
			<div class="input-append">
    			<input type="text" class="span2 search-query">
    			<button type="submit" class="btn">Search</button>
  			</div>
	    </div>
	</div>    
	<div class="row" style="margin-top:0%;padding:0%;">	    
			<table class="table">
				<?php
				foreach($userpost as $title)
				{
  					echo "<tr>";
  					echo '<td><a href=site_url("blogdetail")>' . $title['title'] . "</a></td>";
  					echo "</tr>";
				}
				?>
			</table>	
	    </div>
	</div>    
</div>
<body>
</html>