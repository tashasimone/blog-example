<?php

register_sidebar( array(
	'id'          => 'recent-posts',
	'name'        => 'recent posts',
	'description' => __( 'recent posts widget', 'text_domain' ),
) );

register_sidebar( array(
	'id'          => 'bio',
	'name'        => 'bio',
	'description' => __( 'bio widget', 'text_domain' ),
) );

register_sidebar( array(
	'id'          => 'social-media',
	'name'        => 'social-media',
	'description' => __( 'social media widget', 'text_domain' ),
) );

add_theme_support( 'post-thumbnails' );
