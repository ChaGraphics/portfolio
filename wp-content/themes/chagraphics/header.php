<!DOCTYPE html>
<html lang="fr">
    <head> 
        <title>
            <?php bloginfo('name') ?>

            <?php if (is_404()) : ?>

                <?php _e('Not Found') ?>

            <?php elseif (is_home()) : ?> 

                &raquo; <?php bloginfo('description') ?>

            <?php else : ?><?php wp_title() ?>

            <?php endif ?>
        </title>  

        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,900' rel='stylesheet' type='text/css'></link>
        <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'></link>

        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php wp_head(); ?> 

    </head>

    <body id="top" onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='Il est strictement interdit de copier les images sur ce site'; return true;">

        <!-- MENU/HEADER --> 

        <div id="page">

            <div id="header"> 
                <!-- Logo par l'adminasteur Wordpress -->
                <h1>
                    <a href="<?php echo home_url(); ?>">

                        <img src="<?php header_image(); ?>"
                             height="<?php echo get_custom_header()->height; ?>"
                             width="<?php echo get_custom_header()->width; ?>"
                             alt="<?php bloginfo('name'); ?>"
                             />

                    </a>
                </h1>
                <!-- /Logo par l'adminasteur Wordpress -->
                
                <!-- MENU -->

                <nav id="navigation"><?php wp_nav_menu(); ?></nav>

                <!-- /MENU -->

            </div>