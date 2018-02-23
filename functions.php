<?php

require_once 'wp-bootstrap-navwalker.php';
require_once('widgets/class-wp-widget-archives.php');
require_once('widgets/class-wp-widget-categories.php');
function business_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('post');
    register_nav_menus(array(
        'primary'   => 'Primary Menu'
    ));
}

add_action('after_setup_theme','business_theme_setup');

include get_template_directory().'/inc/customizer.php';

function init_widgets($id){
    register_sidebar(array(
        'name'      =>'Content Region 1',
        'id'        =>'content-region-1',
        'before_title' => '<h1>',
        'after_title'   =>'</h1>',
        'before_widget' =>'<section class=" content-region-1 pt50 pb40"><div class="container"><div class="col-md-12">',
        'after_widget'  =>'</div></div></section>'
    ));
    
    register_sidebar(array(
        'name'      =>'Content Region 2',
        'id'        =>'content-region-2',
        'before_title' => '<h1>',
        'after_title'   =>'</h1>',
        'before_widget' =>'<section class="content-region-2 pt40 pb40"><div class="container ">',
        'after_widget'  =>'</div></section>'
    ));
    register_sidebar(array(
        'name'      =>'Footer 1',
        'id'        =>'footer-1',
        'before_title' => '<h4>',
        'after_title'   =>'</h4>',
        'before_widget' =>'',
        'after_widget'  =>''
    ));
    register_sidebar(array(
        'name'      =>'Footer 2',
        'id'        =>'footer-2',
        'before_title' => '<h4>',
        'after_title'   =>'</h4>',
        'before_widget' =>'',
        'after_widget'  =>''
    ));
    register_sidebar(array(
        'name'      =>'Footer 3',
        'id'        =>'footer-3',
        'before_title' => '<h4>',
        'after_title'   =>'</h4>',
        'before_widget' =>'',
        'after_widget'  =>''
    ));
    register_sidebar(array(
        'name'      =>'Sidebar',
        'id'        =>'sidebar',
        'before_title' => '<h3>',
        'after_title'   =>'</h3>',
        'before_widget' =>'<div class="side-widget">',
        'after_widget'  =>'</div>'
    ));
        
}

add_action('widgets_init','init_widgets');

//Adds 'list-group-item' to categories li
function add_new_class_list_categories($list){
    $list = str_replace('cat-item', 'cat-item list-group-item', $list);
    return $list;
}

add_filter('wp_list_categories','add_new_class_list_categories');

function business_register_widgets(){
    register_widget('WP_Widget_Categories_Custom');
    register_widget('WP_Widget_Archives_Custom');
}

add_action('widgets_init','business_register_widgets');

//implementing Angular Js 

class wp_ng_theme {
	
	function enqueue_scripts() {
		
		//wp_enqueue_style( 'bootstrapCSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '1.0', 'all' );
		wp_enqueue_script( 'angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js', array( 'jquery' ), '1.0', false );
		wp_enqueue_script( 'angular-resource', '//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-resource.js', array('angular-core'), '1.0', false );
		wp_enqueue_script( 'ui-router', 'https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js', array( 'angular-core' ), '1.0', false );
		wp_enqueue_script( 'ngScripts', get_template_directory_uri() . '/assets/js/angular-theme.js', array( 'ui-router' ), '1.0', false );
		wp_localize_script( 'ngScripts', 'appInfo',
			array(
				
				//'api_url'			 => rest_get_url_prefix() . '/wp/v2/',
                                'api_url'			 => 'http://localhost/wpdev/theme6/wp/wp-json/wp/v2/',
				'template_directory' => get_template_directory_uri() . '/',
				'nonce'				 => wp_create_nonce( 'wp_rest' ),
				'is_admin'			 => current_user_can('administrator')
				
			)
		);
		
	}

	function register_new_field() {

		register_api_field( 'post',
			'my_awesome_field',
			array(
				'get_callback' => array( $this, 'awesome_field' ) 
			)
		);

	}

	function awesome_field( $object, $field_name, $request ) {

		return 'My Awesome String';

	}

	function my_awesome_route() {

		register_rest_route( 'wp/v2', '/roy', array(
			'methods' => 'GET',
			'callback' => array( $this, 'my_awesome_route_callback' )
			)
		);


	}

	function my_awesome_route_callback( $data ) {

		$new_data = array( 'name' => 'Roy Sivan', 'age' => 29, 'location' => 'Los Angeles' );
		$response = new WP_REST_Response( $new_data );

		return $response;

	}
	


}

$ngTheme = new wp_ng_theme();
add_action( 'wp_enqueue_scripts', array( $ngTheme, 'enqueue_scripts' ) );
//add_action( 'rest_api_init', array( $ngTheme, 'register_new_field' ) );
add_action( 'rest_api_init', array( $ngTheme, 'my_awesome_route' ) );