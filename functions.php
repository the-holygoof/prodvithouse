<?php
function vithouse_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'vithouse'),
        'mobile-menu' => __('Mobile Menu', 'vithouse'),
    ));
}
add_action('after_setup_theme', 'vithouse_theme_setup');
function vithouse_enqueue_assets() {
  $theme_version = wp_get_theme()->get('Version');

  // Final CSS built by Tailwind CLI
//   wp_enqueue_script(
//   'css-paint-polyfill',
//   'https://cdn.jsdelivr.net/npm/@squircle/paint-polyfill@1.0.6/dist/index.js',
//   [],
//   null,
//   true
// );

//   wp_enqueue_style(
//     'vithouse-style',
//     get_template_directory_uri() . '/dist/style.css',
//     [],
//     $theme_version
//   );

  // Your main app script (if any)
//   wp_enqueue_script(
//     'vithouse-app',
//     get_template_directory_uri() . '/js/app.js',
//     [],
//     $theme_version,
//     true
//   );

  // Squircle init (ESM)


// wp_enqueue_script(
//   'vithouse-squircle-init',
//   get_template_directory_uri() . '/dist/squircle-init.js',
//   ['css-paint-polyfill'],
//   wp_get_theme()->get('Version'),
//   true
// );

}
add_action('wp_enqueue_scripts', 'vithouse_enqueue_assets');


// //Remove Gutenberg Block Library CSS from loading on the frontend
// function smartwp_remove_wp_block_library_css(){
//     wp_dequeue_style( 'wp-block-library' );
//     wp_dequeue_style( 'wp-block-library-theme' );
//     wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
//     wp_dequeue_style( 'classic-theme-styles' );
//     wp_dequeue_style( 'global-styles-inline' );



// }
 
// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// function remove_global_css() {
//     // Paste the code here
// 	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
// 	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
// }
// add_action('init', 'remove_global_css');


function generate_smart_breadcrumbs() {
    // Skip breadcrumbs on homepage
    if (is_front_page()) return '';
    
    $breadcrumbs = [];
    
    // Home link with icon
    $breadcrumbs[] = '<li><a href="' . esc_url(home_url('/')) . '"><i class="fa-sm fa fa-home" aria-hidden="true"></i></a></li>';
    
    if (is_page()) {
        // Handle page hierarchy (parent pages)
        $ancestors = get_post_ancestors(get_the_ID());
        if ($ancestors) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                $breadcrumbs[] = '<li><a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a></li>';
            }
        }
        // Current page (no link)
        $breadcrumbs[] = '<li><span aria-current="page">' . esc_html(get_the_title()) . '</span></li>';
        
    } elseif (is_single()) {
        // For blog posts, show category
        if ('post' === get_post_type()) {
            $categories = get_the_category();
            if (!empty($categories)) {
                $breadcrumbs[] = '<li><a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a></li>';
            }
        }
        // Current post
        $breadcrumbs[] = '<li><span aria-current="page">' . esc_html(get_the_title()) . '</span></li>';
        
    } elseif (is_archive()) {
        // Handle different archive types
        if (is_category()) {
            $breadcrumbs[] = '<li><span aria-current="page">' . esc_html(single_cat_title('', false)) . '</span></li>';
        } elseif (is_tag()) {
            $breadcrumbs[] = '<li><span aria-current="page">' . esc_html(single_tag_title('', false)) . '</span></li>';
        } else {
            $breadcrumbs[] = '<li><span aria-current="page">' . esc_html(post_type_archive_title('', false)) . '</span></li>';
        }
    }
    
    return '<ul>' . implode('', $breadcrumbs) . '</ul>';
}
/* Disable XML RPC */
add_filter( 'xmlrpc_enabled', '__return_false' );

/* Disable all feeds and display a custom message instead of the RSS Feeds. */
function wpcode_snippet_disable_feed() {
    wp_die(
        sprintf(
            // Translators: Placeholders for the homepage link.
            esc_html__( 'No feed available, please visit our %1$shomepage%2$s!' ),
            ' <a href="' . esc_url( home_url( '/' ) ) . '">',
            '</a>'
        )
    );
}
// Replace all feeds with the message above.
add_action( 'do_feed_rdf', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss2', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_atom', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'wpcode_snippet_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'wpcode_snippet_disable_feed', 1 );
// Remove links to feed from the header.
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

/* Disable emojis */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * u/param array $plugins 
 * u/return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * u/param array $urls URLs to print for resource hints.
 * u/param string $relation_type The relation type the URLs are printed for.
 * u/return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }
return $urls;
}

// Remove oembeds
function disable_embeds_code_init() {
 // Remove the REST API endpoint.
 remove_action( 'rest_api_init', 'wp_oembed_register_route' );
 // Turn off oEmbed auto discovery.
 add_filter( 'embed_oembed_discover', '__return_false' );
 // Don't filter oEmbed results.
 remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
 // Remove oEmbed discovery links.
 remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
 // Remove oEmbed-specific JavaScript from the front-end and back-end.
 remove_action( 'wp_head', 'wp_oembed_add_host_js' );
 add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
 // Remove all embeds rewrite rules.
 add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
 // Remove filter of the oEmbed result before any HTTP requests are made.
 remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
add_action( 'init', 'disable_embeds_code_init', 9999 );
function disable_embeds_tiny_mce_plugin($plugins) {
    return array_diff($plugins, array('wpembed'));
}
function disable_embeds_rewrites($rules) {
    foreach($rules as $rule => $rewrite) {
        if(false !== strpos($rewrite, 'embed=true')) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}

//Remove jQuery Migrate
function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );

// Remove Meta Generator: <meta name="generator" content="WordPress x.x"/>
remove_action('wp_head', 'wp_generator');

// Remove the EditURI/RSD
remove_action ('wp_head', 'rsd_link');

// Remove page/post's short links
remove_action( 'wp_head', 'wp_shortlink_wp_head');

// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);