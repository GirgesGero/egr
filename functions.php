<?php
/**
 * Theme setup, script registration, clean console, and virtual page routing for EGR District 1.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function district1_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'district1' ),
        'footer'  => __( 'Footer Menu', 'district1' ),
    ) );
}
add_action( 'after_setup_theme', 'district1_theme_setup' );

function district1_remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'district1_remove_jquery_migrate' );

function district1_enqueue_scripts() {
    $theme_uri = get_template_directory_uri();
    $version   = time();

    // Google Fonts
    wp_enqueue_style( 'district1-google-fonts', 'https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;600;700;800;900&family=Outfit:wght@300;400;600;700;800&family=Tajawal:wght@300;400;500;700;900&display=swap', array(), null );

    // FontAwesome 6 Icons
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

    // Main Theme Stylesheet
    wp_enqueue_style( 'district1-main-style', $theme_uri . '/assets/css/theme-style.css', array(), $version );
    wp_enqueue_style( 'district1-style', get_stylesheet_uri(), array( 'district1-main-style' ), $version );

    // External Libraries: GSAP, ScrollTrigger, Three.js, OrbitControls, GLTFLoader, Lenis
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array( 'gsap' ), '3.12.5', true );
    wp_enqueue_script( 'threejs', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', array(), 'r128', true );
    wp_enqueue_script( 'three-orbitcontrols', 'https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js', array( 'threejs' ), 'r128', true );
    wp_enqueue_script( 'three-gltfloader', 'https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js', array( 'threejs' ), 'r128', true );
    wp_enqueue_script( 'lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js', array(), '1.0.29', true );

    // Theme Custom Scripts
    wp_enqueue_script( 'district1-three-bg', $theme_uri . '/assets/js/three-background.js', array( 'threejs' ), $version, true );
    wp_enqueue_script( 'district1-hero-scrubber', $theme_uri . '/assets/js/hero-scrubber.js', array( 'threejs', 'gsap', 'gsap-scrolltrigger' ), $version, true );
    wp_enqueue_script( 'district1-floors-video', $theme_uri . '/assets/js/floors-video-explorer.js', array( 'gsap', 'gsap-scrolltrigger' ), $version, true );
    wp_enqueue_script( 'district1-main', $theme_uri . '/assets/js/main.js', array( 'gsap', 'gsap-scrolltrigger', 'lenis' ), $version, true );

    wp_localize_script( 'district1-hero-scrubber', 'district1_theme', array(
        'theme_uri'  => $theme_uri,
        'assets_uri' => $theme_uri . '/assets',
    ) );
}
add_action( 'wp_enqueue_scripts', 'district1_enqueue_scripts' );

function district1_virtual_page_router() {
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    $path = trim( parse_url( $request_uri, PHP_URL_PATH ), '/' );

    $routes = array(
        'district1' => 'page-district1.php',
        'about'     => 'page-about.php',
        'contact'   => 'page-contact.php',
    );

    foreach ( $routes as $slug => $template_file ) {
        if ( $path === $slug || preg_match( '#(^|/)' . preg_quote( $slug, '#' ) . '(/|$)#', $path ) ) {
            global $wp_query;
            $wp_query->is_404 = false;
            status_header( 200 );
            $template_path = get_template_directory() . '/' . $template_file;
            if ( file_exists( $template_path ) ) {
                include $template_path;
                exit;
            }
        }
    }
}
add_action( 'template_redirect', 'district1_virtual_page_router', 1 );
