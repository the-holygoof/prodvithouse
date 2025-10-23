<?php
/**
 * The template for displaying the homepage
 *
 * @package VitHouse
 */


 get_header(); ?>


<section class="md:h-[670px] relative mb-0 py-2 md:py-4">
    <div class="slider-buttons-wrapper max-w-8xl mx-auto absolute inset-0 top-4/9 p-4">    
        <button type="button"
        class="hero-prev btn rounded-full size-8  absolute border-0 left-1.5  z-[310]"
        aria-label="Poprzednie">❮</button>
        <button type="button"
        class="hero-next btn rounded-full size-8 absolute border-0 right-1.5 z-[310]"
        aria-label="Następne">❯</button>
            </div>
    <div class="wrapper">
 
        <div class="carousel slider w-full">

            <div class="absolute inset-0 z-1 pointer-events-none bg-gradient-to-r from-0% from-[var(--surface)] to-70% to-[var(--bg)/0]" ></div>    
            
            <div class="carousel-item slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-mlodosci.webp" alt="Profesjonalne leczenie uzależnień Warszawa" loading="eager" fetchpriority="high" width="2552" height="1540">
                <div class="heroslider-content">
                    <h1>NAD+ i Glutation <br/>eliksiry młodości</h1>
                    <p class="slider-subtitle">Nowość w VIT-HOUSE. Dwa wyjątkowe preparaty:<br/>NAD+ i Glutation - eliksiry młodości, energii i detoksykacji!</span>
                    </p>
                    <button class="button-slider" href="<?php echo esc_url( home_url( '/eliksir-mlodosci' ) ); ?>"><div class="button-inner"> Dowiedz się więcej <i class="fas fa-arrow-right"></i> </div></button>
                </div>          
            </div>

            <div class="carousel-item slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-detox.webp" alt="Profesjonalne leczenie uzależnień Warszawa" loading="eager" fetchpriority="high" width="2552" height="1540">
                <div class="heroslider-content">
                    <h1>Twój pierwszy krok w&nbsp;stronę wolności</h1>
                    <p class="slider-subtitle">Pomagamy wyjść z nałogu, łącząc terapię, odtrucia po alkoholu, narkotykach i lekach. <span class="hidden md:inline">Gwarantujemy prywatność, komfortowe pokoje  i opiekę medyczną.</span>
                    </p>
                    <button class="button-slider" href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>"><div class="button-inner"> Dowiedz się więcej <i class="fas fa-arrow-right"></i> </div></button>
                </div>          
            </div>

            <div class="carousel-item slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki.webp" alt="Profesjonalne leczenie uzależnień Warszawa" loading="eager" fetchpriority="high" width="2552" height="1540">
            
                <div class="heroslider-content">
                    <h1>Kroplówki witaminowe</h1>
                    <p class="slider-subtitle">Najlepszy sposób, by uzupełnić niedobory bezcennych witamin<span class="hidden md:inline">, niezbędnych składników odżywczych, zwiększyć wydajność organizmu i wesprzeć naturalną odporność.</span></p>
                    <button class="button-slider" href="<?php echo esc_url( home_url( '/kroplowki-witaminowe' ) ); ?>"><div class="button-inner"> Dowiedz się więcej <i class="fas fa-arrow-right"></i> </div></button>
                </div>          
            </div>

            <div class="carousel-item slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozono.webp" alt="Profesjonalne leczenie uzależnień Warszawa" loading="eager" fetchpriority="high" width="2552" height="1540">
            
                <div class="heroslider-content">
                    <h1>Ozonoterapia</h1>
                    
                    <p class="slider-subtitle">Skuteczna i efektywna metoda leczenia wielu schorzeń, zaburzeń i&nbsp;urazów. <span class="hidden md:inline">Poprawia parametry przepływu krwi, zwiększa uwalnianie tlenu z erytrocytów, korzystnie wpływa na układ odpornościowy.</span></p>
                    <button class="button-slider" href="<?php echo esc_url( home_url( '/ozonoterapia' ) ); ?>"><div class="button-inner"> Dowiedz się więcej <i class="fas fa-arrow-right"></i> </div></button>
                </div>          
            </div>
        </div>
    </div>
</section>


        <!-- below hero -->
