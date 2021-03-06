<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->	
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery-1.8.0.min.js"></script>
		<?php if( is_page('contact') ){ ?>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery.validate.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/form_verif.js"></script>
		<?php }?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap.js"></script>		
		<?php wp_head(); ?>				
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">
					
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow">&nbsp;</a></p>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					
					<nav class="clearfix">  
					    <ul class="clearfix">  
					        <li><a href="<?php echo home_url(); ?>/home">Home</a></li>  
					        <li><a href="<?php echo home_url(); ?>/portfolio">Portfolio</a></li>  
					        <li><a href="<?php echo home_url(); ?>/services">Services</a></li>  
					        <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
					        <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>  
					        <li><a href="<?php echo home_url(); ?>/about">About</a></li>      
					    </ul>  
					    <a href="#" id="pull"><i class="icon-align-right icon-white"></i> Menu</a>  
					</nav>  
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
