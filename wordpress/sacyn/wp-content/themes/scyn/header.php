<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<meta http-equiv="content-type" content="text/ html;charset=utf-8" />
<meta name="generator" content="WordPress 4.5.3" />
<meta http-equiv="content-type" content="text/ html;charset=utf-8" />
<title>
<?php

		global $page, $paged;

		wp_title( '|', true, 'right' );

		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) )

			echo " | $site_description";

		if ( $paged >= 2 || $page >= 2 )

			echo ' | ' . sprintf( __( 'Page %s', 'Arctic Outback Adventures' ), max( $paged, $page ) );

	?>
	
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/btnhover.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<!--[if lte IE 9]>
      <link href='<?php echo get_template_directory_uri(); ?>/css/animations-ie-fix.css' rel='stylesheet'>
<![endif]-->
<link rel="shortcut icon" href="favicon.ico">
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<header class="header">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
			      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="mainlogo" /></a> 
			    </div>
 <div class="MainNav">
			    <!-- Collect the nav links, forms, and other content for toggling -->
			  
			   <?php
    wp_nav_menu( array(
            'menu'              => 'main-menu',
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'navbar-collapse collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker()
            )
        );
    ?> 
			    </div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
</header>