<section class="py-2 md:py-8 min-h-[600px]">
    <div class="wrapper">
        <div id="below-hero" class="relative grid grid-cols-3 md:grid-cols-7 md:gap-8">
                    <div class="content col-span-3 md:col-span-3 flex flex-col justify-between gap-8 mt-6 md:-mt-10">
                        <h2>
                            Prywatna klinika
                            <span>leczenia uzależnień,</span>
                            kroplówki witaminowe
                            <span>i&nbsp;badania laboratoryjne w&nbsp;Warszawie
                            </span>

                        </h2>
                       
                        <div class="flex flex-row-reverse md:flex-row items-center justify-start gap-8 sm:scale-100 scale-75 origin-right md:mb-10">
                            
                            <div class="squircle squircle-4xl squircle-smooth-md squircle-amber-100 squircle-border-1 squircle-border-amber-200  w-[140px] relative ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/orly-medycyny-logo-2-265x300.webp" alt="Kroplówki witaminowe Warszawa" width="265" height="300" class="relative object-cover squircle-mask  squircle-4xl squircle-smooth-lg" style=" image-resolution: 2;">
                            </div>


                            <a href="https://www.orlymedycyny.pl/profile-942794-vit-house-pl-sp-z-o-o" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/app_laureate_110_gold_113.webp" width="110" height="110" style="width:110px; height:110px; border:0;" alt="VIT-HOUSE.PL Sp. z o.o. - Warszawa" title="VIT-HOUSE.PL Sp. z o.o. - Warszawa">
                            </a>
                                
                        </div>
                    </div>


                    <div class="col-span-3 md:col-span-4 ">
                                <div
                                    id="benefits-wrapper" class="col-span-1 mt-16 md:mt-20 grid grid-cols-2 md:grid-cols-2 gap-3 md:gap-8 relative md:px-6">

                                    <div class="card cloth-border relative  flex items-center justify-center min-h-[320px] sm:min-h-[280px]" tabindex="0">
                                        
                                        <div class="glare pointer-events-none absolute inset-0 z-50 opacity-0 transition-all duration-150 ease-out" aria-hidden="true"></div>

                                        
                                        <div class="absolute inset-0 w-full h-full -z-1" style="background-image: linear-gradient(135deg, #8dffdf 40%, #8a70e1 70%)"></div>

                                        
                                        <div class="cloth-corner px-2 py-7 md:px-7 text-center w-full h-full relative z-20  " style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                                            <div
                                                class="flex  items-center justify-center w-20 h-20 mx-auto rounded-full mb-4 border-(--bg) border-t-2 border-l-2 border-r  border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--bg) " style="background: linear-gradient(135deg, #493a5f 15%, var(--bg) 150%);">

                                        


                                                <svg width="30" height="34" viewBox="0 0 30 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M28.4357 35.625H15.4482C13.9539 35.625 12.7382 34.4093 12.7382 32.915V32.7381H14.4459C15.1017 32.7381 15.6334 32.2064 15.6334 31.5506V28.6305H17.0595C20.1842 28.6305 22.7263 26.0884 22.7263 22.9637V9.1292C22.7263 6.00459 20.1842 3.46245 17.0595 3.46245H12.7381V1.1875C12.7381 0.531703 12.2064 0 11.5506 0C10.8948 0 10.3631 0.531703 10.3631 1.1875V3.46245H6.04175C2.91714 3.46245 0.375 6.00452 0.375 9.1292V22.9637C0.375 26.0883 2.91707 28.6304 6.04175 28.6304H7.46794V31.5505C7.46794 32.2063 7.99964 32.738 8.65544 32.738H10.3631V32.9149C10.3631 35.7188 12.6442 37.9999 15.4482 37.9999H28.4357C29.0915 37.9999 29.6232 37.4682 29.6232 36.8124C29.6232 36.1566 29.0915 35.625 28.4357 35.625ZM6.04182 5.83745H17.0595C18.8746 5.83745 20.3513 7.31411 20.3513 9.1292V10.4212C15.0093 9.61786 12.729 10.4994 10.5195 11.3539C8.62753 12.0856 6.83337 12.7784 2.75007 12.3828V9.1292C2.75007 7.31411 4.22673 5.83745 6.04182 5.83745ZM2.75007 22.9637V20.6064H7.44255C8.09835 20.6064 8.63005 20.0747 8.63005 19.4189C8.63005 18.7631 8.09835 18.2314 7.44255 18.2314H2.75007V14.7671C3.54421 14.8371 4.26777 14.8693 4.92906 14.8693C8.01337 14.8693 9.77659 14.1874 11.3761 13.569C13.4296 12.7749 15.3746 12.0232 20.3513 12.8248V22.9637C20.3513 24.7787 18.8746 26.2554 17.0595 26.2554H6.04182C4.22673 26.2554 2.75007 24.7787 2.75007 22.9637ZM9.84301 28.6304H13.2584V30.363H9.84301V28.6304Z" fill="#F4F2F7"/>
                                                </svg>


                                            </div>
                                            <h6 class="z-50" style=" color: var(--surface);">Kroplówki witaminowe</h6>
                                            <p class="text-card/65 text-sm sm:text-base mb-1" style=" color: var(--surface);">
                                                24h na dobę, 7 dni w tygodniu, z dojazdem na terenie Warszawy i okolic
                                            </p>
                                        </div>
                                    </div>


                                    
                                    <div class="card cloth-border relative  flex items-center justify-center min-h-[320px] sm:min-h-[280px]" tabindex="0">
                                        <div class="cloth-corner  px-2 py-7 md:px-7   text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                            <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary) border-t-2 border-l-2 border-r border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">


                                                <svg width="28" height="30" viewBox="0 0 28 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.8968 37.1061C27.8968 37.5908 27.4872 38 27.0005 38H0.999781C0.513129 38 0.103516 37.5908 0.103516 37.1061V16.0577C0.103516 15.5735 0.513129 15.1642 0.999781 15.1642H4.26459V9.73557C4.26459 4.36755 8.63251 0 14.0022 0C19.3677 0 23.7357 4.36755 23.7357 9.73557V15.1642H27.0005C27.4872 15.1642 27.8968 15.5735 27.8968 16.0577V37.1061ZM7.01833 15.1642H20.986V9.73557C20.986 5.88436 17.851 2.75092 14.0022 2.75092C10.1493 2.75092 7.01833 5.88436 7.01833 9.73557V15.1642ZM14.0022 20.4341C11.804 20.4341 10.0155 22.2227 10.0155 24.4209C10.0155 26.136 11.1024 27.6017 12.6233 28.163V32.8343C12.6233 33.5943 13.2397 34.2099 14.0022 34.2099C14.7605 34.2099 15.377 33.5943 15.377 32.8343V28.163C16.8979 27.6017 17.9888 26.136 17.9888 24.4209C17.9889 22.2227 16.2004 20.4341 14.0022 20.4341ZM14.0022 23.1847C13.3208 23.1847 12.7652 23.7391 12.7652 24.4209C12.7652 25.1026 13.3208 25.6562 14.0022 25.6562C14.6835 25.6562 15.2351 25.1026 15.2351 24.4209C15.2351 23.7391 14.6836 23.1847 14.0022 23.1847Z" fill="#150D1B"/>
                                                </svg>
                                            </div>
                                            <h6 class="z-50 text-white ">Gwarancja poufności</h6>
                                            <p class=" text-white/50   text-sm sm:text-base mb-1 sm:mb-2">
                                                Gwarantujemy pełną dyskrecję, szczególnie ważną w leczeniu uzależnień
                                            </p>
                                        </div>
                                    </div>


                                   <div class="card cloth-border relative  flex items-center justify-center min-h-[320px] sm:min-h-[280px]" tabindex="0">
                                        <div class="cloth-corner  px-2 py-7 md:px-7  text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                            <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--danger-2) border-t-2 border-l-2 border-r  border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--danger)" style="background: linear-gradient(135deg, var(--accent) 10%, var(--danger) 100%);">


                                                <svg width="30" height="30" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.93422 21.1756L11.4268 16.6826L16.3721 21.6279C16.8543 22.1101 17.6435 22.1101 18.1257 21.6279C18.6079 21.1456 18.6079 20.3565 18.1257 19.8743L13.1802 14.9289L17.673 10.4361L22.6184 15.3815C23.1006 15.8637 23.8896 15.8637 24.3719 15.3815C24.8542 14.8992 24.8541 14.1101 24.3719 13.6279L19.4266 8.68257L22.5314 5.57815L20.1275 3.17435C19.6431 2.68993 19.6431 1.90499 20.1275 1.42057C20.6119 0.936214 21.3972 0.936214 21.8812 1.42057L28.3536 7.89303L32.0738 4.17245L30.0185 2.11703C29.5341 1.63268 29.5341 0.847374 30.0185 0.363319C30.5029 -0.121106 31.2878 -0.121106 31.7715 0.363319L37.6365 6.22809C38.1191 6.71214 38.1191 7.49737 37.6365 7.98143C37.3952 8.22383 37.0772 8.34488 36.7591 8.34488C36.4411 8.34488 36.123 8.22383 35.8817 7.98143L33.8271 5.92616L30.1066 9.64638L36.5802 16.1186C37.0628 16.6026 37.0628 17.3883 36.5802 17.8723C36.3353 18.1144 36.0209 18.2357 35.7028 18.2357C35.3848 18.2357 35.0667 18.1144 34.8254 17.8723C33.976 17.0233 33.1818 16.2295 32.4213 15.4691L13.8291 34.0609C12.3178 35.5722 9.86082 35.5723 8.34943 34.061L7.02091 32.7326L2.11631 37.637C1.87458 37.879 1.55648 38 1.23956 38C0.92265 38 0.60492 37.879 0.363264 37.6369C-0.121088 37.1525 -0.121088 36.3677 0.363264 35.8832L5.26712 30.9789L3.9386 29.6506C3.20851 28.9205 2.80655 27.9429 2.80655 26.9106C2.80655 25.8783 3.20851 24.9003 3.93868 24.1703L5.18043 22.9289L10.1258 27.8743C10.608 28.3565 11.3971 28.3566 11.8793 27.8743C12.3616 27.392 12.3616 26.6029 11.8793 26.1207L6.93422 21.1756Z" fill="#150D1B"/>
                                                </svg>


                                            </div>
                                            <h6 class="z-50 text-white ">Pobieranie krwi w domu</h6>
                                            <p class="text-white/50 text-sm sm:text-base mb-1 sm:mb-2">
                                                pobieramy krew do badania w domu pacjenta, bez dodatkowego stresu
                                            </p>
                                        </div>
                                    </div>


                                    


                                    <div class="card cloth-border relative  flex items-center justify-center min-h-[320px] sm:min-h-[280px]" tabindex="0">
                                        <div class="cloth-corner  px-2 py-7 md:px-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">


                                            <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full  border-(--primary-2) border-t-2 border-l-2 border-r  border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--primary-2) " style="background: linear-gradient(135deg, var(--primary), var(--secondary));">


                                                <svg width="30" height="30" viewBox="0 0 32 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0007 38C23.4085 35.4373 27.5244 31.9928 29.7209 26.5424C31.8789 21.1871 32.1454 13.8875 31.8115 3.92254L16.0007 0L0.189751 3.92254C-0.144011 13.8875 0.12236 21.187 2.28012 26.5424C4.47677 31.9928 8.5928 35.4373 16.0007 38ZM24.1422 18.1668C24.1422 18.9186 23.5327 19.5278 22.7809 19.5278H17.362V24.947C17.362 25.6984 16.7525 26.3084 16.0007 26.3084C15.2488 26.3084 14.6393 25.6983 14.6393 24.947V19.5278H9.22054C8.46863 19.5278 7.85907 18.9186 7.85907 18.1668C7.85907 17.4142 8.46863 16.8054 9.22054 16.8054H14.6393V11.3863C14.6393 10.6349 15.2488 10.0249 16.0007 10.0249C16.7525 10.0249 17.362 10.635 17.362 11.3863V16.8054H22.7809C23.5326 16.8054 24.1422 17.4142 24.1422 18.1668Z" fill="#150D1B"/>
                                                </svg>


                                            </div>
                                            <h6 class="z-50 text-white ">Nadzór medyczny 24/7
                                            </h6>
                                            <p class="text-white/50 text-sm sm:text-base mb-1 sm:mb-2">
                                                Doświadczeni lekarze, sterylne warunki, ciągłe monitorowanie stanu pacjenta
                                            </p>
                                        </div>
                                    </div>

