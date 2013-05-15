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
<?php

if (!isset($session_id)) 
{
   redirect(site_url('home'));
   exit();
}

if (isset($_GET['logout'])) 
{
	$this->session->unset_userdata($result);
	redirect(site_url('login'));
}
?>
<body style="background-color:lavender;">

<div class="navbar navbar-inverse">
	<div class="navbar-inner">
  		<div class="container">
  			<a class="brand" href="<?php echo site_url('home'); ?>"> Blog</a>
    		<ul class="nav pull-right">
    			<?php
    			if (!empty($session_id)){ 
    				?>
    			   <li class="active"><a href="<?php echo site_url('newblog'); ?>">Create Blog</a></li>
    			<?php 
    		    }
    			?>

      			<li class="active">
      				<?php
    			    if (empty($session_id)){ 
    				?>
      				<a href="<?php echo site_url('login'); ?>">Login</a>
      				<?php 
    		   	    }
    		   	    else
    		   	    {
    			    ?>
      				<a href="<?php echo site_url('home/?logout=logout'); ?>">Log Out</a>
      				<?php 
    		    	}
    				?>

      			</li>
      				<?php
      				if (empty($session_id)){ 
    				?>
      				<li><a href="<?php echo site_url('register'); ?>">Signup</a></li>
      				<?php
      				}
    				?>
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
					$t = $title['id'];
				?>	
  				<tr>
  					<td><a href="<?php echo site_url("blogdetail/?t=$t"); ?>"><?= $title['title'] ?></a></td>
  				</tr>
  				<?php
				}

				?>
			</table>	
	    </div>
	</div>    
</div>
<body>
</html>