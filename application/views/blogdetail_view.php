<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-responsive.min.css">
	<script type="text/javascript" src="<?=base_url()?>tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
                      
              // O2k7 skin (silver)
              tinyMCE.init({
                // General options
                mode : "exact",
                elements : "elm1",
                theme : "advanced",
                // skin : "o2k7",
                //  skin_variant : "black",
                plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

                // Theme options
                theme_advanced_buttons1 : "bold,italic,underline,strikethrough,formatselect,fontselect,fontsizeselect,",
                theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,insertdate,inserttime,preview,|,forecolor,backcolor,charmap,emotions,iespell,media,|,fullscreen",
                
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                //theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true,
                theme_advanced_path : false ,
                // Example content CSS (should be your site CSS)
                content_css : "css/content.css",

                // Drop lists for link/image/media/template dialogs
                template_external_list_url : "lists/template_list.js",
                external_link_list_url : "lists/link_list.js",
                external_image_list_url : "lists/image_list.js",
                media_external_list_url : "lists/media_list.js",

                // Replace values for the template plugin
                template_replace_values : {
                    username : "Some User",
                    staffid : "991234"
                }
            });
        </script>
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
			<div class="span12">

				<form name="input" class="form-action" action="<?php echo site_url('blogdetail/process'); ?>" style="margin:1%;" method="post">
					<h2>Blog</h2>
					<?php
					foreach($userpost as $title)
					{	
						$mpostid  = $title['id'];
						$mtitle   = $title['title'];
						$mcontent = stripslashes(html_entity_decode($title['content']));
					}	
					?>	

		        	<!--<p><input type="text" class="span8" name="title" value="<?php echo $mtitle; ?>" placeholder="Title" readonly></p>
		        	<p><textarea id="content" name="content" rows="8" class="span8" readonly></textarea></p>-->
		        	<p style="color:blue;"><strong><?php echo $mtitle; ?></strong></p>
		        	<p style="color:blue;"><?php echo $mcontent; ?></p>
		        	<p><Strong>Comment on Blog</strong></p>
		        	<p><input type="text" class="span5" name="name" value="" placeholder="Name"></p>
		        	<p><input type="text" class="span5" name="email" value="" placeholder="Email"></p>
	        		<p><textarea id="elm1" name="comment" rows="10" class="span5"></textarea></p>
	       			<p><button class="btn btn-success btn-meduim" name="submit" value="<?php echo set_value('comment'); ?>" type="submit">Post</button></p>
	       			<p><input type="hidden" name="postid" value="<?= $mpostid ?>" ></p>
		       		<!--<p><button class="btn btn-success btn-meduim" name="submit" value="<?php //echo set_value('content'); ?>" type="submit">Post</button></p>-->
		       	</form>	  
		    </div>   	
	    </div>
	</div>    
</div>
<body>
</html>