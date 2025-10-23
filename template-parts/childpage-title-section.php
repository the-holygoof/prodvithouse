<?php
/**
 * Level 2 Title Section - Child pages with parent label, image, text, price
 */

if (!defined('ABSPATH')) exit;

$defaults = [
    'title' => get_the_title(),
    'background_image' => '', // URL only
    'alt_text' => '',
    'text' => '',
    'cena' => '',
    'show_breadcrumbs' => true,
    'button_url' => 'https://vit-house.pl/zaliczki/',
    'button_text' => 'Zarezerwuj'
];

$args = wp_parse_args($args ?? [], $defaults);

// Auto-detect parent title
$parent_title = '';
$parent_id = wp_get_post_parent_id(get_the_ID());
if ($parent_id) {
    $parent_title = get_the_title($parent_id);
}

$bg_url = trim($args['background_image']);
$img_alt = $args['alt_text'] ?: $args['title'];
?>

<section class="mb-20 select-none">
    <div class="wrapper content">
        <div class="grid items-center justify-center gap-12 md:grid-cols-2">

            <?php if ($args['show_breadcrumbs'] && function_exists('generate_smart_breadcrumbs')): ?>
            <div class="breadcrumbs text-xs  text-white/60 mb-4 col-span-1 md:col-span-2">
                <?php echo generate_smart_breadcrumbs(); ?>
            </div>
            <?php endif; ?>

            <?php if ($bg_url): ?>
            <div class="col-span-1">
                <img src="<?php echo esc_url($bg_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" class="card object-cover cloth-corner" width="1040" height="1040" loading="eager" fetchpriority="high">
            </div>
            <?php endif; ?>

            <div class="flex flex-col gap-5 ">
                <?php if ($parent_title): ?>
                <div class="inline-flex uppercase items-center  text-sm font-medium" style="color: #AAD9FF;">
                    <?php echo esc_html($parent_title); ?>
                </div>
                <?php endif; ?>

                <h1 class="text-4xl font-bold leading-tighter lg:text-5xl xl:text-6xl pb-8" style="color: var(--text);">
                    <?php echo esc_html($args['title']); ?>
                </h1>

                <?php if ($args['text']): ?>
                <div class="flex flex-col gap-5" style="color: var(--text);">
                    <?php echo wpautop(wp_kses_post($args['text'])); ?>
                </div>
                <?php endif; ?>

                <?php if ($args['cena']): ?>
                <h3 class="text-3xl font-bold md:text-4xl" style="color: #AAD9FF;">
                    <?php echo esc_html($args['cena']); ?>
                </h3>

                <a href="<?php echo esc_url($args['button_url']); ?>" class="flex self-start items-center gap-3 px-8 py-4 text-lg font-semibold text-black transition-all duration-300 transform hover:-translate-y-1 cloth-button" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                    <?php echo esc_html($args['button_text']); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>