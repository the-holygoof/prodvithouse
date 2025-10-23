<?php
/**
 * Template Name: Dla sportowców
 * Description: Template for displaying sports IV therapy services
 *
 * @package VitHouse
 */


get_header(); ?>



        <!--- start of page-kroplowka-sport.php -->
<?php 
get_template_part('template-parts/childpage-title-section', null, [
    'background_image' => 'https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/sport-title.webp',
    'text' => '<p class="leading-relaxed font-normal opacity-85">Kroplówki dla sportowców to nowoczesna forma regeneracji pozwalająca uzupełnić niedobory witamin oraz minerałów.</p>
              <p class="leading-relaxed font-normal opacity-80" style="color: var(--text-2);">Ze względu na to, że wszystkie składniki są podawane bezpośrednio do krwi, efekty wlewów witaminowych są niemal natychmiastowe.</p>
              <p class="mb-8 leading-relaxed font-normal opacity-85">W związku z tym warto z nich skorzystać, by jak najszybciej wrócić do optymalnej formy i każdego dnia móc sprostać nowym sportowym wyzwaniom.</p>',
    'cena' => '550 zł'
]);
?>



<!--- korzysci kroplowki --->


        <section class="py-4 md:py-24 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
<?php 
get_template_part('template-parts/kroplowki-korzysci');
?>
            </div>
        </section>



        <!-- Dlaczego warto -->

        <section class="py-40 mx-auto bg-surface">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"><span style="color: #AAD9FF;">Dlaczego warto </span> skorzystać z kroplówek dla sportowców?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Kroplówki dla sportowców mogą przyczynić się do poprawy wydolności organizmu oraz jego szybszej regeneracji po treningach. Pomogą także w utrzymaniu odpowiedniego nawodnienia oraz bilansu elektrolitowego.
                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Kroplówki wzmacniające warto zastosować w trakcie przygotowania do intensywnego wysiłku fizycznego.
                            Zawierają zestaw witamin i minerałów, które wspomagają zwiększenie wydolności organizmu. Zapewnią także poprawę koncentracji oraz zastrzyk energii.
                        </p>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Polecamy skorzystanie z naszego pakietu VIT-SPORT, będącego specjalnie skomponowanym koktajlem witaminowym. Preparat doda Ci sił i energii nawet na długotrwały i intensywny trening!
                        </p>

                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class="col-span-1 mt-28 grid grid-cols-2 gap-8">







                            <!-- Feature Card 1 - Research Center (with glare) -->
                            <div class="card cloth-border  relative overflow-clip flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="11">
                                <!-- Glare overlay -->
                                <div class="glare pointer-events-none absolute inset-0 z-50 opacity-0 transition-all duration-150 ease-out" aria-hidden="true"></div>

                                <!-- Your existing gradient background layer -->
                                <div class="absolute left-0 top-0 w-full h-full" style="background: linear-gradient(135deg, #8dffdf 40%, #8a70e1 70%)"></div>

                                <!-- Content -->
                                <div class="cloth-corner p-7 text-center w-full h-full relative z-20 transform-3d " style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto rounded-full mb-4 border-(--bg) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--bg) " style="background: linear-gradient(135deg, #493a5f 15%, var(--bg) 150%);">





                                        <svg width="24" height="30" viewBox="0 0 26 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.6712 17.3538H15.2176V11.3594C15.2176 10.87 14.9012 10.4366 14.4349 10.2877C13.9686 10.1388 13.4596 10.3084 13.1759 10.7073L5.84401 21.0144C5.59995 21.3574 5.56789 21.8081 5.7609 22.1822C5.95391 22.5564 6.33971 22.7914 6.76074 22.7914H11.2144V28.7858C11.2144 29.2752 11.5309 29.7086 11.9971 29.8575C12.11 29.8935 12.2252 29.9109 12.3393 29.9109C12.6965 29.9109 13.0411 29.7402 13.2561 29.4379L20.588 19.1308C20.832 18.7877 20.8641 18.3371 20.6711 17.9629C20.478 17.5888 20.0922 17.3538 19.6712 17.3538ZM13.4643 25.2636V21.6666C13.4643 21.0453 12.9607 20.5416 12.3393 20.5416H8.94156L12.9676 14.8818V18.4788C12.9676 19.1001 13.4713 19.6038 14.0926 19.6038H17.4904L13.4643 25.2636ZM22.2353 4.97517H19.2485V2.83992C19.2485 1.27399 17.9745 0 16.4085 0H9.59152C8.02559 0 6.7516 1.27399 6.7516 2.83992V4.97517H3.76473C2.1988 4.97517 0.924805 6.24916 0.924805 7.81509V34.875C0.924805 35.4963 1.42845 36 2.0498 36H23.9502C24.5716 36 25.0752 35.4963 25.0752 34.875V7.81509C25.0752 6.24916 23.8012 4.97517 22.2353 4.97517ZM22.8252 33.75H3.1748V7.81509C3.1748 7.48983 3.43946 7.22517 3.76473 7.22517H7.8766C8.49795 7.22517 9.0016 6.72145 9.0016 6.10017V2.83992C9.0016 2.51466 9.26626 2.25 9.59152 2.25H16.4085C16.7338 2.25 16.9985 2.51466 16.9985 2.83992V6.10017C16.9985 6.72145 17.5021 7.22517 18.1235 7.22517H22.2353C22.5606 7.22517 22.8252 7.48983 22.8252 7.81509V33.75H22.8252Z" fill="#F4F2F7" />
                                        </svg>




                                    </div>
                                    <h3 class="mb-4 text-xl font-extrabold tracking-tight transform-3d z-50" style=" color: var(--surface);">Poprawa wydolności organizmu</h3>

                                </div>
                            </div>






                            <!-- Feature Card 2 - Pick Up & Delivery (Highlighted) -->
                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="12">
                                <div class="cloth-corner  p-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">


                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="28" height="28" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.57298 16.5086L16.5097 4.57252L14.4116 2.47425C11.1163 -0.821014 5.77385 -0.824881 2.47486 2.47418C-0.815838 5.76502 -0.815838 11.1195 2.47486 14.4104L4.57298 16.5086Z" fill="#150D1B" />
                                            <path d="M31.428 19.4915L19.4912 31.4276L21.5894 33.5259C24.8846 36.8212 30.2272 36.825 33.5261 33.5259C36.8168 30.2351 36.8168 24.8806 33.5261 21.5898L31.428 19.4915Z" fill="#150D1B" />
                                            <path d="M33.5259 2.47474C30.2351 -0.81596 24.8805 -0.81596 21.5897 2.47474L2.47415 21.5893C-0.824423 24.8878 -0.824985 30.227 2.47408 33.5259C5.76435 36.8162 11.1189 36.8172 14.4103 33.526L33.5258 14.4115C36.8245 11.1129 36.825 5.77373 33.5259 2.47474ZM14.2684 18.7472C13.8567 19.1589 13.1891 19.1589 12.7773 18.7472C12.3656 18.3354 12.3656 17.6678 12.7773 17.256C13.1891 16.8443 13.8567 16.8443 14.2684 17.256C14.6802 17.6678 14.6802 18.3354 14.2684 18.7472ZM18.7494 23.2156C18.3376 23.6273 17.67 23.6273 17.2583 23.2156C16.8465 22.8038 16.8465 22.1362 17.2583 21.7244C17.67 21.3126 18.3376 21.3126 18.7494 21.7244C19.1611 22.1361 19.1611 22.8038 18.7494 23.2156ZM17.2192 17.2548C17.631 16.843 18.2986 16.843 18.7104 17.2548C19.1221 17.6665 19.1221 18.3341 18.7104 18.7459C18.2986 19.1576 17.631 19.1576 17.2192 18.7459C16.8075 18.3341 16.8075 17.6666 17.2192 17.2548ZM18.7518 14.2713C18.34 14.683 17.6724 14.683 17.2607 14.2713C16.8489 13.8595 16.8489 13.1919 17.2607 12.7802C17.6724 12.3684 18.34 12.3684 18.7518 12.7802C19.1635 13.1919 19.1635 13.8595 18.7518 14.2713ZM23.2203 18.7397C22.8085 19.1515 22.1409 19.1515 21.7292 18.7397C21.3174 18.328 21.3174 17.6603 21.7292 17.2486C22.1409 16.8368 22.8085 16.8368 23.2203 17.2486C23.632 17.6603 23.632 18.328 23.2203 18.7397Z" fill="#150D1B" />
                                        </svg>



                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Szybsza regeneracja po treningach</h3>

                                </div>
                            </div>



                            <!-- Feature Card 3 - Support Assistant -->
                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                                <div class="cloth-corner  p-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="30" height="30" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                        </svg>



                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Poprawa koncentracji i zastrzyk energii</h3>

                                </div>
                            </div>




                            <!-- Feature Card 4 - Support Assistant -->



                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="14">
                                <div class="cloth-corner  p-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">


                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.5612 12.9949C32.815 12.4125 32.4328 11.4661 32.542 10.5379C32.7786 8.5905 32.1234 6.66127 30.7219 5.27806C29.3205 3.89484 27.4095 3.22144 25.4621 3.45804C24.5339 3.58544 23.5875 3.18504 23.0051 2.43883C21.7856 0.89181 19.9656 0 18 0C16.0344 0 14.2144 0.89181 12.9949 2.43883C12.4125 3.18504 11.4843 3.58544 10.5379 3.45804C8.5723 3.22144 6.66127 3.87664 5.27806 5.27806C3.87664 6.67948 3.22144 8.5905 3.45804 10.5379C3.56724 11.4843 3.18504 12.4307 2.43883 12.9949C0.89181 14.2144 0 16.0344 0 18C0 19.9656 0.89181 21.7856 2.43883 23.0051C3.18504 23.5875 3.56724 24.5339 3.45804 25.4621C3.22144 27.4095 3.87664 29.3387 5.27806 30.7219C6.67948 32.1052 8.5905 32.7786 10.5379 32.542C11.4661 32.4146 12.4307 32.815 12.9949 33.5612C14.2144 35.1082 16.0344 36 18 36C19.9656 36 21.7856 35.1082 23.0051 33.5612C23.5875 32.815 24.5339 32.4146 25.4621 32.542C27.4095 32.7786 29.3387 32.1234 30.7219 30.7219C32.1052 29.3205 32.7786 27.4095 32.542 25.4621C32.4328 24.5157 32.815 23.5693 33.5612 23.0051C35.1082 21.7856 36 19.9656 36 18C36 16.0344 35.1082 14.2144 33.5612 12.9949ZM24.7341 15.6522L17.454 22.9323C17.09 23.2963 16.635 23.4601 16.1618 23.4601C15.6886 23.4601 15.2336 23.2781 14.8696 22.9323L11.2295 19.2922C10.5197 18.5824 10.5197 17.4358 11.2295 16.726C11.9393 16.0162 13.0859 16.0162 13.7958 16.726L16.1436 19.0738L22.1314 13.0859C22.8413 12.3761 23.9879 12.3761 24.6977 13.0859C25.4075 13.7958 25.4075 14.9424 24.6977 15.6522H24.7341Z" fill="#150D1B" />
                                        </svg>



                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Skuteczna i sprawdzona metoda</h3>

                                </div>
                            </div>



                        </div>
                    </div>

                </div>


            </div>
        </section>



        <!-- Kroplówki  Warszawa -->

        <section class="py-40 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/sport-1.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">
                    </div>


                    <!-- right Column -->

                    <div>

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl">Kroplówki<span style="color: #AAD9FF;"> dla sportowców </span> Warszawa</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Centralnym punktem życia każdego aktywnego sportowca są intensywne treningi. Każdy, kto prowadzi taki tryb życia, musi mieć odpowiednią motywację, energię i chęć podejmowania nowych wyzwań. Niestety, nawet najlepsza regeneracja i zbilansowana dieta nie są w stanie zagwarantować naszemu organizmowi odpowiedniej ilości minerałów i witamin.


                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Najlepszym rozwiązaniem będą kroplówki dla sportowców, które bardzo szybko i skutecznie poprawiają funkcjonowanie całego organizmu człowieka.
                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Nasze kroplówki pomogą też wzmocnić naturalną odporność organizmu, stanowiąc wsparcie przy walce z infekcjami i w ich profilaktyce. Warto z nich skorzystać również wtedy, gdy organizm jest osłabiony w wyniku nadmiernego stresu lub zwiększonego wysiłku fizycznego. Nasza oferta obejmuje m.in. specjalne kroplówki dla sportowców, które pomogą nabrać sił i zregenerować się po treningu.
                        </p>

                    </div>




                </div>
            </div>

            </div>


            </div>
        </section>



        <!-- Korzyści kroplówek wzmacniających -->
        <section class=" mx-auto py-28 overflow-x-clip max-w-svw" style="background: linear-gradient( 180deg, #AAD9FF  -50%, #e6f1fa 100%);">
            <div class="px-6 mx-auto max-w-7xl">
                <h2 class="text-4xl text-center font-bold mb-24 md:text-5xl text-black/90">Korzyści kroplówek witaminowych dla sportowców</h2>

                <div class="grid grid-cols-1 content-between justify-between place-content-between gap-12 md:grid-cols-7  ">
                    <!-- Left Column -->

                    <div class="flex flex-col h-full justify-baseline col-span-2 gap-16">


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--secondary-2)" style="background: linear-gradient(135deg, var(--primary) 10%, var(--secondary) 120%);">




                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Indywidualny dobór



                                </h3>
                                <p class="text-white/70">
                                    Dobieramy dawki witamin i minerałów dostosowane dla Twoich potrzeb.
                                </p>
                            </div>
                        </div>


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--secondary-2)" style="background: linear-gradient(135deg, var(--primary) 10%, var(--secondary) 120%);">




                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Wysokiej jakości składniki</h3>
                                <p class="text-white/70">


                                    Stosujemy wyłącznie bezpieczne składniki wysokiej jakości.

                                </p>
                            </div>
                        </div>



                    </div>


                    <!-- middle Column -->
                    <div class="flex flex-col justify-center items-center content-center col-span-3">
                        <div class="absolute w-[454px] h-[455px] max-w-svw max-h-svw aspect-square bg-white rounded-full"></div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/sport-2.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">


                    </div>



                    <!-- right Column -->
                    <div class="flex flex-col h-full justify-baseline col-span-2 gap-16">


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--secondary-2)" style="background: linear-gradient(135deg, var(--primary) 10%, var(--secondary) 120%);">




                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Wydolność

                                </h3>
                                <p class="text-white/70">
                                    Poprawa wydolności organizmu i szybka regeneracja po treningu.
                                </p>
                            </div>
                        </div>


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--secondary-2)" style="background: linear-gradient(135deg, var(--primary) 10%, var(--secondary) 120%);">




                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Wzmocnienie organizmu</h3>
                                <p class="text-white/70">
                                    W przypadku nadmiernego stresu lub zwiększonego wysiłku fizycznego.
                                </p>
                            </div>
                        </div>



                    </div>
                </div>



            </div>
        </section>



        <!-- Jakie korzyści płyną ze stosowania kroplówek wzmacniających?-->

        <section class="py-24 mx-auto bg-surface">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"><span style="color: #AAD9FF;">Kiedy warto </span> sięgnąć po kroplówki dla sportowców?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Po treningu również warto sięgnąć po nasze odżywcze kroplówki dla sportowców. W trakcie wysiłku wraz z potem z organizmu wydalane są elektrolity, czyli mineralne pierwiastki, których odpowiedni poziom jest niezbędny do utrzymania funkcji wielu komórek i narządów.


                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Wlew dla sportowców pozwoli na ich szybkie i skuteczne uzupełnienie, bowiem cały zabieg trwa niespełna godzinę i zapewnia maksymalny stopień wchłaniania składników.

                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Ponadto kroplówki dla sportowców zawierają szereg witamin przyspieszających regenerację zmęczonych mięśni. Dzięki nim powrót do formy po wysiłku będzie szybszy, co umożliwi zwiększenie intensywności treningów.


                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Specjaliści VIT-HOUSE z Warszawy pomogą dobrać najlepszy dla Ciebie zestaw składników!
                        </p>
                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class="mt-28 ">

                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/sport-3.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">




                        </div>
                    </div>

                </div>


            </div>
        </section>



        <!-- Stworzone z myślą o aktywnych osobach-->

        <section class="py-40 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/sport-4.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">
                    </div>


                    <!-- right Column -->

                    <div>

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl">Stworzone z myślą o <span style="color: #AAD9FF;"> aktywnych </span>osobach?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Nasze kroplówki dla sportowców są przygotowywane z myślą o aktywnych osobach, które trenują na poziomie zarówno zawodowym, jak i amatorskim. Razem z nami lepiej przygotujesz się do ważnych zawodów i turniejów.


                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Dzięki naszej ofercie zwiększy się satysfakcja z codziennych treningów. Indywidualnie opracowane kompozycje witamin wzmocnią ochronę mięśni w trakcie intensywnego wysiłku fizycznego. Nasze wlewy są idealną propozycją dla wszystkich osób żyjących na pełnych obrotach.
                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Dożylna suplementacja witamin sprawia, że wchłanianie substancji jest całkowite – w ten sposób omijamy układ trawienny i nie narażamy naszego żołądka na przyjmowanie tabletek.



                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Co więcej, odczuwalność działania kroplówek dla sportowców jest niezwykle szybka – praktycznie od razu czujemy przywrócony wigor i przypływ sił do dalszych treningów. Nawet po intensywnym treningu nie będziemy czuć przytłaczającego zmęczenia, dlatego zyskamy czas i możliwości na aktywniejsze uczestnictwo w życiu rodzinnym i towarzyskim.
                        </p>
                    </div>




                </div>
            </div>

            </div>


            </div>
        </section>



        <!-- Korzyści kroplówek wzmacniających -->
        <section class=" mx-auto py-24" style="background: linear-gradient( 180deg, #AAD9FF  -50%, rgba(255, 255, 255) 150%);">
            <div class="px-6 mx-auto max-w-7xl">

                <div class="grid items-center gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1 flex flex-col gap-4">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl text-black/90">Kiedy warto stosować kroplówki dla sportowców?</h2>



                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Przed treningiem
                            </span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Po treningu
                            </span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Po chorobie</span>
                        </div>

                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class=" ">

                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/wzmacniajaca-pic-5.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">




                        </div>
                    </div>

                </div>



            </div>
        </section>



        <!--- FAQ-->


        <?php 
get_template_part('template-parts/faq');
?>





        <!--- end of page-kroplowka-sport.php -->




<?php get_footer(); ?>
