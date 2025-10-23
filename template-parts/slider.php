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
    'alt_text' => '',
    'show_breadcrumbs' => true
];

$args = wp_parse_args($args ?? [], $defaults);

// Clean up values
$bg_url = trim($args['background_image']);
$img_alt = $args['alt_text'] ?: $args['title'];
?>

<section class="mx-auto px-10 mt-20 sm:mt-2.5 sm:h-[754px] h-[500px] overflow-x-clip max-w-svw">
    <div
        class="relative max-w-7xl mx-auto h-[754px]">

        <!-- hero component -->
        <div
            id="hero-slider" class=" items-center w-full z-2 h-[754px] ">
            <!-- slider container -->
            <div
                class="absolute overflow-clip z-1 w-full h-[754px]">
                <!-- slide 1 -->
                <div class="hero-slide active" data-slide="0">
                    <div class="relative w-full">
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/hero-uzaleznienia.webp" alt="Profesjonalne leczenie uzależnień" class="w-auto h-full object-cover" width="1200" height="704" loading="eager" fetchpriority="high"></div>
                    </div>
                    <!-- slide 3 -->
                    <div class="hero-slide" data-slide="2">
                        <div class="relative w-full">
                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/hero-kroplowki.webp" alt="Wsparcie w procesie zdrowienia" class="w-full h-full object-cover" width="1200" height="704" loading="lazy"></div>
                        </div>
                        <!-- slide 4 -->
                        <div class="hero-slide" data-slide="3">
                            <div class="relative w-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/hero-ozonoterapia.webp" alt="Nowoczesne metody terapii" class="w-full h-full object-cover" width="1200" height="704" loading="lazy"></div>
                            </div>
                        </div>
                        <!-- slider content -->
                        <div
                            class=" absolute lg:ml-10 px-4 md:px-0 z-12 h-[704px] w-[90%]  flex items-center ">

                            <!-- slide content 1 -->
                            <div class="absolute heroslider-content flex-col active " data-content="0">
                                <h1 class="text-4xl font-bold leading-tight sm:text-5xl " style=" color: var(--text);">
                                    Twój pierwszy krok w stronę wolności
                                </h1>

                                <!-- hero buttons -->
                                <div class="flex flex-col gap-4 sm:flex-row self-end">

                                    <div class="cloth-button-border self-end mt-10 py-[2px] px-[2.2px] inset-0 bg-linear-to-r from-(--primary-2) to-(--secondary-2) hover:scale-110 transition-transform duration-250 ease-in-out cursor-pointer">
                                        <a href="<?php echo esc_url( home_url( '/detoksykacje/' ) ); ?>">
                                            <button class="flex relative cursor-pointer z-50 text-md font-semibold items-center px-8 py-4 cloth-button text-black gap-4" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">Umów wizytę online
                                                <img src="https://cdn.prod.website-files.com/6746ac53f9f318ac27a1ba85/6746ba6862820f548c5c37f0_Primary%20Button%20Arrow.svg" alt="Arrow" class="w-5 h-5"/></button>
                                        </a>

                                    </div>


                                </a>


                            </div>
                        </div>


                        <!-- slide content 3 -->
                        <div class="absolute heroslider-content flex-col" data-content="2">
                            <h1 class="text-4xl font-bold leading-tight sm:text-5xl " style=" color: var(--text);">
                                Kroplówki witaminowe
                            </h1>
                            <div class="flex flex-col gap-4 sm:flex-row self-end">

                                <div class="cloth-button-border self-end mt-10 py-[2px] px-[2.2px] inset-0 bg-linear-to-r from-(--primary-2) to-(--secondary-2) hover:scale-110 transition-transform duration-250 ease-in-out cursor-pointer">
                                    <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe' ) ); ?>">
                                        <button class="flex relative cursor-pointer z-50 text-md font-semibold items-center px-8 py-4 cloth-button text-black gap-4" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">Umów wizytę online
                                            <img src="https://cdn.prod.website-files.com/6746ac53f9f318ac27a1ba85/6746ba6862820f548c5c37f0_Primary%20Button%20Arrow.svg" alt="Arrow" class="w-5 h-5"/></button>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <!-- slide content 4 -->
                        <div class="absolute heroslider-content flex-col " data-content="3">
                            <h1 class="text-4xl font-bold leading-tight sm:text-5xl " style=" color: var(--text);">
                                Ozonoterapia
                            </h1>
                            <div class="flex flex-col gap-4 sm:flex-row self-end">

                                <div class="cloth-button-border self-end mt-10 py-[2px] px-[2.2px] inset-0 bg-linear-to-r from-(--primary-2) to-(--secondary-2) hover:scale-110 transition-transform duration-250 ease-in-out cursor-pointer ">
                                    <a href="<?php echo esc_url( home_url( '/ozonoterapia' ) ); ?>">
                                        <button class="flex relative cursor-pointer z-50 text-md font-semibold items-center px-8 py-4 cloth-button text-black gap-4" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">Umów wizytę online
                                            <img src="https://cdn.prod.website-files.com/6746ac53f9f318ac27a1ba85/6746ba6862820f548c5c37f0_Primary%20Button%20Arrow.svg" alt="Arrow" class="w-5 h-5"/></button>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </section>
