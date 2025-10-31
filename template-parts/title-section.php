<?php
/**
 * Title Section Component
 * Displays page title, breadcrumbs, and background image
 */

if (!defined('ABSPATH')) exit;

// Smart defaults
$defaults = [
    'title' => is_singular() ? get_the_title() : wp_get_document_title(),
    'background_image' => '', // URL only
    'background_image' => get_the_post_thumbnail_url(),
    'alt_text' => '',
    'show_breadcrumbs' => true
];

$args = wp_parse_args($args ?? [], $defaults);

// Clean up values
$bg_url = trim($args['background_image']);
$img_alt = $args['alt_text'] ?: $args['title'];
?>

<section class="md:-mt-8 sm:h-[581px] h-[381px] overflow-x-clip select-none">
    <div class="wrapper relative">
        <div id="title-slider" class=" items-center ">
            <?php if ($bg_url): ?>
            <div class="absolute inset-0 overflow-hidden w-full h-[500px] cloth-title z-8">
            <div class="absolute z-10 inset-0 pointer-events-none select-none" style="background: linear-gradient(to right, var(--surface) 0%, transparent 70%);"></div>
                <div class="title-slide" data-slide="0">
                    <div class="relative w-full">
                        <img src="<?php echo esc_url($bg_url); ?>" 
                             alt="<?php echo esc_attr($img_alt); ?>" 
                             class="w-full h-full object-cover" 
                             width="1280" 
                             height="500" 
                             loading="eager" 
                             fetchpriority="high">
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="absolute lg:ml-10 px-4 md:px-0 z-12 h-[551px] w-[90%] md:w-1/2 flex items-center z-9">
                <div class="absolute titleslider-content flex-col" data-content="0">
                    <h1 class="text-4xl font-bold leading-tight lg:text-5xl xl:text-6xl">
                        <?php echo esc_html($args['title']); ?>
                    </h1>
                    
                    <?php if ($args['show_breadcrumbs'] && function_exists('generate_smart_breadcrumbs')): ?>
                    <div class="breadcrumbs text-xs ml-1 text-white/60 mb-8 transition-colors">
                        <?php echo generate_smart_breadcrumbs(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
