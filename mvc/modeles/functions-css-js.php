<?php
// AJOUTER CSS ET JS SUR LE SITE
if(!function_exists('SC_css_js_import')){
	function SC_css_js_import(){
		wp_enqueue_style('css-swiper','https://unpkg.com/swiper/swiper-bundle.min.css');
		wp_enqueue_style('css-font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
		wp_enqueue_style('css-mamadou',get_template_directory_uri().'/css/mamadou.css?'.rand(0,10000));


		//wp_enqueue_script('jquery');
		//wp_enqueue_script('sc_js',get_template_directory_uri().'/js/script.js',array('jquery'));

		wp_enqueue_script('js-mamadou',get_template_directory_uri().'/js/mamadou.js',[], false,true);

	}
	add_action('wp_enqueue_scripts','SC_css_js_import');
}
