<?php
/**
 * Template Part: Duzy baner
 * Description: Duzy baner
 */
?>

<div class="cloth-corner relative h-[480px] md:h-[560px] contain-paint" >
<img id="duzy-baner" src="<?php echo get_template_directory_uri(); ?>/assets/cta-backgroung.webp" alt="Duzy baner" width="2560" height="1046" class="object-cover object-[66%] min-h-[480px] md:min-h-[560px] pointer-events-none">
    <!-- <canvas id="duzy-baner" class="object-cover object-[66%] pointer-events-none" width="2560" height="1046"></canvas> -->

    <div class="absolute inset-0 z-50 pointer-events-none" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.0) 60%);"></div>
    
    <div class="absolute bottom-0 left-0 right-0 px-6 md:px-12 py-4 sm:py-16  z-100 ">
        <div class=" text-left sm:w-1/2  sm:pr-6 gap-2 ">
                        <h2 class="mb-2">Gotowi na pierwszy krok?</h2>
                        <p class="text-gray-100 mb-8 "> Odkrywaj życie na nowo, bez uzależnień. <br /> Wspieramy Cię
                            na każdym kroku drogi do zdrowia.</p>
                            <a href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>"  class="z-999 cursor-pointer "><button class="button-slider"><div class="button-inner"> Dowiedz się więcej   </div></button></a>    
                            
                        
        </div>
    </div>

    <button class="absolute flex items-center justify-center w-12 h-12 bg-card top-4 right-4 rounded-full">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
        </svg>
    </button>


</div>

                





<!-- <script>
    var canvas = document.getElementById('duzy-baner');
var ctx = canvas.getContext('2d');

var img = new Image();

img.onload = function(){
canvas.width = img.naturalWidth
canvas.height = img.naturalHeight
ctx.drawImage(img, 0, 0);
}

img.src = '<?php echo get_template_directory_uri(); ?>/assets/cta-backgroung.webp';
</script> -->



