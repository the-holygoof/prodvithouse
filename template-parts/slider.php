<?php
/**
 * Template Part: Slider
 * Description: Slider
 */
?>

<section class="slider-section py-2 md:py-4 my-auto relative overflow-hidden contain-layout gpu">
   
    <div class="slider_buttons h-full slider-buttons-wrapper max-w-8xl mx-auto absolute inset-0 top-4/9 p-4">    
        <button type="button"
        class="hero-prev btn rounded-full size-8  absolute border-0 left-1.5  z-310"
        aria-label="Poprzednie">❮</button>
        <button type="button"
        class="hero-next btn rounded-full size-8 absolute border-0 right-1.5 z-310"
        aria-label="Następne">❯</button>
    </div>
    
    <div class="wrapper"> 
        <div class="slider h-full">
            <div class="absolute z-10 inset-0 pointer-events-none select-none" style="background: linear-gradient(to right, var(--surface) 0%, transparent 70%);"></div>
            
            <div class="hero-carousel carousel relative">
        
                <div class="carousel-item slide relative">
                    <img
  srcset="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-400w.webp 400w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-600w.webp 600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-800w.webp 800w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-1000w.webp 1000w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-1200w.webp 1200w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-1600w.webp 1600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci-2000w.webp 2000w"
  sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px"
  src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-zastrzyk-mlodosci.jpg"
  alt=""
  width="2600"
  height="1440"
  class="object-bottom-right transform-flat"
/>
                    <div class="heroslider-content">
                        <h1>Eliksiry<br/>młodości</h1>
                        <p class="slider-subtitle"><strong>NAD+ i Glutation.</strong> Nowość w VIT-HOUSE. Dwa wyjątkowe preparaty. Eliksiry młodości, energii i&nbsp;detoksykacji!</span>
                        </p>
                        <a href="<?php echo esc_url( home_url( '/eliksir-mlodosci' ) ); ?>" target="_blank" class="z-999 cursor-pointer">
                           
                            
                        <button class="button-slider" href="<?php echo esc_url( home_url( '/eliksir-mlodosci' ) ); ?>"><div class="button-inner"> Dowiedz się więcej   </div></button>
                        </a>
                    </div>          
                </div>

                <div class="carousel-item slide">
                    <img
  srcset="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-400w.webp 400w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-600w.webp 600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-800w.webp 800w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-1000w.webp 1000w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-1200w.webp 1200w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-1600w.webp 1600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien-2000w.webp 2000w"
  sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px"
  src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-leczenie-uzaleznien.jpg"
  alt=""
  width="2600"
  height="1440"
  class="transform-flat"
/>
                    <div class="heroslider-content">
                        <h1>Twój pierwszy krok w&nbsp;stronę wolności</h1>
                        <p class="slider-subtitle">Pomagamy wyjść z nałogu, łącząc terapię, odtrucia po alkoholu, narkotykach i lekach. <span class="hidden md:block">Gwarantujemy prywatność, komfortowe pokoje  i opiekę medyczną.</span>
                        </p>
                        <a href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>"  class="z-999 cursor-pointer"><button class="button-slider"><div class="button-inner"> Dowiedz się więcej   </div></button></a>
                    </div>          
                </div>

                <div class="carousel-item slide">
                    <img
  srcset="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-400w.webp 400w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-600w.webp 600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-800w.webp 800w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-1000w.webp 1000w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-1200w.webp 1200w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-1600w.webp 1600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki-2000w.webp 2000w"
  sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px"
  src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-kroplowki.jpg"
  alt=""
  width="2600"
  height="1440"
  class="transform-flat"
/>
                    <div class="heroslider-content">
                        <h1>Kroplówki witaminowe</h1>
                        <p class="slider-subtitle">Najlepszy sposób, by uzupełnić niedobory bezcennych witamin<span class="hidden md:block">, niezbędnych składników odżywczych, zwiększyć wydajność organizmu</span> i&nbsp;wesprzeć naturalną odporność.</p>
                        <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe' ) ); ?>"  class="z-999 cursor-pointer"><button class="button-slider"><div class="button-inner"> Dowiedz się więcej   </div></button></a>
                    </div>          
                </div>

                <div class="carousel-item slide">
                   <img
  srcset="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-400w.webp 400w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-600w.webp 600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-800w.webp 800w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-1000w.webp 1000w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-1200w.webp 1200w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-1600w.webp 1600w, <?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia-2000w.webp 2000w"
  sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px"
  src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-ozonoterapia.jpg"
  alt=""
  width="2600"
  height="1440"
  class="transform-flat"
/>
                
                    <div class="heroslider-content">
                        <h1>Ozonoterapia</h1>
                        <p class="slider-subtitle">Skuteczna i efektywna metoda leczenia wielu schorzeń, zaburzeń i&nbsp;urazów. <span class="hidden md:block"> Poprawia parametry przepływu krwi, zwiększa uwalnianie tlenu z erytrocytów, korzystnie wpływa na układ odpornościowy.</span></p>
                        <a href="<?php echo esc_url( home_url( '/ozonoterapia' ) ); ?>"  class="z-999 cursor-pointer "><button class="button-slider"><div class="button-inner"> Dowiedz się więcej   </div></button></a>
                        
                    </div>          
                </div>

            </div>

        </div>

    </div>
</section>