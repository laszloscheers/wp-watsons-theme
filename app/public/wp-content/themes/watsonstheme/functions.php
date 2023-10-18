<?php

    // Adds dynamic title tag support
    function watsons_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'watsons_theme_support');

    // Menus
    function watsons_theme_menus() {

        $locations = array(
            'primary' => "Desktop Primary Top Menu",
            'footer' => "Footer Menu Items"
        );

        register_nav_menus($locations);

    }

    add_action('init', 'watsons_theme_menus');

    // Adds CSS files to the head of the document
    function watsons_register_styles() {

        $version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style('watsons_style', get_template_directory_uri() . "/style.css", array('watsons_bootstrap_css'), $version, 'all');
        wp_enqueue_style('watsons_bootstrap_css', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", array(), '5.2.3', 'all');

    }

    add_action('wp_enqueue_scripts', 'watsons_register_styles');

    // Adds JS to the bootom of the page
    function watsons_register_scripts() {
        
        $version = wp_get_theme()->get( 'Version' );

        wp_enqueue_script('watsons_bootstrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array(), '5.2.3', true);

        wp_enqueue_script('watsons_javascript', get_template_directory_uri() . "/assets/js/script.js", array('watsons_bootstrap_js'), $version, true);

        wp_enqueue_script('watsons_javascript_for_carousel', get_template_directory_uri() . "/assets/js/imported.js", array('watsons_bootstrap_js'), $version, true);
    }

    add_action('wp_enqueue_scripts', 'watsons_register_scripts');

    // Adds a widget area tha users can customize
    function watsons_theme_widget_areas(){

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area'
            )
        );
    }

    add_action('widgets_init', 'watsons_theme_widget_areas');

?>