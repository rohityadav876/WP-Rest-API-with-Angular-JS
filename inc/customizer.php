<?php
//add section to wp-customizer 

function business_customize_register($wp_customize){
    $wp_customize->add_section('Banner',array(
        'title' =>__('Banner','business'),
        'description'   => sprintf(__('Options for Homepage Banner'), 'business'),
        'priority'      => 130
    ));
    //heading setting 
    $wp_customize->add_setting('banner_heading',array(
        'default'   =>_x('Banner Heading', 'banner'),
        'type'      =>'theme_mod'
    ));
    $wp_customize->add_control('banner_heading', array(
        'label'     =>__('Heading', 'business'),
        'section'   =>'Banner',
        'priority'  =>20
    ));
    
    //text setting 
    $wp_customize->add_setting('banner_text',array(
        'default'   =>_x('Condimentum velit hic ut sem tenetur quis animi suscipit bibendum lorem voluptate.', 'banner'),
        'type'      =>'theme_mod'
    ));
    $wp_customize->add_control('banner_text', array(
        'label'     =>__('Text', 'business'),
        'section'   =>'Banner',
        'priority'  =>20
    ));
    
    //Button text setting 
    $wp_customize->add_setting('banner_btn_text',array(
        'default'   =>_x('Sign Up', 'banner'),
        'type'      =>'theme_mod'
    ));
    $wp_customize->add_control('banner_btn_text', array(
        'label'     =>__('Button Text', 'business'),
        'section'   =>'Banner',
        'priority'  =>20
    ));
    //Button URL setting 
    $wp_customize->add_setting('banner_button_url',array(
        'default'   =>_x('http://rohityadav9.com', 'banner'),
        'type'      =>'theme_mod'
    ));
    $wp_customize->add_control('banner_button_url', array(
        'label'     =>__('Button URL', 'business'),
        'section'   =>'Banner',
        'priority'  =>20
    ));
    
    // Background Image Setting
    $wp_customize->add_setting('banner_image', array(
        'default'		=> get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'			=> 'theme_mod'
    ));

    // Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', ['label'	=> __('Background Image', 'business'),
                    'section'	=> 'Banner',
                    'settings'	=> 'banner_image'
    ]));
    // Boxes Section
   $wp_customize->add_section('boxes', array(
		'title'          => __('Boxes', 'business'),
		'description'    => sprintf( __('Options for homepage boxes', 'business')),
		'priority'       => 130,
 	));

    // BOX 1

    // Box 1 Heading Setting
    $wp_customize->add_setting( 'box1_heading', array(
		'default'   => _x('Box 1 Heading', 'business'),
		'type'      => 'theme_mod'
	));

	// Box 1 Heading Control
	$wp_customize->add_control( 'box1_heading', array(
		'label'    => __('Box 1 Heading', 'business'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 1 Text Setting
    $wp_customize->add_setting( 'box1_text', array(
        'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business'),
        'type'                 => 'theme_mod'
 	));

    // Box 1 Text Control
    $wp_customize->add_control( 'box1_text', array(
        'label'    => __('Box 1 Text', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
 	));

    // Box 1 Icon Setting
    $wp_customize->add_setting( 'box1_icon', array(
        'default'              => _x('bar-chart', 'business'),
        'type'                 => 'theme_mod'
 	));

    // Box 1 Icon Control
    $wp_customize->add_control( 'box1_icon', array(
        'label'    => __('Box 1 Icon', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
 	));

    // BOX 2

    // Box 2 Heading Setting
    $wp_customize->add_setting( 'box2_heading', array(
        'default'              => _x('Box 2 Heading', 'business'),
        'type'                 => 'theme_mod'
 	));

    // Box 2 Heading Control
    $wp_customize->add_control( 'box2_heading', array(
        'label'    => __('Box 2 Heading', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
 	));

    // Box 2 Text Setting
    $wp_customize->add_setting( 'box2_text', array(
        'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business'),
        'type'                 => 'theme_mod'
 	));

    // Box 2 Text Control
    $wp_customize->add_control( 'box2_text', array(
        'label'    => __('Box 2 Text', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
 	));

    // Box 2 Icon Setting
    $wp_customize->add_setting( 'box2_icon', array(
        'default'              => _x('code', 'business'),
        'type'                 => 'theme_mod'
	));

    // Box 2 Icon Control
    $wp_customize->add_control( 'box2_icon', array(
        'label'    => __('Box 2 Icon', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
	));

    // BOX 3

    // Box 3 Heading Setting
    $wp_customize->add_setting( 'box3_heading', array(
        'default'              => _x('Box 3 Heading', 'business'),
        'type'                 => 'theme_mod'
        ));

    // Box 3 Heading Control
    $wp_customize->add_control( 'box3_heading', array(
        'label'    => __('Box 3 Heading', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
	));

    // Box 3 Text Setting
    $wp_customize->add_setting( 'box3_text', array(
        'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business'),
        'type'                 => 'theme_mod'
	));

    // Box 3 Text Control
    $wp_customize->add_control( 'box3_text', array(
        'label'    => __('Box 3 Text', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
	));

    // Box 3 Icon Setting
    $wp_customize->add_setting( 'box3_icon', array(
        'default'              => _x('desktop', 'business'),
        'type'                 => 'theme_mod'
	));

    // Box 3 Icon Control
    $wp_customize->add_control( 'box3_icon', array(
        'label'    => __('Box 3 Icon', 'business'),
        'section'  => 'boxes',
        'priority' => 20,
	));
}

add_action('customize_register','business_customize_register');