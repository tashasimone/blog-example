 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
     <meta charset="<?php bloginfo( 'charset' ); ?>" />
     <title><?php wp_title(); ?></title>
     <link rel="profile" href="http://gmpg.org/xfn/11" />
     <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
     <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
     <?php wp_head(); ?>
 </head>
 <body>
     <header>
         <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name'); ?></a></h1>
         <?php dynamic_sidebar( 'social-media' ); ?>
     </header>