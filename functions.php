<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }

load_theme_textdomain('carrington-jam');

define('CFCT_DEBUG', false);
define('CFCT_PATH', trailingslashit(TEMPLATEPATH));

include_once(CFCT_PATH.'carrington-core/carrington.php');
include_once(CFCT_PATH.'functions/sidebars.php');

// Custom post types
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'sopr_company',
		array(
			'labels' => array(
				'name' => __( 'Companies' ),
				'singular_name' => __( 'Company' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'excerpt', 'custom-fields'),
		'rewrite' => array('slug' => 'companies')
		)
	);

	register_post_type( 'sopr_person',
		array(
			'labels' => array(
				'name' => __( 'People' ),
				'singular_name' => __( 'Person' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','editor', 'excerpt', 'custom-fields'),
		'rewrite' => array('slug' => 'people')
		)
	);
}


?>