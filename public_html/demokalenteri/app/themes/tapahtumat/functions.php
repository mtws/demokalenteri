<?php
if ( function_exists("dustpress") ) {
	dustpress();
}
else {
	die("No DustPress found.");
}


function tapahtumat_scripts_and_styles() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'tapahtumat_scripts_and_styles' );
