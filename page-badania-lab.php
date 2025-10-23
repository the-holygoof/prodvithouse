<?php
/**
 * Template Name: Badania laboratoryjne
 * Description: Template for displaying laboratory tests page
 *
 * @package VitHouse
 */


get_header(); ?>



        <!--- start of page-badania-lab.php -->

<!--- title section --->
<?php 
get_template_part('template-parts/title-section', null, [
    'background_image' => 'https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/title-badania-scaled.webp',
    'alt_text' => 'Badania laboratoryjne'
]);
?>

<!--- end of title section --->





<?php get_template_part('template-parts/below-title', null, [
    'txt-start' => 'Badania laboratoryjne',
    'txt-color' => '#AAD9FF',
    'txt-end' => 'Warszawa',
    'subheading' => 'Współpracujemy z Diagnostyka S.A. - największą siecią laboratoriów w Polsce.',
]); ?>
    




        <!--- badania 2 kafle --->
        <section class="py-20 md:py-16 lg:py-16 mx-auto">
            <div class="px-4 sm:px-6 lg:px-8 mx-auto max-w-7xl">

                <div class="grid grid-cols-1 sm:grid-cols-2  gap-4 md:gap-6 mb-8 md:mb-12 lg:mb-16">

                    <!--- paciorkowca --->

                    <a href="<?php echo esc_url(home_url('/badania-laboratoryjne/szybki-test-na-paciorkowca')); ?>" class="relative">
                    <div class="card cloth-border p-0.5 relative flex items-end justify-end transform-3d cursor-pointer group min-h-96 " tabindex="0">
                            <div class="absolute -z-1 inset-0 bg-cover bg-center bg-no-repeat blur-sm pointer-events-none w-full h-full opacity-90" style="background-image:radial-gradient(circle at 5% 5%, rgba(255, 255, 255, 0.8), transparent 40%), radial-gradient(circle at 90% 90%, rgba(255, 255, 255, 0.5), transparent 40%), url('https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/badania-4.webp')"></div>    
                            <div class="glare pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-150 ease-out" aria-hidden="true">
                                                        </div>
                                <div class="absolute cloth-corner z-10 inset-0.75 flex items-center justify-center ">
                                                <div class="h-full w-full relative bg-cover bg-center bg-no-repeat group-hover:blur-sm group-hover:scale-105 group-hover:will-change-transform transition-all duration-500" style="background-image:url('https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/badania-4.webp')"> </div>
                                            </div>
                        
                        <div class="relative cloth-corner w-full h-full  z-200 ">

                            <div class="relative h-full flex flex-col justify-end px-4 py-6 group-hover:px-6 transition-all duration-100">
                                <div class="flex items-end justify-between mb-2">
                                    <h3 class="text-lg sm:text-xl font-extrabold text-black/70">
                                        Badanie CRP</h3>
                                </div>
                            </div>

                        </div>
                        <button class="absolute z-200 top-5 right-5 w-10 h-10 bg-(--card) rounded-full flex items-center justify-center transition-all duration-300 shadow-none  group-hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>

                            </svg>
                        </button>
                    </div>
                    </a>                    
                    <!--- crp  --->
                    <a href="<?php echo esc_url(home_url('/badania-laboratoryjne/crp')); ?>" class="relative">
                    <div class="card cloth-border p-0.5 relative flex items-end justify-end transform-3d cursor-pointer group min-h-96 " tabindex="0">
                            <div class="absolute -z-1 inset-0 bg-cover bg-center bg-no-repeat blur-sm pointer-events-none w-full h-full opacity-90" style="background-image:radial-gradient(circle at 5% 5%, rgba(255, 255, 255, 0.8), transparent 40%), radial-gradient(circle at 90% 90%, rgba(255, 255, 255, 0.5), transparent 40%), url('https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/badania-3.webp')"></div>    
                            <div class="glare pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-150 ease-out" aria-hidden="true">
                                                        </div>
                                <div class="absolute cloth-corner z-10 inset-0.75 flex items-center justify-center ">
                                                <div class="h-full w-full relative bg-cover bg-center bg-no-repeat group-hover:blur-sm group-hover:scale-105 group-hover:will-change-transform transition-all duration-500" style="background-image:url('https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/badania-3.webp')"> </div>
                                            </div>
                        
                        <div class="relative cloth-corner w-full h-full  z-200 ">

                            <div class="relative h-full flex flex-col justify-end px-4 py-6 group-hover:px-6 transition-all duration-100">
                                <div class="flex items-end justify-between mb-2">
                                    <h3 class="text-lg sm:text-xl font-extrabold text-black/70">
                                        Badanie CRP</h3>
                                </div>
                            </div>

                        </div>
                        <button class="absolute z-200 top-5 right-5 w-10 h-10 bg-(--card) rounded-full flex items-center justify-center transition-all duration-300 shadow-none  group-hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>

                            </svg>
                        </button>
                    </div>
                    </a>
                </div>






            </div>
        </section>




        <section class="pb-24 mx-auto ">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-center gap-12 md:grid-cols-2">
                    <!-- Left Column -->
                    <div class="col-span-1 flex flex-col justify-between content-between">



                        <div>

                            <p class="my-8 leading-relaxed font-normal" style="color: var(--text);">
                                Współczesna diagnostyka laboratoryjna jest jedną z najszybciej rozwijającej się gałęzi medycyny. Wykorzystanie nowoczesnych technologii w medycznych laboratoriach diagnostycznych umożliwia Pacjentom wykonanie wielu badań w stosunkowo krótkim czasie.





                            </p>
                            <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                                Wyniki badań laboratoryjnych dostarczają informacji niezbędnych do oceny stanu naszego zdrowia, zarówno w stanie fizjologii jak i patologii.




                            </p>



                            <p class="mb-16 leading-relaxed font-normal" style="color: var(--text);">
                                Regularne wykonywanie badań umożliwia: wczesne wykrycie stanu chorobowego oraz monitorowanie naszego stanu zdrowia.
                            </p>
                        </div>


                        <?php get_template_part('template-parts/diagnostyka'); ?>
                    </div>

                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class="mt-5 ">

                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/badania-2.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner min-h-[630px]">







                        </div>
                    </div>

                </div>


            </div>
        </section>




        <!-- gdzie  -->

        <section class="py-4 mb-36 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-center gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/badania-1.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner min-h-[530px]">
                    </div>


                    <!-- right Column -->

                    <div>





                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Na jakość badań laboratoryjnych wpływa wiele czynników. Nade wszystko wyniki badań muszą być wiarygodne. Naszym celem jest oferowanie badań, które bezwzględnie muszą mieć wartość diagnostyczną.





                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Związaliśmy swoje losy z niekwestionowanym liderem na rynku usług badań laboratoryjnych, największą siecią w Polsce – firmą DIAGNOSTYKA Sp. z o.o.
                        </p>












                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Nasz zespół to wyjątkowi specjaliści, którzy są nastawieni na opiekę nad pacjentem w ujęciu współczesnym – holistycznym. Każdy z naszych Pacjentów jest dla nas wyjątkowy i traktowany indywidualnie.

                        </p>


                        <p class=" leading-relaxed font-normal" style="color: var(--text);">Masz u nas możliwość wykonania badań CRP i szybkiego testu na paciorkowca.</p>
                    </div>






                </div>
            </div>

            </div>


            </div>
        </section>




























        <!-- badania korzysci  -->
         <?php get_template_part('template-parts/badania-korzysci'); ?>
        




        <!--- FAQ-->
        <?php 
        get_template_part('template-parts/faq');
        ?>
        











        <!--- end of page-badania-lab.php -->




<?php get_footer(); ?>
