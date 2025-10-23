<?php
/**
 * Template Part: Below title
 * Description: Below title
 */

if (!defined('ABSPATH')) exit;

// Smart defaults
$defaults = [
    'txt-start' => '',
    'txt-color' => '',
    'txt-end' => '',
    'color' => '',
    'subheading' => '',
];

$args = wp_parse_args($args ?? [], $defaults);


?>




<!-- below title section -->
<section class="mx-auto <?php if ($args['subheading']): ?>mb-24<?php endif; ?>">
    <div class="mx-auto max-w-7xl px-4 sm:px-0">
        <div id="below-hero" class="relative grid grid-cols-3 md:grid-cols-7  md:gap-24  md:pr-8 lg:pl-10 ">


            <!-- heading -->
            <div class="col-span-3 md:col-span-3 flex flex-col justify-between">
                <h2 class="text-[1.7rem] md:text-[2.7rem] font-bold mb-7" style="line-height: 1.2;  color: var(--text);">
  
                
                
                        <?php if ($args['txt-start']): ?>
                        <?php echo esc_html($args['txt-start']); ?> 
                        <?php endif; ?>    

                        <?php if ($args['txt-color']): ?>
                            <?php if ($args['color']): ?>
                                    <span style="color: <?php echo esc_html($args['color']); ?>;">
                                                                    <?php echo esc_html($args['txt-color']); ?>
                                                                </span> 
                            <?php endif; ?>    
                        <?php endif; ?>    
                        
                        <?php if ($args['txt-end']): ?>
                        <?php echo esc_html($args['txt-end']); ?> 
                        <?php endif; ?>    
                    
                     
                </h2>
            </div>



            <!--subheading -->
            <div class="col-span-3 md:col-span-4">
                <div id="benefits-wrapper" class="sm:mt-28 ">

                    <?php if ($args['subheading']): ?>
                        <p class="text-base lg:text-lg text-white/60 mt-4 lg:mt-6 leading-loose"><?php echo esc_html($args['subheading']); ?> </p>
                        <?php endif; ?>



                </div>
            </div>
        </div>


    </div>

</section>
<!-- end of below title section -->