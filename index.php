<?php
/**
 * Plugin Name: WP TypeScript Starter 
 *
 * PHP Entry point for TypeScript starter template
 * Enqueues the given script at the front-end of WordPress
 */
add_action('wp_enqueue_scripts', function(): void {
  
  // When using a WordPress theme (place this file in functions.php of your theme)
//   $script_args = include( get_template_directory() . '/public/scripts.asset.php');
//   wp_enqueue_script('wp-typescript', get_template_directory_uri() . '/public/scripts.js', $script_args['dependencies'], $script_args['version'] ); 
  
  // When used in a WordPress plugin
  $script_args = include( plugin_dir_path( __FILE__ ) . 'public/scripts.asset.php');
  wp_enqueue_script('wp-typescript', plugins_url('build/editor.js', __FILE__), $script_args['dependencies'], $script_args['version']);
});
