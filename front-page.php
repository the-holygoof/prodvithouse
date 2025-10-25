<?php
/**
 * The template for displaying the homepage
 *
 * @package VitHouse
 */


 get_header(); ?>




<?php get_template_part( 'template-parts/slider' ); ?>












<section class="py-2 md:pt-2 ">
    <div class="wrapper">
        <div id="below-hero" class="relative grid grid-cols-3 md:grid-cols-7 md:gap-8">
                    <div class="content col-span-3 md:col-span-3 flex flex-col justify-between content-between space-y-8">
                        <h2>
                            Prywatna klinika
                            <span>leczenia uzależnień,</span>
                            kroplówki witaminowe
                            <span>i&nbsp;badania laboratoryjne w&nbsp;Warszawie
                            </span>

                        </h2>
                       
                            <div class="flex flex-row-reverse md:flex-row items-center-safe justify-start-safe gap-8">
                                
                                <div class="squircle squircle-4xl squircle-smooth-md squircle-amber-100 squircle-border-1 squircle-border-amber-200  w-[140px] relative ">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/orly-medycyny-logo-2-265x300.webp" alt="Kroplówki witaminowe Warszawa" width="265" height="300" class="relative object-cover squircle-mask  squircle-4xl squircle-smooth-lg" style=" image-resolution: 2;">
                                </div>


                                <a href="https://www.orlymedycyny.pl/profile-942794-vit-house-pl-sp-z-o-o" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/app_laureate_110_gold_113.webp" width="110" height="110" style="width:110px; height:110px; border:0;" alt="VIT-HOUSE.PL Sp. z o.o. - Warszawa" title="VIT-HOUSE.PL Sp. z o.o. - Warszawa">
                                </a>
                                    
                            </div>
                    </div>


                    <div class="col-span-3 md:col-span-4 ">
                            
                    <?php get_template_part( 'template-parts/feature-cards' ); ?>


                    
                    <!-- <div id="benefits-wrapper" class="col-span-1 my-auto pt-16 md:pt-20 grid grid-cols-2 md:grid-cols-2 gap-3 md:gap-8 md:px-6">

                                    <div class="card card-feature" tabindex="0">
                                        
                                            <div class="glare pointer-events-none absolute inset-0 z-50 opacity-0 transition-all duration-150 ease-out" aria-hidden="true"></div>

                                            <div class="absolute inset-0 w-full h-full -z-1 bg-linear-135 from-40% to-70% from-[#8dffdf] to-[#8a70e1]"></div>

                                        <div class="karta  bg-linear-135 from-primary to-secondary">
                                            
                                        <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 style="background: linear-gradient(135deg, #493a5f 15%, var(--bg) 150%);">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/shadow.webp" width="259" height="270" class="absolute inset-0 mx-auto mb-auto w-1/2 -z-1">
  <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M40 0C62.09 0 80 17.91 80 40C80 62.09 62.09 80 40 80C17.91 80 0 62.09 0 40C0 17.91 17.91 0 40 0Z" fill="url(#paint0_linear_1556_14)"/>
<path d="M40.5 12C56.2388 12 69 24.7612 69 40.5C69 56.2388 56.2388 69 40.5 69C24.7612 69 12 56.2388 12 40.5C12 24.7612 24.7612 12 40.5 12Z" stroke="url(#paint1_radial_1556_14)" stroke-opacity="0.7" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M40 1.09961C61.4825 1.09961 78.9004 18.5175 78.9004 40C78.9004 61.4825 61.4825 78.9004 40 78.9004C18.5175 78.9004 1.09961 61.4825 1.09961 40C1.09961 18.5175 18.5175 1.09961 40 1.09961Z" stroke="#191321" stroke-width="2.2"/>
<path d="M55.0219 54.3798H43.4019C42.0619 54.3798 40.9819 53.2898 40.9819 51.9598V51.7998H42.5119C43.1019 51.7998 43.5719 51.3198 43.5719 50.7398V48.1298H44.8519C47.6519 48.1298 49.9219 45.8598 49.9219 43.0598V30.6798C49.9219 27.8798 47.6519 25.6098 44.8519 25.6098H40.9819V23.5698C40.9819 22.9798 40.5019 22.5098 39.9219 22.5098C39.3419 22.5098 38.8619 22.9898 38.8619 23.5698V25.6098H34.9919C32.1919 25.6098 29.9219 27.8798 29.9219 30.6798V43.0598C29.9219 45.8598 32.1919 48.1298 34.9919 48.1298H36.2719V50.7398C36.2719 51.3298 36.7519 51.7998 37.3319 51.7998H38.8619V51.9598C38.8619 54.4698 40.9019 56.5098 43.4119 56.5098H55.0319C55.6219 56.5098 56.0919 56.0298 56.0919 55.4498C56.0919 54.8698 55.6119 54.3898 55.0319 54.3898L55.0219 54.3798ZM34.9819 27.7198H44.8419C46.4619 27.7198 47.7919 29.0398 47.7919 30.6698V31.8298C43.0119 31.1098 40.9719 31.8998 38.9919 32.6598C37.3019 33.3098 35.6919 33.9298 32.0419 33.5798V30.6698C32.0419 29.0498 33.3619 27.7198 34.9919 27.7198H34.9819ZM32.0419 43.0498V40.9398H36.2419C36.8319 40.9398 37.3019 40.4598 37.3019 39.8798C37.3019 39.2998 36.8219 38.8198 36.2419 38.8198H32.0419V35.7198C32.7519 35.7798 33.4019 35.8098 33.9919 35.8098C36.7519 35.8098 38.3319 35.1998 39.7619 34.6498C41.6019 33.9398 43.3419 33.2698 47.7919 33.9798V43.0498C47.7919 44.6698 46.4719 45.9998 44.8419 45.9998H34.9819C33.3619 45.9998 32.0319 44.6798 32.0319 43.0498H32.0419ZM38.3919 48.1198H41.4519V49.6698H38.3919V48.1198Z" fill="#F4F2F7"/>
<defs>
<linearGradient id="paint0_linear_1556_14" x1="11.8" y1="11.6" x2="67.8" y2="67.6" gradientUnits="userSpaceOnUse">
<stop stop-color="#493A5F"/>
<stop offset="1" stop-color="#271C37" stop-opacity="0.5"/>
</linearGradient>
<radialGradient id="paint1_radial_1556_14" cx="0" cy="0" r="1" gradientTransform="matrix(-16.5759 -35.5 38.0064 -18.2101 40.9936 41.5)" gradientUnits="userSpaceOnUse">
<stop offset="0.855769" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.8"/>
</radialGradient>
</defs>
</svg>




                                            </div>
                                            
                                            <h6 class="z-50" style=" color: var(--surface);">Kroplówki witaminowe</h6>
                                            <p class="text-card/65 text-sm sm:text-base mb-1" style=" color: var(--surface);">
                                                24h na dobę, 7 dni w tygodniu, z dojazdem na terenie Warszawy i okolic
                                            </p>
                                        </div>
                                    </div>


                                    
                                    <div class="card card-feature relative  flex items-center-safe justify-center-safe min-h-[320px] sm:min-h-[280px] m-auto" tabindex="0">
                                        <div class="cloth-corner  px-2 py-7 md:px-7   text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                            <div class="flex  items-center-safe justify-center-safe w-20 h-20 m-auto pb-4">

<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M40 0C62.09 0 80 17.91 80 40C80 62.09 62.09 80 40 80C17.91 80 0 62.09 0 40C0 17.91 17.91 0 40 0Z" fill="url(#paint0_linear_1556_9)"/>
<path d="M39.5 10C55.9115 10 69 23.1048 69 39C69 54.8952 55.9115 68 39.5 68C23.0885 68 10 54.8952 10 39C10 23.1048 23.0885 10 39.5 10Z" stroke="url(#paint1_radial_1556_9)" stroke-opacity="0.4" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M40 10C56.6861 10 70 23.3272 70 39.5C70 55.6728 56.6861 69 40 69C23.3139 69 10 55.6728 10 39.5C10 23.3272 23.3139 10 40 10Z" stroke="url(#paint2_radial_1556_9)" stroke-opacity="0.3" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M40 1.09961C61.4825 1.09961 78.9004 18.5175 78.9004 40C78.9004 61.4825 61.4825 78.9004 40 78.9004C18.5175 78.9004 1.09961 61.4825 1.09961 40C1.09961 18.5175 18.5175 1.09961 40 1.09961Z" stroke="#BBA9F6" stroke-width="2.2" stroke-miterlimit="1.41421"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M51.9695 52.7905C51.9695 53.1705 51.6495 53.5005 51.2595 53.5005H30.7295C30.3495 53.5005 30.0195 53.1805 30.0195 52.7905V36.1705C30.0195 35.7905 30.3395 35.4605 30.7295 35.4605H33.3095V31.1705C33.3095 26.9305 36.7595 23.4805 40.9995 23.4805C45.2395 23.4805 48.6795 26.9305 48.6795 31.1705V35.4605H51.2595C51.6395 35.4605 51.9695 35.7805 51.9695 36.1705V52.7905ZM35.4895 35.4705H46.5195V31.1805C46.5195 28.1405 44.0395 25.6705 41.0095 25.6705C37.9795 25.6705 35.4995 28.1405 35.4995 31.1805V35.4705H35.4895ZM40.9995 39.6305C39.2595 39.6305 37.8495 41.0405 37.8495 42.7805C37.8495 44.1305 38.7095 45.2905 39.9095 45.7305V49.4205C39.9095 50.0205 40.3995 50.5105 40.9995 50.5105C41.5995 50.5105 42.0895 50.0205 42.0895 49.4205V45.7305C43.2895 45.2905 44.1495 44.1305 44.1495 42.7805C44.1495 41.0405 42.7395 39.6305 40.9995 39.6305ZM40.9995 41.8005C40.4595 41.8005 40.0195 42.2405 40.0195 42.7805C40.0195 43.3205 40.4595 43.7605 40.9995 43.7605C41.5395 43.7605 41.9695 43.3205 41.9695 42.7805C41.9695 42.2405 41.5295 41.8005 40.9995 41.8005Z" fill="#150D1B"/>
<defs>
<linearGradient id="paint0_linear_1556_9" x1="11.8" y1="11.6" x2="67.8" y2="67.6" gradientUnits="userSpaceOnUse">
<stop stop-color="#BBA9F6"/>
<stop offset="1" stop-color="#FDBA74"/>
</linearGradient>
<radialGradient id="paint1_radial_1556_9" cx="0" cy="0" r="1" gradientTransform="matrix(-20.2437 -34.0633 34.5181 -21.0367 39.5 41.4683)" gradientUnits="userSpaceOnUse">
<stop offset="0.858056" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.7"/>
</radialGradient>
<radialGradient id="paint2_radial_1556_9" cx="0" cy="0" r="1" gradientTransform="matrix(-17.7215 -37.448 37.961 -18.4398 41.0127 41.552)" gradientUnits="userSpaceOnUse">
<stop offset="0.841346" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.8"/>
</radialGradient>
</defs>
</svg>


                                            </div>
                                            <h6 class="z-50 text-white ">Gwarancja poufności</h6>
                                            <p class=" text-white/50   text-sm sm:text-base mb-1 sm:mb-2">
                                                Gwarantujemy pełną dyskrecję, szczególnie ważną w leczeniu uzależnień
                                            </p>
                                        </div>
                                    </div>


                                   <div class="card card-feature relative  flex items-center-safe justify-center-safe min-h-[320px] sm:min-h-[280px] m-auto" tabindex="0">
                                        <div class="cloth-corner  px-2 py-7 md:px-7  text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                            <div class="flex  items-center-safe justify-center-safe w-20 h-20 m-auto pb-4">


<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M40 0C62.09 0 80 17.91 80 40C80 62.09 62.09 80 40 80C17.91 80 0 62.09 0 40C0 17.91 17.91 0 40 0Z" fill="url(#paint0_linear_1556_19)"/>
<path d="M40 10C55.8952 10 69 23.0885 69 39.5C69 55.9115 55.8952 69 40 69C24.1048 69 11 55.9115 11 39.5C11 23.0885 24.1048 10 40 10Z" stroke="url(#paint1_radial_1556_19)" stroke-opacity="0.5" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M40 10C56.5672 10 70 23.4328 70 40C70 56.5672 56.5672 70 40 70C23.4328 70 10 56.5672 10 40C10 23.4328 23.4328 10 40 10Z" stroke="url(#paint2_radial_1556_19)" stroke-opacity="0.3" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M40 1.09961C61.4825 1.09961 78.9004 18.5175 78.9004 40C78.9004 61.4825 61.4825 78.9004 40 78.9004C18.5175 78.9004 1.09961 61.4825 1.09961 40C1.09961 18.5175 18.5175 1.09961 40 1.09961Z" stroke="#DB8B97" stroke-width="2.2" stroke-miterlimit="1.41421"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M31.4711 42.2197L35.0211 38.6697L38.9211 42.5697C39.3011 42.9497 39.9211 42.9497 40.3011 42.5697C40.6811 42.1897 40.6811 41.5697 40.3011 41.1897L36.4011 37.2897L39.9511 33.7397L43.8511 37.6397C44.2311 38.0197 44.8511 38.0197 45.2311 37.6397C45.6111 37.2597 45.6111 36.6397 45.2311 36.2597L41.3311 32.3596L43.7811 29.9097L41.8811 28.0097C41.5011 27.6297 41.5011 27.0097 41.8811 26.6297C42.2611 26.2497 42.8811 26.2497 43.2611 26.6297L48.3711 31.7397L51.3111 28.7996L49.6911 27.1797C49.3111 26.7997 49.3111 26.1796 49.6911 25.7996C50.0711 25.4196 50.6911 25.4196 51.0711 25.7996L55.7011 30.4297C56.0811 30.8097 56.0811 31.4297 55.7011 31.8097C55.5111 31.9997 55.2611 32.0997 55.0111 32.0997C54.7611 32.0997 54.5111 31.9997 54.3211 31.8097L52.7011 30.1897L49.7611 33.1297L54.8711 38.2397C55.2511 38.6197 55.2511 39.2397 54.8711 39.6197C54.6811 39.8097 54.4311 39.9097 54.1811 39.9097C53.9311 39.9097 53.6811 39.8097 53.4911 39.6197C52.8211 38.9497 52.1911 38.3197 51.5911 37.7197L36.9111 52.3997C35.7211 53.5897 33.7811 53.5897 32.5811 52.3997L31.5311 51.3497L27.6611 55.2197C27.4711 55.4097 27.2211 55.5097 26.9711 55.5097C26.7211 55.5097 26.4711 55.4097 26.2811 55.2197C25.9011 54.8397 25.9011 54.2197 26.2811 53.8397L30.1511 49.9697L29.1011 48.9197C28.5211 48.3397 28.2111 47.5697 28.2111 46.7597C28.2111 45.9497 28.5311 45.1697 29.1011 44.5997L30.0811 43.6197L33.9811 47.5196C34.3611 47.8996 34.9811 47.8996 35.3611 47.5196C35.7411 47.1397 35.7411 46.5197 35.3611 46.1397L31.4611 42.2397L31.4711 42.2197Z" fill="#150D1B"/>
<defs>
<linearGradient id="paint0_linear_1556_19" x1="11.8" y1="12" x2="67.8" y2="68" gradientUnits="userSpaceOnUse">
<stop stop-color="#FFC9A9"/>
<stop offset="1" stop-color="#FB7185"/>
</linearGradient>
<radialGradient id="paint1_radial_1556_19" cx="0" cy="0" r="1" gradientTransform="matrix(-17.2785 -36 36.0729 -17.7602 40.9873 40.5)" gradientUnits="userSpaceOnUse">
<stop offset="0.875" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.8"/>
</radialGradient>
<radialGradient id="paint2_radial_1556_19" cx="0" cy="0" r="1" gradientTransform="matrix(-17.7215 -37.9221 37.961 -18.6732 41.0127 42.0779)" gradientUnits="userSpaceOnUse">
<stop offset="0.841346" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.8"/>
</radialGradient>
</defs>
</svg>




                                            </div>

                                            <h6 class="z-50 text-white ">Pobieranie krwi w domu</h6>
                                            <p class="text-white/50 text-sm sm:text-base mb-1 sm:mb-2">
                                                pobieramy krew do badania w domu pacjenta, bez dodatkowego stresu
                                            </p>
                                        </div>
                                    </div>


                                    


                                    <div class="card card-feature relative  flex items-center-safe justify-center-safe min-h-[320px] sm:min-h-[280px] m-auto" tabindex="0">
                                        <div class="cloth-corner  px-2 py-7 md:px-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">


                                            <div class="flex  items-center-safe justify-center-safe w-20 h-20 m-auto pb-4">
<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M40 1C61.5378 1 79 18.2384 79 39.5C79 60.7616 61.5378 78 40 78C18.4622 78 1 60.7616 1 39.5C1 18.2384 18.4622 1 40 1Z" fill="url(#paint0_linear_1556_4)"/>
<path d="M40 11C56.1369 11 69 23.8825 69 39.5C69 55.1175 56.1369 68 40 68C23.8631 68 11 55.1175 11 39.5C11 23.8825 23.8631 11 40 11Z" stroke="url(#paint1_radial_1556_4)" stroke-opacity="0.5" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M39.5 10C55.1175 10 68 22.8631 68 39C68 55.1369 55.1175 68 39.5 68C23.8825 68 11 55.1369 11 39C11 22.8631 23.8825 10 39.5 10Z" stroke="url(#paint2_radial_1556_4)" stroke-opacity="0.37" stroke-width="20" stroke-miterlimit="1.41421"/>
<path d="M40 1.09961C61.4825 1.09961 78.9004 18.5175 78.9004 40C78.9004 61.4825 61.4825 78.9004 40 78.9004C18.5175 78.9004 1.09961 61.4825 1.09961 40C1.09961 18.5175 18.5175 1.09961 40 1.09961Z" stroke="#62C6AA" stroke-width="2.2" stroke-miterlimit="1.41421"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M40.9983 55.5002C46.8483 53.4802 50.0983 50.7602 51.8283 46.4502C53.5283 42.2202 53.7383 36.4602 53.4783 28.5902L40.9983 25.4902L28.5183 28.5902C28.2583 36.4602 28.4683 42.2202 30.1683 46.4502C31.8983 50.7502 35.1483 53.4702 40.9983 55.5002ZM47.4283 39.8402C47.4283 40.4302 46.9483 40.9102 46.3583 40.9102H42.0783V45.1902C42.0783 45.7802 41.5983 46.2602 41.0083 46.2602C40.4183 46.2602 39.9383 45.7802 39.9383 45.1902V40.9102H35.6583C35.0683 40.9102 34.5883 40.4302 34.5883 39.8402C34.5883 39.2502 35.0683 38.7702 35.6583 38.7702H39.9383V34.4902C39.9383 33.9002 40.4183 33.4202 41.0083 33.4202C41.5983 33.4202 42.0783 33.9002 42.0783 34.4902V38.7702H46.3583C46.9483 38.7702 47.4283 39.2502 47.4283 39.8402Z" fill="#150D1B"/>
<defs>
<linearGradient id="paint0_linear_1556_4" x1="12.505" y1="12.55" x2="66.4005" y2="67.1455" gradientUnits="userSpaceOnUse">
<stop stop-color="#7CE2C5"/>
<stop offset="1" stop-color="#BBA9F6"/>
</linearGradient>
<radialGradient id="paint1_radial_1556_4" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(41 41.5) rotate(-114.677) scale(40.7185 41.1709)">
<stop offset="0.866351" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.8"/>
</radialGradient>
<radialGradient id="paint2_radial_1556_4" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(40.5 40.5) rotate(-115.925) scale(40.0281 41.1248)">
<stop offset="0.857079" stop-opacity="0"/>
<stop offset="1" stop-opacity="0.8"/>
</radialGradient>
</defs>
</svg>




                                        </div>
                                            <h6 class="z-50 text-white ">Nadzór medyczny 24/7
                                            </h6>
                                            <p class="text-white/50 text-sm sm:text-base mb-1 sm:mb-2">
                                                Doświadczeni lekarze, sterylne warunki, ciągłe monitorowanie stanu pacjenta
                                            </p>
                                        </div>
                                    </div>

                                        


                                </div>-->
                    </div>
                    </div>
        </div>


    </div>

</section>


            

                <section class="testimonials-section section-gradient">

                    <div class="wrapper gap-3 md:gap-8 max-w-7xl grid grid-cols-1 grid-rows-3 md:grid-rows-1 md:grid-cols-7 mb-10 h-[900px] md:max-h-[650px] relative">

                        <div class="content col-span-1 row-span-1 md:col-span-3 relative text-center md:text-left my-20 ">
                            <h3 class=" text-gray-800">Zaufali nam</h3>
                            <p class="text-gray-600 mt-6">Wykonaliśmy setki terapii infuzyjnych. Pomogliśmy dziesiątkom pacjentów wyjść z uzależnień.</p>
                        </div>


                        <!-- Forward strip: composited wrapper + paint containment -->
                        <div class="testim-container-forward col-span-1 row-span-1 md:col-span-2 relative gap-3 flex flex-row sm:flex-col  w-max h-auto md:w-full md:h-max ">
                        
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-19.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-4.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-5.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-6.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-7.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-8.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-9.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-10.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-11.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-12.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-13.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-14.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-15.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-16.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-17.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-18.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-20.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-21.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-22.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-23.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-24.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-25.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-26.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                        
                        </div>

                        <!-- Backward strip: same setup -->
                        <div class="testim-container-backward col-span-1 row-span-1 md:col-span-2 relative gap-3 flex flex-row sm:flex-col md:w-full md:h-max ">
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-14.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-15.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-16.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-17.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-18.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-20.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-21.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-22.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-23.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-24.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-25.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-26.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-19.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-4.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-5.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-6.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-7.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-8.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-9.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-10.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-11.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-12.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-13.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
                        </div>


                    </div>
                </section>


                
                <section>
                    <div class="wrapper">
                        <div class="content text-center m-auto md:max-w-4xl pb-16 md:pb-20 lg:pb-22">
                            <h3>Terapia infuzyjna zapewnia
                                                pełną rewitalizację</h3>
                            <p class="text-base lg:text-lg text-white/60 pt-4 lg:pt-6 leading-relaxed m-auto">Nasze wzmacniające i
                                                oczyszczające organizm kroplówki witaminowe pozwolą Ci odzyskać siły po chorobie, wysiłku lub zatruciu i
                                                na nowo nabrać witalności.</p>
                        </div>

                        <?php get_template_part('template-parts/kroplowki-4-kafle'); ?>
                        <?php get_template_part('template-parts/kroplowki-korzysci'); ?>
                        <?php get_template_part('template-parts/duzy-baner'); ?>

                    </div>
                </section>


                
<section class="services-marquee-section py-28 overflow-clip pb-24 md:pb-36" style="background: linear-gradient( 180deg, var(--secondary)  -100%, rgba(238, 239, 239) 50%);">

                
    <div class="wrapper">
            <div class="content text-center mx-auto md:max-w-4xl pb-16 md:pb-20 lg:pb-28">
                        <h3 class=" text-black">Od pierwszego kontaktu do ostatniego etapu</h3>
                        <p class="pt-6 text-gray-500">Wspieramy Cię na każdym kroku drogi do zdrowia. Przywracamy równowagę i ułatwiamy powrót do sił wtedy, gdy najbardziej tego potrzebujesz</p>
            </div>
    </div>

                    <div class="marquee-container overflow-clip relative">
                        <div class="marquee flex items-center-safe gap-6 w-max m-auto">
                            
                        <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-wine-glass"></i>
                                <span>Nie potrafisz kontrolować spożycia alkoholu?</span>
                            </div>
                            <!-- Leczenie Uzależnień -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-wine-glass"></i>
                                <span>Nie potrafisz kontrolować spożycia alkoholu?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-pills" style="color: #ab47bc;"></i>
                                <span>Sięgasz po narkotyki mimo negatywnych skutków?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-capsules" style="color: #999;"></i>
                                <span>Uzależniłeś się od leków przeciwbólowych?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-heart-broken" style="color: #ef5350;"></i>
                                <span>Twoja rodzina cierpi z powodu Twojego nałogu?</span>
                            </div>

                            <!-- Kroplówki Witaminowe -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-battery-empty"></i>
                                <span>Walczysz z przewlekłym zmęczeniem?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-running" style="color: #66bb6a;"></i>
                                <span>Uprawiasz wyczynowo sport?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-bolt" style="color: #42a5f5;"></i>
                                <span>Potrzebujesz zastrzyku energii?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-glass-cheers" style="color: #ab47bc;"></i>
                                <span>Regeneracja po imprezie?</span>
                            </div>

                            <!-- Badania Laboratoryjne -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-thermometer-half"></i>
                                <span>Masz objawy infekcji lub stanu zapalnego?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-virus" style="color: #66bb6a;"></i>
                                <span>Boli Cię gardło i podejrzewasz paciorkowca?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-heartbeat" style="color: #ef5350;"></i>
                                <span>Chcesz sprawdzić ryzyko chorób serca?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-virus" style="color: #42a5f5;"></i>
                                <span>Potrzebujesz testu na COVID-19?</span>
                            </div>

                            <!-- Ozonoterapia -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-shield-virus" style="color: #999;"></i>
                                <span>Masz problemy z infekcjami?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-tired"></i>
                                <span>Czujesz się przewlekle zmęczony?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-shield-alt" style="color: #66bb6a;"></i>
                                <span>Chcesz wzmocnić odporność?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-leaf" style="color: #42a5f5;"></i>
                                <span>Potrzebujesz detoksykacji organizmu?</span>
                            </div>

                            <!-- Duplicate for seamless loop -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-wine-glass"></i>
                                <span>Nie potrafisz kontrolować spożycia alkoholu?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-pills" style="color: #ab47bc;"></i>
                                <span>Sięgasz po narkotyki mimo negatywnych skutków?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-battery-empty"></i>
                                <span>Walczysz z przewlekłym zmęczeniem?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-thermometer-half"></i>
                                <span>Masz objawy infekcji lub stanu zapalnego?</span>
                            </div>


                            <!-- Leczenie Uzależnień -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-wine-glass"></i>
                                <span>Nie potrafisz kontrolować spożycia alkoholu?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-pills" style="color: #ab47bc;"></i>
                                <span>Sięgasz po narkotyki mimo negatywnych skutków?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-capsules" style="color: #999;"></i>
                                <span>Uzależniłeś się od leków przeciwbólowych?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-heart-broken" style="color: #ef5350;"></i>
                                <span>Twoja rodzina cierpi z powodu Twojego nałogu?</span>
                            </div>

                            <!-- Kroplówki Witaminowe -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-battery-empty"></i>
                                <span>Walczysz z przewlekłym zmęczeniem?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-running" style="color: #66bb6a;"></i>
                                <span>Uprawiasz wyczynowo sport?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-bolt" style="color: #42a5f5;"></i>
                                <span>Potrzebujesz zastrzyku energii?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-glass-cheers" style="color: #ab47bc;"></i>
                                <span>Regeneracja po imprezie?</span>
                            </div>

                            <!-- Badania Laboratoryjne -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-thermometer-half"></i>
                                <span>Masz objawy infekcji lub stanu zapalnego?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-virus" style="color: #66bb6a;"></i>
                                <span>Boli Cię gardło i podejrzewasz paciorkowca?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-heartbeat" style="color: #ef5350;"></i>
                                <span>Chcesz sprawdzić ryzyko chorób serca?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-virus" style="color: #42a5f5;"></i>
                                <span>Potrzebujesz testu na COVID-19?</span>
                            </div>

                            <!-- Ozonoterapia -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-shield-virus" style="color: #999;"></i>
                                <span>Masz problemy z infekcjami?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-tired"></i>
                                <span>Czujesz się przewlekle zmęczony?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-shield-alt" style="color: #66bb6a;"></i>
                                <span>Chcesz wzmocnić odporność?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-leaf" style="color: #42a5f5;"></i>
                                <span>Potrzebujesz detoksykacji organizmu?</span>
                            </div>

                            <!-- Duplicate for seamless loop -->
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-wine-glass"></i>
                                <span>Nie potrafisz kontrolować spożycia alkoholu?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-pills" style="color: #ab47bc;"></i>
                                <span>Sięgasz po narkotyki mimo negatywnych skutków?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-battery-empty"></i>
                                <span>Walczysz z przewlekłym zmęczeniem?</span>
                            </div>
                            <div class="marquee-item inline-flex items-center gap-2 px-4 py-2">
                                <i class="fas fa-thermometer-half"></i>
                                <span>Masz objawy infekcji lub stanu zapalnego?</span>
                            </div>
                        </div>
                    </div>


    <div class="wrapper h-[1600px] md:h-[600px]">
        <div class="grid grid-cols-3 sm:grid-rows-5 grid-rows-15 gap-x-4 gap-y-3 items-center-safe justify-center-safe content-center-safe ">


                                    <div class="card kolumna1-1 sm:col-span-1 col-span-3 sm:col-start-1 row-span-3 sm:row-start-1 cloth-border-nobg flex items-center justify-center  self-start ">
                                            <div class="cloth-corner relative  cursor-pointer group ">
                                                <a href="/leczenie-uzaleznien">
                                                    <div class="relative  transition-all duration-300">
                                                        <img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/uslugi/uslugi-detoksykacja.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                                                        
                                                        <div class="absolute bottom-0 left-0 right-0 p-6 ">
                                                            <div class="text-white">

                                                                <h6>Leczenie uzależnień
                                                                </h6>
                                                            </div>
                                                        </div>

                                                        
                                                        <button class="absolute rounded-full flex items-center justify-center w-12 h-12 transition-all duration-300 bg-card top-4 right-4 hover:bg-blue-600 hover:text-white group-hover:scale-110">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>

                                    </div>


                                    <div class="card kolumna1-2 sm:col-span-1 col-span-3 sm:col-start-1 row-span-2 sm:row-start-4 cloth-border-nobg flex items-center justify-center self-end">
                                        <div class="cloth-corner relative  cursor-pointer group">
                                            <a href="/eliksir-mlodosci">
                                                <div class="relative  transition-all duration-300">
                                                    <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/uslugi/uslugi-zastrzyk-mlodosci.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                                                    
                                                    <div class="absolute bottom-0 left-0 right-0 p-6 ">
                                                        <div class="text-white">

                                                            <h6>Zastrzyk młodości
                                                            </h6>
                                                        </div>
                                                    </div>

                                                    
                                                    <button class="absolute rounded-full flex items-center justify-center w-12 h-12 transition-all duration-300 bg-card top-4 right-4 hover:bg-blue-600 hover:text-white group-hover:scale-110">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="card kolumna2 sm:col-span-1 col-span-3 sm:col-start-2 row-span-2 sm:row-start-1 cloth-border-nobg flex items-center justify-center  self-start">
                                        <div class="cloth-corner relative cursor-pointer group">
                                            <a href="/wszywka-alkoholowa">
                                                <div class="relative  transition-all duration-300">
                                                    <img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/uslugi/uslugi-wszywka.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover  transition-transform duration-300 ">

                                                        
                                                        <div class="absolute bottom-0 left-0 right-0 p-6 ">
                                                            <div class="text-white">

                                                                <h6>Wszywka alkoholowa
                                                                </h6>
                                                            </div>
                                                        </div>

                                                        
                                                        <button class="absolute rounded-full flex items-center justify-center w-12 h-12 transition-all duration-300 bg-card top-4 right-4 hover:bg-blue-600 hover:text-white group-hover:scale-110">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="card kolumna3 sm:col-span-1 col-span-3 sm:col-start-2 row-span-3 sm:row-start-3 cloth-border-nobg flex items-center justify-center self-end">
                                            <div class="cloth-corner relative  cursor-pointer group">
                                                <a href="/leczenie-uzaleznien">
                                                    <div class="relative transition-all duration-300">
                                                        <img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/uslugi/uslugi-regeneracja.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover  transition-transform duration-300 ">

                                                            
                                                            <div class="absolute bottom-0 left-0 right-0 p-6 ">
                                                                <div class="text-white">

                                                                    <h6>Detoksykacje
                                                                    </h6>
                                                                </div>
                                                            </div>

                                                            
                                                            <button class="absolute rounded-full flex items-center justify-center w-12 h-12 transition-all duration-300 bg-card top-4 right-4 hover:bg-blue-600 hover:text-white group-hover:scale-110">
                                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="card kolumna4 sm:col-span-1 col-span-3 sm:col-start-3 row-span-3 sm:row-start-1 cloth-border-nobg flex items-center justify-center  self-start">
                                                <div class="cloth-corner relative  cursor-pointer group">
                                                    <a href="/badania-laboratoryjne">
                                                        <div class="relative transition-all duration-300">
                                                            <img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/uslugi/uslugi-badania-laboratoryjne.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover  transition-transform duration-300 ">

                                                                
                                                                <div class="absolute bottom-0 left-0 right-0 p-6 ">
                                                                    <div class="text-white">

                                                                        <h6>Badania laboratoryjne
                                                                        </h6>
                                                                    </div>
                                                                </div>

                                                                
                                                                <button class="absolute rounded-full flex items-center justify-center w-12 h-12 transition-all duration-300 bg-card top-4 right-4 hover:bg-blue-600 hover:text-white group-hover:scale-110">
                                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>


                                                    <div class="card kolumna5 sm:col-span-1 col-span-3 sm:col-start-3 row-span-2 sm:row-start-4 cloth-border-nobg flex items-center justify-center self-end">
                                                        <div class="cloth-corner relative  cursor-pointer group">
                                                            <a href="/ozonoterapia">
                                                                <div class="relative  transition-all duration-300">
                                                                    <img
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/uslugi/uslugi-ozonoterapia.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover  transition-transform duration-300 ">

                                                                    
                                                                    <div class="absolute bottom-0 left-0 right-0 p-6 ">
                                                                        <div class="text-white">

                                                                            <h6>Ozonoterapia
                                                                            </h6>
                                                                        </div>
                                                                    </div>

                                                                    
                                                                    <button class="absolute rounded-full flex items-center justify-center w-12 h-12 transition-all duration-300 bg-card top-4 right-4 hover:bg-blue-600 hover:text-white group-hover:scale-110">
                                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

        </div>


    </div>
</section>





<?php get_template_part('template-parts/opinie'); ?>







                                        

                                        <section class="overflow-x-clip min-h-[1700px] md:min-h-[1140px]">
                                            <div class="wrapper">
                                                <div
                                                    class="grid items-start gap-12 md:grid-cols-2">
                                        

                                                    <div class="content">

                                                        <h2>Prywatna klinika
                                                            <span style="color: var(--accent);">z najwyższym standardem
                                                            </span>opieki</h2>

                                                        <p class="mb-8 leading-relaxed" style="color: var(--text-2);">
                                                            Wierzymy, że regeneracja jest świadomą inwestycją w siebie. Nasz zespół doświadczonych specjalistów dba o indywidualny plan leczenia, empatię i pełną dyskrecję na każdym etapie.


                                                        </p>

                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/onas-vithouse.webp" alt="Kroplówki witaminowe" width="1126" height="1190" class="object-cover relative"></div>

                                                        <div class="flex flex-col ">
                                                            <div class="squircle-mask squircle-5xl md:squircle-6xl squircle-smooth-xl mb-9 flex items-center justify-center">

                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/onas.webp" alt="Kroplówki witaminowe" width="1280" height="909" class="object-cover"/>
                                                            </div>
                                                            
                                                            <div class="content">
                                                            <p style="color: var(--text-2);">
                                                                Działamy w warunkach klinicznych z&nbsp;najwyższymi standardami bezpieczeństwa. Współpracujemy z Diagnostyka S.A. - największą siecią laboratoriów w Polsce.
                                                            </p>


                                                            <?php get_template_part('template-parts/diagnostyka'); ?>


                                                            <div class="py-6 space-y-4">
                                                                <div class="flex items-center gap-4">
                                                                    <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                                                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                                                    </div>
                                                                    <span class="font-medium" style=" color: var(--text-2);">Nasz partner Diagnostyka+ gwarancją jakości badań
                                                                    </span>
                                                                </div>
                                                                <div class="flex items-center gap-4">
                                                                    <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--secondary), var(--accent));">
                                                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                                                    </div>
                                                                    <span class="font-medium" style=" color: var(--text-2);">Pracujemy 24/7, zapewniając szybki dostęp do pomocy
                                                                    </span>
                                                                </div>
                                                                <div class="flex items-center gap-4">
                                                                    <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--success), var(--warning));">
                                                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                                                    </div>
                                                                    <span class="font-medium" style=" color: var(--text-2);">Dbamy o dyskrecję i komfort pacjentów</span>
                                                                </div>
                                                                <div class="flex items-center gap-4">
                                                                    <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--accent), var(--muted));">
                                                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                                                    </div>
                                                                    <span class="font-medium" style=" color: var(--text-2);">Poufność, zaufanie i empatia</span>
                                                                </div>
                                                            </div>

                                                            <a href="<?php echo get_template_directory_uri(); ?>/o-nas">
                                                                <div class="cloth-button-border p-0.5 flex justify-end self-end w-fit " style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                                                                    <button class="flex btn text-sm items-end gap-3 px-5 py-3  cloth-button bg-surface">
                                                                        Dowiedz się więcej
                                                                    </button>
                                                                </div>
                                                            </a>
</div>

                                                        </div>
                                                    </div>
                                                </section>
                                                

                                                <?php get_footer(); ?>
