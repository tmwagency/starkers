<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!--[if lte IE 8]>
                        <link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/kickoff-old-ie.css" />
		<![endif]-->
		<!--[if gt IE 8]><!-->
			<link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/kickoff.css" />
		<!--<![endif]-->	

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/libs/modernizr.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
