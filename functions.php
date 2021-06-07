<?php

function everest_theme_scripts() 
{
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap-5.0.0-dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/vendor/fontawesome-5.13-all.js', array(), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js', array(), null, true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array(), null, true );
}

function everest_theme_setup() 
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
}

function everest_theme_widgets()
{
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here.',
		'before_widget' => '<section id="%1$s" class="widget %2$s card shadow-sm"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h4 class="card-title widget-title">',
		'after_title'   => '</h4>',
	) );
}

function everest_theme_customizer( $wp_customize )
{
    $social_medias = array(
        'facebook' => array(
            'slug' => 'facebook',
            'default' => '#',
            'label' => 'Facebook'
        ),
 
        'instagram' => array(
            'slug' => 'instagram',
            'default' => '#',
            'label' => 'Instagram'
        ),
 
        'pinterest' => array(
            'slug' => 'pinterest',
            'default' => '#',
            'label' => 'Pinterest'
        ),
 
        'youtube' => array(
            'slug' => 'youtube',
            'default' => '#',
            'label' => 'Youtube'
        )
    );

    $wp_customize->add_section( 'everest_social_medias_settings', array(
        'title' => 'Social Medias',
        'priority' => 40,
    ) );

   foreach ( $social_medias as $social_media ) {
       $wp_customize->add_setting(
            'everest_theme_options_' . $social_media['slug'], array(
                'default' => $social_media['default'],
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'esc_url_raw',
                'type' => 'theme_mod',
            )
        );

        $wp_customize->add_control(
			$social_media['slug'],  array(
                'label' => $social_media['label'], 
                'section' => 'everest_social_medias_settings',
                'settings' => 'everest_theme_options_' . $social_media['slug'],
            )
		);
   }
}

/**
 * retrieves header background image and styles
 * 
 * @return string
 */
function get_bg_image()
{
    $bg_image = !empty( get_header_image() ) 
        ? get_header_image()
        : '/themes/everest/assets/img/header.jpg';

    return "background: 
        linear-gradient(
            rgba(0, 17, 43, 0.65), 
            rgba(0, 17, 43, 0.65)
        ), url({$bg_image});
    background-size: cover;
    background-position: center;";
}

add_action( 'wp_enqueue_scripts', 'everest_theme_scripts' );
add_action( 'after_setup_theme', 'everest_theme_setup' );
add_action( 'widgets_init', 'everest_theme_widgets' );
add_action( 'customize_register', 'everest_theme_customizer' );
