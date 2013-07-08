<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
	<?php
	//Color Switcher Cases
	switch(get_option('tiny_style')){
					case "aqua":
		    	$color = "aqua";
						break;
					
					case "green":		
				$color = "green";
						break;
					
					case "blue":
				$color = "blue";
						break;
					
					case "magenta":
				$color = "magenta";
						break;
					
					case "orange":
				$color = "orange";	
						break;
					
					case "red";
				$color = "red" ;		
					break;
					
					default:  
				$color = FALSE;
				}
	?>
    <!-- styles -->
    <link href="<?php bloginfo("template_url"); ?>/stylesheet/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/stylesheet/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
   
    <?php //load theme color style if it's not default
    if(get_option('tiny_style')!='default'): ?>
    <link href="<?php bloginfo("template_url"); ?>/stylesheet/colors/<?php echo $color ?>.css" rel="stylesheet">
    <?php endif; ?>
    
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--[if IE 7]>
		<link href="stylesheet/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
	
    <script src="<?php bloginfo("template_url"); ?>/javascript/jquery-1.9.1.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/javascript/bootstrap.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/javascript/jquery.validate.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/javascript/mobile.detect.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/javascript/custom.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php //comments_popup_script(); // off by default ?>
    <?php wp_enqueue_script( 'comment-reply' ); ?>
    <?php  wp_head() ?>
	<?php echo get_option('tiny_analytics') ?>
</head>
<body>
	<div id="top">
		<div class="container">
			<a href="#" class="logo"><span>*</span><?php bloginfo('name'); ?></a>
			<a href="#" class="menu-btn" data-placement="left" title="Main Menu">
				<i class="icon-reorder"></i>
			</a>
		</div>
	</div>
	<nav id="main-menu">
		<div class="container">
			 <?php echo wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
			 <?php get_sidebar() ?>
		</div>
		
	</nav>
	<section id="content">