<!--                                     <div class="squircle squircle-6xl squircle-[var(--secondary)] squircle-border squircle-border-secondary p-0.75 relative flex items-center justify-center  hover: min-h-[320px] sm:min-h-[280px]" tabindex="12">
                                        <div class="  px-2 py-7 md:px-7   text-center w-full h-full squircle squircle-6xl squircle-[var(--card)] relative">
                                            <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary) border-t-2 border-l-2 border-r border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">


                                                <svg width="28" height="30" viewBox="0 0 28 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.8968 37.1061C27.8968 37.5908 27.4872 38 27.0005 38H0.999781C0.513129 38 0.103516 37.5908 0.103516 37.1061V16.0577C0.103516 15.5735 0.513129 15.1642 0.999781 15.1642H4.26459V9.73557C4.26459 4.36755 8.63251 0 14.0022 0C19.3677 0 23.7357 4.36755 23.7357 9.73557V15.1642H27.0005C27.4872 15.1642 27.8968 15.5735 27.8968 16.0577V37.1061ZM7.01833 15.1642H20.986V9.73557C20.986 5.88436 17.851 2.75092 14.0022 2.75092C10.1493 2.75092 7.01833 5.88436 7.01833 9.73557V15.1642ZM14.0022 20.4341C11.804 20.4341 10.0155 22.2227 10.0155 24.4209C10.0155 26.136 11.1024 27.6017 12.6233 28.163V32.8343C12.6233 33.5943 13.2397 34.2099 14.0022 34.2099C14.7605 34.2099 15.377 33.5943 15.377 32.8343V28.163C16.8979 27.6017 17.9888 26.136 17.9888 24.4209C17.9889 22.2227 16.2004 20.4341 14.0022 20.4341ZM14.0022 23.1847C13.3208 23.1847 12.7652 23.7391 12.7652 24.4209C12.7652 25.1026 13.3208 25.6562 14.0022 25.6562C14.6835 25.6562 15.2351 25.1026 15.2351 24.4209C15.2351 23.7391 14.6836 23.1847 14.0022 23.1847Z" fill="#150D1B"/>
                                                </svg>
                                            </div>
                                            <h6 class="z-50 text-white ">Gwarancja poufności</h6>
                                            <p class=" text-white/50   text-sm sm:text-base mb-1 sm:mb-2">
                                                Gwarantujemy pełną dyskrecję, szczególnie ważną w leczeniu uzależnień
                                            </p>
                                        </div>
                                    </div> -->


                                </div>
                            </div>
                        </div>


                    </div>

                </section>


            

                <section class="testimonials-section section-gradient contain-content will-change-scroll">

                    <div class="wrapper gap-3 md:gap-8 max-w-7xl grid grid-cols-1 grid-rows-3 md:grid-rows-1 md:grid-cols-7 mb-10 h-[900px] md:max-h-[650px] relative">

                        <div class="content col-span-1 row-span-1 md:col-span-3 relative text-center md:text-left my-20 ">
                            <h3 class=" text-gray-800">Zaufali nam</h3>
                            <p class="text-gray-600 mt-6">Wykonaliśmy setki terapii infuzyjnych. Pomogliśmy dziesiątkom pacjentów wyjść z uzależnień.</p>
                        </div>


                        <!-- Forward strip: composited wrapper + paint containment -->
                        <div class="testim-container-forward col-span-1 row-span-1 md:col-span-2 relative gap-3 flex flex-row sm:flex-col  md:w-full md:h-max ">
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
                            <img class="testim-item" src="<?php echo get_template_directory_uri(); ?>/assets/testimonials/testim-2.webp" loading="lazy" decoding="async" width="480" height="640" alt="Testimonial"/>
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
                        <div class="content text-center mx-auto md:max-w-4xl mb-16 md:mb-20 lg:mb-22">
                            <h3>Terapia infuzyjna zapewnia
                                                pełną rewitalizację</h3>
                            <p class="text-base lg:text-lg text-white/60 mt-4 lg:mt-6 leading-relaxed">Nasze wzmacniające i
                                                oczyszczające organizm kroplówki witaminowe pozwolą Ci odzyskać siły po chorobie, wysiłku lub zatruciu i
                                                na nowo nabrać witalności.</p>
                        </div>

                        <?php get_template_part('template-parts/kroplowki-4-kafle'); ?>
                        <?php get_template_part('template-parts/kroplowki-korzysci'); ?>
                        <?php get_template_part('template-parts/duzy-baner'); ?>

                    </div>
                </section>


                
<section class="py-28 overflow-clip mb-0 pb-24 md:pb-36" style="background: linear-gradient( 180deg, var(--secondary)  -100%, rgba(238, 239, 239) 50%);">

                
    <div class="wrapper">
            <div class="content text-center mx-auto md:max-w-4xl mb-16 md:mb-20 lg:mb-28">
                        <h3 class=" text-black">Od pierwszego kontaktu do ostatniego etapu</h3>
                        <p class="mt-6 text-gray-500">Wspieramy Cię na każdym kroku drogi do zdrowia. Przywracamy równowagę i ułatwiamy powrót do sił wtedy, gdy najbardziej tego potrzebujesz</p>
            </div>
    </div>

                    <div class="marquee-container mb-28 overflow-clip relative ">
                        <div class="marquee flex items-center gap-6 w-max">
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


    <div class="wrapper min-h-[1600px] md:min-h-[600px]">
        <div class="grid grid-cols-3 sm:grid-rows-5 grid-rows-15 gap-x-4 gap-y-3 items-center justify-center content-center ">


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
                                                <!--- end of page-homepage.php -->

                                                <?php get_footer(); ?>
