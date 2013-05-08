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
<?php echo validation_errors(); ?>
<div class="container">
	<div class="row" style="background-color:cadetblue;">	
		<div class="span6">
			<h1>Blog</h1>
		</div>	
		<div class="span6">
			
		</div>
	</div>	
    <div class="row" style="margin-top:0%;padding:0%;">	    
		<div class="span6" style="background-color:lavender;">
			<form name="input" class="form-action" action="<?php echo site_url('newblog/process'); ?>" style="margin:1%;" method="post">
				<p><Strong>Create New Blog</strong></p>
	        	<p><input type="text" class="span5" name="title" value="<?php echo set_value('title'); ?>" placeholder="Title"></p>
	        	<p><textarea id="elm1" name="content" rows="15" style="width: 40%"></textarea></p>
	       		<p><button class="btn btn-success btn-meduim" name="submit" value="<?php echo set_value('content'); ?>" type="submit">Create</button></p>
	       	</form>	
	    </div>
	    <div class="span6">
	         
	    </div>
	</div>    
</div>
<body>
</html>