<?php
/**
 * Plugin Name:     Wordpress Plugin Vue Demo
 * Plugin URI:      https://matrizlab.com/vue-plugin-starter
 * Description:     Wordpress plugin demo with Vue
 * Author:          matrizlab
 * Author URI:      https://matrizlab.com/
 * Text Domain:     wordpress-plugin-vue-demo
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wordpress_Plugin_Vue_Demo
 */

function front_enqueue_style() {
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
}

function front_enqueue_script() {
	wp_enqueue_script('vue2','https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js');
}

add_action( 'wp_enqueue_scripts', 'front_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'front_enqueue_script' );

add_shortcode("wordpress-plugin-vue-demo", "displayUsers");

function displayUsers(){
	echo (
		"<div id='app'>
			<users-component-service></users-component-service>
		</div>"
	);

	wp_enqueue_script('vueapp', plugin_dir_url(__FILE__).'js/app.js');
}
