<?php

// Theme setup
function vithouse_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'vithouse'),
        'mobile-menu' => __('Mobile Menu', 'vithouse'),
    ));
}

add_action('after_setup_theme', 'vithouse_theme_setup');



// Enqueue Tailwind-built CSS and Squircle init on the frontend
function vithouse_enqueue_assets() {
  $theme_version = wp_get_theme()->get('Version');

  // Final CSS built by Tailwind CLI
  wp_enqueue_script(
  'css-paint-polyfill',
  'https://cdn.jsdelivr.net/npm/@squircle/paint-polyfill@1.0.6/dist/index.js',
  [],
  null,
  true
);

  wp_enqueue_style(
    'vithouse-style',
    get_template_directory_uri() . '/dist/style.css',
    [],
    $theme_version
  );

  // Your main app script (if any)
  wp_enqueue_script(
    'vithouse-app',
    get_template_directory_uri() . '/js/app.js',
    [],
    $theme_version,
    true
  );

  // Squircle init (ESM)


wp_enqueue_script(
  'vithouse-squircle-init',
  get_template_directory_uri() . '/dist/squircle-init.js',
  ['css-paint-polyfill'],
  wp_get_theme()->get('Version'),
  true
);

}
add_action('wp_enqueue_scripts', 'vithouse_enqueue_assets');




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
