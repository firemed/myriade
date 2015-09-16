<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/css/mon-style.css" type="text/css" rel="stylesheet">
<!--        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Helvetica">-->
        <title>Pissenlibleu | <?php _e("Chambre d'hôtes et gîte"); ?></title>
        <link rel="icon" type="image/png" href="img/favicon.jpg" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <script SRC="/wp-includes/js/jquery/jquery.js"></script>
        <!--Slider -->
        <link href="/wp-content/plugins/ml-slider/assets/sliders/nivoslider/nivo-slider.css" type="text/css" rel="stylesheet">
        <link href="/wp-content/plugins/ml-slider/assets/sliders/nivoslider/themes/bar/bar.css" type="text/css" rel="stylesheet">
        <script SRC="/wp-content/plugins/ml-slider/assets/sliders/nivoslider/jquery.nivo.slider.pack.js"></script>


		<?php# wp_head(); ?>

	</head>

    <body>
        <div class="main">
            <header>
                <div id="photo_header">
                    <img id="banner" src="<?php echo get_template_directory_uri(); ?>/img/photo_slider.jpg" alt="photo_header">
                    <a href=""><img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="logo_header"></a>
                </div>
                <?php

                $defaults = array(

                    'menu_id'         => '2'

                );

                wp_nav_menu( $defaults );

                ?>
            </header>
