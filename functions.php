<?php

get_template_part('/inc/company-options');
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
    add_theme_support('post-thumbnails', array('post', 'sliders', 'team', 'Testimonials', 'Gallery', 'Profile'));
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
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes')
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


    // Custom Gallery  with  Field 
    register_post_type('Gallery', array(
        'labels' => array(
            'name' => __('Gallery',
                'Company'
            ),
            'singular_name' => __(
                'Gallery',
                'Company'
            )
        ),
        'public' => true,
        'supports' => array('title', 'custom-fields', 'page-attributes'
        )
    ));

    // Custom Profile  with  Field 
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __(
                'Portfolios',
                'Company'
            ),
            'singular_name' => __(
                'Portfolios',
                'Company'
            )
        ),
        'public' => true,
        'supports' => array(
            'title', 'editor','thumbnail','custom-fields', 'page-attributes'
        )
    ));
    // Profile taxonomy

    register_taxonomy('portfolio-cat',
        'portfolio',
        array(
            'labels' => array(
                'name' => __('Categories', 'Company'),
                'singular_name' => __('Category', 'Company')
            ),
            'hierarchical' => true,
            'show_admin_column' => true
        )
    );

    

}
add_action('init', 'Company_custom_posts');


//comments_field  
function Company_comments_field($filed)
{
   
    $comment = $filed['comment'];
    $name =  $filed['name'];
    $email =  $filed['email'];
    $website =  $filed['website'];
    $cokkies = $filed['cokkies'];

    unset($filed['comment']);
    unset($filed['name']);
    unset($filed['email']);
    unset($filed['website']);
    unset($filed['cokkies']);

    $filed['name'] = $name;
    $filed['email'] = $email;
    $filed['website'] = $website;
    $filed['comment'] = $comment;
    $filed['cokkies'] = $cokkies;
    return $filed;
}
add_filter('comments_form_filed', 'Company_comments_field');

//create widget  for lastes  post
function  Company_Widgets()
{
    //Sidebar
    register_sidebar(array(
        'name' => __('Main Sidebar','Company'),
        'id' => 'main_sidebar',
        'description' => __('Main Sidebar for Blog Page', 'Company'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));


    //Sidebar Footer 
    register_sidebar(array(
        'name' => __('Footer Sidebar 1', 'Company'),
        'id' => 'footer_sidebar1',
        'description' => __('Footer Widget 1 for showing Widget', 'Company'),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));


    //Sidebar Footer2 
    register_sidebar(array(
        'name' => __('Footer Sidebar 2', 'Company'),
        'id' => 'footer_sidebar2',
        'description' => __('Footer Widget 2 for showing Widget', 'Company'),
        'before_widget' => '<div class="single-footer ">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));


    //Sidebar Footer3 
    register_sidebar(array(
        'name' => __('Footer Sidebar 3', 'Company'),
        'id' => 'footer_sidebar3',
        'description' => __('Footer Widget 3 for showing Widget', 'Company'),
        'before_widget' => '<div class="single-footer ">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));



    //Sidebar Footer4 
    register_sidebar(array(
        'name' => __('Footer Sidebar 4', 'Company'),
        'id' => 'footer_sidebar4',
        'description' => __('Footer Widget 4 for showing Widget', 'Company'),
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));


}

add_action('widgets_init', 'Company_Widgets');




