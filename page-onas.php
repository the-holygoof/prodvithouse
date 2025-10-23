<?php
/**
 * Template Name: O nas
 * Description: Template for displaying the About Us page
 *
 * @package VitHouse
 */


get_header(); ?>



        <!--- start of page-onas.php -->

<!--- title section --->
<?php 
get_template_part('template-parts/title-section', null, [
    'background_image' => 'https://vithouse.gameisrigged.pl/wp-content/uploads/2025/10/title-onas-scaled.webp',
    'alt_text' => 'O nas'
]);
?>

<!--- end of title section --->


<!-- below title section -->
 <?php 
get_template_part('template-parts/below-title', null, [
    'txt-start' => 'Pomagamy odzyskać ',
    'txt-color' => 'równowagę',
    'txt-end' => 'ludziom żyjącym intensywnie',
    'color' => '#AAD9FF',
]);
?>

<!-- end of below title section -->

 


        <!-- nasze zabiegi i badges kolorowy grid -->
<section class="pt-8 pb-20 md:pb-32 mx-auto">
    <div class="px-3 md:px-6 mx-auto max-w-7xl">
                <div class="grid items-center gap-12 grid-cols-1 md:grid-cols-2">

                    <!-- Content -->
                    <div class="space-y-8">
                        <div class="space-y-4">



                            <p class="text-base lg:text-lg text-white/90 leading-loose">Wierzymy, że regeneracja jest świadomą inwestycją w siebie. Nasz zespół doświadczonych specjalistów dba o indywidualny plan leczenia, empatię i pełną dyskrecję na każdym etapie. </p>
                            <br />
                            <p class="text-base lg:text-lg text-white/90 leading-loose">
                                Wyróżnia nas kompleksowe podejście do terapii jakie oferujemy. Dobieramy zabiegi pod kątem realnych potrzeb: po chorobie, w okresie intensywnego wysiłku, przy niedoborach lub w czasie detoksykacji. 
                            </p>
                        </div>
                        <p class="mb-8 leading-relaxed font-bold" style="color: var(--text);">
                            Nasze zabiegi i terapie:


                        </p>
                        <!-- Features List -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center shrink-0 w-3 h-3" style="background: var(--primary); border-radius: 9999px;">
                                    <div class="w-1 h-1" style="background: var(--bg); border-radius: 9999px;"></div>
                                </div>
                                <span class="font-medium" style="color: var(--text-2); font-family: 'Urbanist', sans-serif;">Kroplówki witaminowe</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center shrink-0 w-3 h-3" style="background: var(--primary); border-radius: 9999px;">
                                    <div class="w-1 h-1" style="background: var(--bg); border-radius: 9999px;"></div>
                                </div>
                                <span class="font-medium" style="color: var(--text-2); font-family: 'Urbanist', sans-serif;">Zastrzyk Młodości</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center shrink-0 w-3 h-3" style="background: var(--primary); border-radius: 9999px;">
                                    <div class="w-1 h-1" style="background: var(--bg); border-radius: 9999px;"></div>
                                </div>
                                <span class="font-medium" style="color: var(--text-2); font-family: 'Urbanist', sans-serif;">Detoksykacja</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center shrink-0 w-3 h-3" style="background: var(--primary); border-radius: 9999px;">
                                    <div class="w-1 h-1" style="background: var(--bg); border-radius: 9999px;"></div>
                                </div>
                                <span class="font-medium" style="color: var(--text-2); font-family: 'Urbanist', sans-serif;">Ozonoterapia</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center shrink-0 w-3 h-3" style="background: var(--primary); border-radius: 9999px;">
                                    <div class="w-1 h-1" style="background: var(--bg); border-radius: 9999px;"></div>
                                </div>
                                <span class="font-medium" style="color: var(--text-2); font-family: 'Urbanist', sans-serif;">Leczenie uzależnień</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center shrink-0 w-3 h-3" style="background: var(--primary); border-radius: 9999px;">
                                    <div class="w-1 h-1" style="background: var(--bg); border-radius: 9999px;"></div>
                                </div>
                                <span class="font-medium" style="color: var(--text-2); font-family: 'Urbanist', sans-serif;">Badania laboratoryjne</span>
                            </div>
                        </div>


                    </div>

                    <!-- Stats Cards -->
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div class="card cloth-border col-span-2 sm:col-span-1 p-0.5" style="background-image: linear-gradient(135deg, var(--secondary) 10%, var(--card) 50%, var(--secondary-2) 110%);">
                                <div class="cloth-corner p-8 text-center transition-all duration-300 " style="background: linear-gradient(135deg, var(--secondary-2) 0%, var(--card) 130%);">
                                    <div class="mb-3 text-4xl font-bold" style="color: var(--secondary); font-family: 'Poppins', sans-serif;">24/7</div>
                                    <h3 class="mb-2 text-lg font-semibold" style="color: var(--text); font-family: 'Urbanist', sans-serif;">Dostępność</h3>
                                    <p class="text-sm" style="color: var(--muted); font-family: 'Urbanist', sans-serif;">Pomoc w naszej klinice oraz z dojazdem do domu pacjenta</p>
                                </div>
                            </div>

                            <div class="card cloth-border p-0.5 col-span-2 sm:col-span-1" style="background-image: linear-gradient(135deg, var(--primary) 10%, var(--card) 50%, var(--primary-2) 115%);">
                                <div class="cloth-corner p-8 text-center transition-all duration-300 " style="background: linear-gradient(135deg, var(--primary-2) -10%, var(--card) 150%);">
                                    <div class="mb-3 text-4xl font-bold" style="color: var(--primary); font-family: 'Poppins', sans-serif;">5 lat</div>
                                    <h3 class="mb-2 text-lg font-semibold" style="color: var(--text); font-family: 'Urbanist', sans-serif;">Doświadczenia</h3>
                                    <p class="text-sm" style="color: var(--muted); font-family: 'Urbanist', sans-serif;">Od 2021 r. pomagamy naszym pacjentom wrócić do zdrowia </p>
                                </div>
                            </div>

                            <div class="card cloth-border p-0.5 col-span-2" style="background-image: linear-gradient(145deg, var(--secondary) 10%, var(--card) 50%, var(--accent) 110%);">
                                <div class="cloth-corner p-8 text-center transition-all duration-300 " style="background-image: linear-gradient(155deg, var(--secondary-2) 0%, var(--accent) 70%, var(--card) 170%);">
                                    <div class="flex items-center justify-center gap-8">
                                        <div>
                                            <div class="mb-2 text-3xl font-bold" style="color: var(--accent); font-family: 'Poppins', sans-serif;">60 min</div>
                                            <p class="text-sm" style="color: var(--muted); font-family: 'Urbanist', sans-serif;">Maksymalny czas trwania zabiegu</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Achievement Badge -->
                            <div class="card cloth-border p-0.5 col-span-2" style="background-image: linear-gradient(152deg, var(--secondary-2) -60%, var(--card) 50%, var(--accent) 190%);">
                                <div class="cloth-corner p-8 text-center transition-all duration-300 " style="background-image: linear-gradient(152deg, var(--secondary-2) -250%, var(--card) 50%, var(--accent) 350%);">
                                    <div class=" flex items-center gap-4">
                                        <div class="flex items-center justify-center w-12 h-12" style="background: var(--accent); border-radius: 9999px;">
                                            <div class="w-6 h-6" style="background: var(--secondary); border-radius: 9999px;"></div>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold" style="color: var(--text)">100% Dyskrecja</h4>
                                            <p class="text-sm" style="color: var(--muted);">Profesjonalna opieka i komfort</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <!-- o nas galeria na ciemnym -->


        <section class="md:py-32 py-16 mx-auto">
            <div class="px-3 md:px-6 mx-auto max-w-7xl">
                <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-2 gap-x-2 md:gap-x-3 gap-y-3 items-stretch justify-between content-between mb-4">






                    
                    <div class="card kolumna1-1 col-span-1 md:col-span-1 md:col-start-1 row-span-1 md:row-span-1 md:row-start-1 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-start">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/onas-1-2.webp" alt="" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">
                            </div>
                        </div>
                    </div>
                    <div class="card kolumna1-2 col-span-1 md:col-span-1 md:col-start-1 row-span-1 md:row-span-1 md:row-start-2 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-end">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/onas-2-3.webp" alt="" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                            </div>
                        </div>
                    </div>



                    <div class="card kolumna2-1 col-span-1 md:col-span-1 md:col-start-2 row-span-1 md:row-span-1 md:row-start-1 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-start">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/onas-3-1.webp" alt="" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                            </div>
                        </div>
                    </div>
                    
                    <div class="card kolumna2-2 col-span-1 md:col-span-1 md:col-start-2 row-span-1 md:row-span-1 md:row-start-2 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-end">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/onas-4.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                            </div>
                        </div>
                    </div>

                    <div class="card kolumna3 col-span-1 md:col-span-1 md:col-start-3 row-span-2 md:row-span-2 md:row-start-1 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-stretch">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/onas-5.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">


                            </div>
                        </div>
                    </div>



                </div>



            </div>
        </section>




        <!-- Dlaczego VIT-HOUSE?  -->
        <section class=" mx-auto py-28" style="background: linear-gradient( 180deg, var(--secondary)  -100%, rgba(238, 239, 239) 50%);">
    
    



            <div class="px-3 md:px-6 mx-auto max-w-7xl">
                <div class="text-center max-w-2xl mx-auto mb-20">
                    <h2 class="text-3xl md:text-5xl font-bold text-black">Dlaczego VIT-HOUSE?</h2>
                    <p class="mt-6 text-gray-500">Zaufały nam osoby publiczne, sportowcy, aktorzy i celebryci. <br /> Cenimy rzetelność i bezpieczeństwo procesu.</p>
                </div>



                
                <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-2 gap-x-2 md:gap-x-3 gap-y-3 items-stretch justify-between content-between mb-4">




                    <div class="card kolumna1-1 col-span-1 md:col-span-1 md:col-start-1 row-span-1 md:row-span-1 md:row-start-1 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-start">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/dlaczego-1.webp" alt="" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">
                            </div>
                        </div>
                    </div>

                    <div class="card kolumna1-2 col-span-1 md:col-span-1 md:col-start-1 row-span-1 md:row-span-1 md:row-start-2 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-end">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/dlaczego-2.webp" alt="" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                            </div>
                        </div>
                    </div>


                    <div class="card kolumna2-1 col-span-1 md:col-span-1 md:col-start-2 row-span-1 md:row-span-1 md:row-start-1 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-start">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/dlaczego-3.webp" alt="" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                            </div>
                        </div>
                    </div>

                    <div class="card kolumna2-2 col-span-1 md:col-span-1 md:col-start-2 row-span-1 md:row-span-1 md:row-start-2 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-end">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/dlaczego-4.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">

                            </div>
                        </div>
                    </div>

                    <div class="card kolumna3 col-span-1 md:col-span-1 md:col-start-3 row-span-2 md:row-span-2 md:row-start-1 cloth-border-nobg flex items-stretch justify-stretch bg-transparent self-stretch">
                        <div class="cloth-corner relative  cursor-pointer group w-full h-full">
                            <div class="relative transition-all duration-300 w-full h-full">
                                <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/dlaczego-5.webp" alt="Klinika leczenia uzależnień Warszawa" class="object-cover w-full h-full transition-transform duration-300 ">


                            </div>
                        </div>
                    </div>



                </div>


            </div>
        </section>



<!-- Klinika leczenia uzależnień -->
        <?php 
        get_template_part('template-parts/klinika');
        ?>



<!-- Dlaczego warto wybrać VIT-House -->

        <?php 
        get_template_part('template-parts/dlaczego-warto');
        ?>

        <!--- FAQ-->
        <?php 
        get_template_part('template-parts/faq');
        ?>
        



<?php get_footer(); ?>
