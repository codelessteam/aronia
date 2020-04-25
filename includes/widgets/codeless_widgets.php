<?php

class My_Elementor_Widgets {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
	if ( defined('ELEMENTOR_PATH') && class_exists('Elementor') )
		require_once('codeless_latest_posts.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		require_once('codeless_latest_posts.php');
		$codeless_latest_posts = new \Elementor\codeless_latest_posts(); 

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( $codeless_latest_posts );
	}

}

add_action( 'init', 'my_elementor_init' );
function my_elementor_init() {
	My_Elementor_Widgets::get_instance();
}