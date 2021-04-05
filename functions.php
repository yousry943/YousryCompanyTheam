<?php
//add  style and js files
function Company_enqueue_scripts()
{


    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('core', get_template_directory_uri() . '/assets/css/style.css', false);
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0');
    wp_enqueue_style('Main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_style('Responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0');
    wp_enqueue_style('Magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0');

    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');

    //Theam stylesheet

    //add js files 

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('isotope.min', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), '1.0.0', true);
    wp_enqueue_script('imageloaded.min', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array(), '1.0.0', true);
    wp_enqueue_script('counterup.min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('waypoint.min', get_template_directory_uri() . '/assets/js/waypoint.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'Company_enqueue_scripts');

//setup  Menu theam 
function Company_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('sliders','team', 'Testimonials'));
    load_theme_textdomain('company', get_template_directory_uri() . '/language');
    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'company')
    ));
}
add_action('after_setup_theme', 'Company_setup_theme');

// Custom Post Slider and Service 
function Company_custom_posts()
{
    // Custom Slider  with  Field 
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Slider', 'Company'),
            'singular_name' => __('Slider', 'Company')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));



    // Custom Service  with  Field 
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Service', 'Company'),
            'singular_name' => __('Service', 'Company')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));


    // Custom Team  with  Field 
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Teams', 'Company'),
            'singular_name' => __('Team', 'Company')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields','page-attributes')
    ));



    // Custom Testimonials  with  Field 
    register_post_type('Testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'Company'),
            'singular_name' => __(
                'Testimonials',
                'Company'
            )
        ),
        'public' => true,
        'supports' => array('thumbnail', 'custom-fields', 'page-attributes')
    ));
}
add_action('init', 'Company_custom_posts');
