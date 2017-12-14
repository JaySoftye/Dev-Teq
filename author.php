<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>
    
    <title><?php wp_title('|', true, 'right'); ?></title>
    
<!-- jQuery -->
<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<!--[if gt IE 8]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script><!--<![endif]-->
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Custon Javascript Functions -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/javascript.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap-theme.min.css" />

<!-- Custom CSS -->
<link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/style-profile.css" rel="stylesheet" type="text/css"> 

<!-- Roboto -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">  

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">

</style>
    
</head>
<body>
  
    <!-- End Header. Begin Body Content -->

<div>
	<div id="background-author" class="container-fluid">
   		<div class="row">
			
            <div class="col-md-2"></div>	
            <div class="col-md-8 whitebg">
            	<div class="vertical-center">
                	<div class="row">
                    	<div class="col-xs-1"></div>
                    	<div class="col-xs-10">
                
						<?php
							if(isset($_GET['author_name'])) :
								$curauth = get_userdatabylogin($author_name);
							else :
								$curauth = get_userdata(intval($author));
							endif;
						?>

<h1><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>

<h2>Title: <?php echo $curauth->nickname; ?></h2>
<dl>
<dt>Profile</dt>
<dd><?php echo $curauth->user_description; ?></dd>
</dl>

                        </div>
                        <div class="col-xs-1"></div>
                    </div>
                </div>
           	</div>    
			<div class="col-md-2"></div>
                  
		</div>
    
	</div>
</div>     
        
</body>
</html>