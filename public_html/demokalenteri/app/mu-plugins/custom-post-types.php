<?php
/*
Plugin Name: Tapahtumat
Description: Add custom post type 'tapahtumat'
Version: 0.1
Author: Mats Tuovinen
Author URI: http://mtws.fi/
Text Domain: tapahtumat
*/

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'tapahtumat',
    array(
      'labels' => array(
        'name' => __( 'Tapahtumat' ),
        'singular_name' => __( 'Tapahtuma' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
