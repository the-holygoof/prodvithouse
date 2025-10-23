<?php
/**
 * Template Part: Duzy baner
 * Description: Duzy baner
 */
?>

<div class="cloth-corner relative h-[480px] md:h-[560px]" >

    <canvas id="duzy-baner" class="object-cover object-[66%] pointer-events-none"></canvas>

    <div class="absolute inset-0 z-50 pointer-events-none" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.0) 60%);"></div>
    
    <div class="absolute bottom-0 left-0 right-0 px-6 md:px-12 py-4 sm:py-16  z-100 ">
        <div class=" text-left sm:w-1/2  sm:pr-6 gap-2 ">
                        <h2 class="mb-2">Gotowi na pierwszy krok?</h2>
                        <p class="text-gray-100"> Odkrywaj życie na nowo, bez uzależnień. <br /> Wspieramy Cię
                            na każdym kroku drogi do zdrowia.</p>
                        
                            <button  href="<?php echo esc_url( home_url( '/detoksykacje/' ) ); ?>" class="btn squircle-mask squircle-3xl squircle-smooth-md border-0 px-6 py-6 text-sm bg-gradient-main mt-8">
                            Dowiedz się więcej
                            </button>
                        
        </div>
    </div>

    <button class="absolute flex items-center justify-center w-12 h-12 bg-card top-4 right-4 rounded-full">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
        </svg>
    </button>


</div>

                





<script>
    var canvas = document.getElementById('duzy-baner');
var ctx = canvas.getContext('2d');

var img = new Image();

img.onload = function(){
canvas.width = img.naturalWidth
canvas.height = img.naturalHeight
ctx.drawImage(img, 0, 0);
}

img.src = 'https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/cta-backgroung2-scaled.webp';
</script>



