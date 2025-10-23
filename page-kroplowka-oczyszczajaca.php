<?php
/**
 * Template Name: Oczyszczające
 * Description: Template for displaying cleansing IV therapy services
 *
 * @package VitHouse
 */

get_header(); ?>

<!--- start of page-kroplowka-oczyszczajaca.php -->

<?php 
get_template_part('template-parts/childpage-title-section', null, [
    'background_image' => 'https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/oczyszczajaca-title.webp',
    'text' => '<p class="leading-relaxed font-normal opacity-85">Kroplówki oczyszczające wspomagają procesy detoksykacji organizmu. Okazują się bardzo pomocne przy zatruciach preparatami farmaceutycznymi lub innymi substancjami.</p>
              <p class="leading-relaxed font-normal opacity-80" style="color: var(--text-2);">Wspierają oczyszczanie organizmu także przy długotrwałym narażeniu na działanie szkodliwych czynników, na przykład podczas pracy.</p>
              <p class="mb-8 leading-relaxed font-normal opacity-85">Regularne stosowanie kroplówek oczyszczających pomoże poprawić kondycję organizmu i wesprzeć fizjologiczne procesy odpowiedzialne za detoksykację.</p>',
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

        <section class="py-36  mx-auto " style="background-image: linear-gradient(-40deg, var(--surface), #271F33);">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-24 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"><span style="color: #7CE2C6;">Kiedy </span> stosować wlewy oczyszczające?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Duże stężenie substancji szkodliwych może przyczynić się do zaburzenia fizjologicznych funkcji narządów i tkanek. Z tego powodu warto zadbać o regularne oczyszczanie organizmu.



                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Nasze kroplówki oczyszczające to bezpieczny, szybki i skuteczny sposób na pozbycie się nadmiaru toksyn z organizmu! Możesz skorzystać z nich jednorazowo lub cyklicznie.


                        </p>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Specjaliści z naszego ośrodka w Warszawie dobiorą skład i rodzaj terapii do Twoich indywidualnych potrzeb.
                        </p>

                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class="col-span-1  grid grid-cols-2 gap-8">





                            <!-- Feature Card 1 - Research Center (with glare) -->
                            <div class="card cloth-border relative overflow-clip flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="11">
                                <!-- Glare overlay -->
                                <div class="glare pointer-events-none absolute inset-0 z-50 opacity-0 transition-all duration-150 ease-out" aria-hidden="true"></div>

                                <!-- Your existing gradient background layer -->
                                <div class="absolute left-0 top-0 w-full h-full" style="background: linear-gradient(135deg, #8dffdf 40%, #8a70e1 70%)"></div>

                                <!-- Content -->
                                <div class="cloth-corner p-7 text-center w-full h-full relative z-20 transform-3d " style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto rounded-full mb-4 border-(--bg) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--bg) " style="background: linear-gradient(135deg, #493a5f 15%, var(--bg) 150%);">

                                        <!-- SVG icon -->



                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.2502 3.33329C29.375 3.33329 28.6668 4.04231 28.6668 4.91663V6.5055C25.7269 2.59403 21.0644 0.166626 16.0002 0.166626C8.55516 0.166626 2.20473 5.23124 0.558061 12.4823C0.364736 13.3351 0.899744 14.1839 1.75174 14.3772C1.8708 14.4043 1.98829 14.4166 2.10419 14.4166C2.82634 14.4166 3.48026 13.9187 3.6473 13.1843C4.96321 7.38441 10.0441 3.33329 16.0002 3.33329C20.5674 3.33329 24.711 5.812 26.9478 9.66663H23.9168C23.0417 9.66663 22.3335 10.3756 22.3335 11.25C22.3335 12.1243 23.0417 12.8333 23.9168 12.8333H30.2502C31.1253 12.8333 31.8335 12.1243 31.8335 11.25V4.91663C31.8335 4.04231 31.1253 3.33329 30.2502 3.33329Z" fill="#F4F2F7" />
                                            <path d="M1.75033 28.6666C2.62543 28.6666 3.33366 27.9576 3.33366 27.0833V25.46C6.28943 29.4345 10.915 31.8333 16.0003 31.8333C23.4453 31.8333 29.7957 26.7686 31.4424 19.5176C31.6357 18.6648 31.1007 17.816 30.2487 17.6227C29.3876 17.424 28.5463 17.9628 28.353 18.8156C27.0373 24.6155 21.9563 28.6666 16.0003 28.6666C11.4315 28.6666 7.32682 26.248 5.0625 22.3332H8.08366C8.95877 22.3332 9.66699 21.6242 9.66699 20.7499C9.66699 19.8756 8.95877 19.1666 8.08366 19.1666H1.75033C0.875217 19.1666 0.166992 19.8756 0.166992 20.7499V27.0833C0.166992 27.9576 0.875217 28.6666 1.75033 28.6666Z" fill="#F4F2F7" />
                                        </svg>







                                    </div>
                                    <h3 class="mb-4 text-xl font-extrabold tracking-tight transform-3d z-50" style=" color: var(--surface);">Wsparcie procesów detoksykacji</h3>

                                </div>
                            </div>
















                            <!-- Feature Card 2 - Pick Up & Delivery (Highlighted) -->
                            <div class="card cloth-border flex items-center bg-card justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="12">
                                <div class="cloth-corner  p-7 text-center   w-full h-full" style="background: linear-gradient(140deg, var(--card) -10%, var(--surface-dark) 130%);">


                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.7275 22.498C32.0367 15.4709 28.828 8.85248 24.1891 2.90291C23.6248 2.1472 22.8275 1.59808 21.9203 1.34021C19.5413 0.662053 17.0864 0.286144 14.6135 0.221353C14.0501 0.202634 13.4968 0.374457 13.0432 0.70905C12.5895 1.04364 12.2619 1.52145 12.1133 2.06525C11.7233 3.51753 11.4412 4.99668 11.2695 6.49058C11.2339 6.89221 11.2952 7.2965 11.4482 7.66952C11.6013 8.04254 11.8416 8.37338 12.149 8.63425C12.4565 8.89513 12.822 9.07842 13.215 9.16873C13.6079 9.25904 14.0168 9.25373 14.4073 9.15325L18.6576 8.01569L21.0265 17.4976C22.7881 18.7028 24.2608 20.2835 25.3385 22.1259C25.3799 22.197 25.4065 22.2758 25.4168 22.3575C25.4271 22.4391 25.4209 22.522 25.3985 22.6012C25.3761 22.6804 25.338 22.7543 25.2864 22.8185C25.2349 22.8827 25.171 22.9359 25.0985 22.9748C24.9559 23.0563 24.7868 23.0781 24.6283 23.0355C24.4697 22.9928 24.3344 22.8892 24.2519 22.7471C21.0308 17.0825 13.7389 14.5723 8.98808 19.3479C7.94983 18.336 6.68247 17.5898 5.29384 17.173C3.90521 16.7562 2.43643 16.681 1.0125 16.9539C0.925081 16.9726 0.842359 17.0088 0.769318 17.0604C0.696277 17.112 0.634429 17.1778 0.5875 17.2539C0.533289 17.3516 0.503284 17.4609 0.5 17.5726V29.7736C0.500694 29.8742 0.525448 29.9733 0.572199 30.0624C0.618949 30.1516 0.686339 30.2283 0.76875 30.2861C1.80635 31.0049 4.26904 31.5112 6.44418 31.955C7.2704 32.1037 8.08824 32.2956 8.89436 32.53C11.145 33.3707 13.5299 33.7943 15.9324 33.7801C20.1898 33.6855 24.3727 32.6435 28.1771 30.7299C30.3511 29.5322 33.0552 30.1942 34.5712 27.9921C35.1477 27.1986 35.471 26.2496 35.4989 25.2692C35.5268 24.2889 35.2579 23.323 34.7275 22.498ZM22.5578 29.6048C18.2734 30.9088 14.0384 31.1202 10.0007 29.6048C9.92341 29.5764 9.85252 29.5331 9.79207 29.4772C9.73163 29.4214 9.68283 29.3541 9.64849 29.2793C9.61415 29.2046 9.59493 29.1237 9.59196 29.0415C9.58898 28.9592 9.6023 28.8772 9.63116 28.8001C9.66001 28.7231 9.70382 28.6525 9.76007 28.5924C9.81632 28.5323 9.88389 28.484 9.9589 28.4501C10.0339 28.4163 10.1149 28.3976 10.1971 28.3951C10.2794 28.3927 10.3613 28.4066 10.4382 28.4359C13.901 29.7486 17.8575 29.736 22.1953 28.4109C22.3525 28.3666 22.5208 28.3857 22.6641 28.4641C22.8073 28.5425 22.9141 28.674 22.9616 28.8302C23.009 28.9865 22.9933 29.1551 22.9178 29.2999C22.8424 29.4447 22.7131 29.5542 22.5578 29.6048Z" fill="#150D1B" />
                                        </svg>





                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Poprawa ogólnej kondycji organizmu</h3>

                                </div>
                            </div>



                            <!-- Feature Card 3 - Support Assistant -->
                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                                <div class="cloth-corner  p-7 text-center   w-full h-full" style="background: linear-gradient(140deg, var(--card) -10%, var(--surface-dark) 110%);">
                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.4266 24.8507C23.4938 22.3722 22.0426 20.1215 20.1701 18.2489C18.2976 16.3764 16.0468 14.9252 13.5684 13.9925C12.5356 13.606 11.4729 13.3044 10.3911 13.0907L3.0063 20.4762C1.08138 22.4014 0 25.0124 0 27.7348C0 30.4572 1.08138 33.0682 3.0063 34.9934C4.9315 36.9183 7.54246 37.9997 10.2649 37.9997C12.9873 37.9997 15.5983 36.9183 17.5235 34.9934L25.1784 27.3392C24.982 26.4943 24.7309 25.663 24.4266 24.8507Z" fill="#150D1B" />
                                            <path d="M34.9936 3.00661C33.0684 1.08169 30.4575 0.000305176 27.735 0.000305176C25.0126 0.000305176 22.4016 1.08169 20.4764 3.00661L12.7295 10.7528C13.3321 10.922 13.9224 11.1145 14.5004 11.3302C17.3786 12.4031 19.9925 14.0823 22.1648 16.2542C24.337 18.426 26.0167 21.0396 27.0901 23.9177C27.2281 24.2883 27.3563 24.6639 27.4745 25.0444L34.9936 17.5238C36.9186 15.5986 37.9999 12.9876 37.9999 10.2652C37.9999 7.54276 36.9186 4.9318 34.9936 3.00661ZM30.1939 4.54813C30.1672 4.73143 30.1046 4.90768 30.0098 5.06679C29.9149 5.2259 29.7897 5.36477 29.6411 5.47546C29.4926 5.58615 29.3237 5.6665 29.1441 5.7119C28.9646 5.75731 28.7778 5.76688 28.5945 5.74008C27.8019 5.62057 26.9923 5.68968 26.2315 5.94179C25.4706 6.1939 24.78 6.62191 24.2156 7.19106C23.9509 7.45562 23.592 7.6042 23.2178 7.60413C22.8436 7.60406 22.4848 7.45534 22.2202 7.19069C21.9557 6.92604 21.8071 6.56713 21.8071 6.19293C21.8072 5.81872 21.9559 5.45987 22.2206 5.19532C23.0995 4.32085 24.1696 3.66269 25.3465 3.27279C26.5234 2.8829 27.7748 2.77195 29.002 2.94872C29.1853 2.97543 29.3615 3.038 29.5206 3.13284C29.6797 3.22769 29.8186 3.35296 29.9293 3.50148C30.04 3.65001 30.1203 3.8189 30.1657 3.99848C30.2111 4.17807 30.2207 4.36484 30.1939 4.54813Z" fill="#150D1B" />
                                        </svg>






                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Po zatruciu preparatami farmaceutycznymi</h3>

                                </div>
                            </div>









                            <!-- Feature Card 4 - Support Assistant -->



                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="14">
                                <div class="cloth-corner  p-7 text-center   w-full h-full" style="background: linear-gradient(140deg, var(--card) -10%, var(--surface-dark) 110%);">


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
                <div class="grid items-center gap-24 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/oczyszczajaca-1.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">
                    </div>


                    <!-- right Column -->

                    <div>

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl">Kroplówki<span style="color: #7CE2C6;"> oczyszczające </span> Warszawa</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            W organizmie każdego człowieka można wyróżnić złożone procesy biochemiczne, odpowiadające za usuwanie toksyn, a dokładniej mówiąc – wszelkich niepożądanych produktów procesów metabolicznych.



                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Niestety, naturalne mechanizmy mogą być blokowane – ich skuteczność znacznie się zmniejsza, jeśli w naszym codziennym życiu nie brakuje używek (narkotyków, alkoholu, papierosów), przetworzonego i niezdrowego jedzenia, intensywnego stresu.
                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Wlewy oczyszczające są rekomendowane w przypadku, gdy narażenie na wcześniej wymienione czynniki doprowadziło do zaburzenia funkcjonowania naturalnych procesów oczyszczających w organizmie.

                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">Kroplówki oczyszczające powstrzymują przed pogorszeniem samopoczucia, a także – w długofalowej perspektywie – chronią przed rozwinięciem się poważnych chorób.</p>

                    </div>






                </div>
            </div>

            </div>


            </div>
        </section>



        <!-- Korzyści kroplówek wzmacniających -->
        <section class=" mx-auto py-28" style="background: linear-gradient( 180deg, #7CE2C6  -50%, #f0fffb 60%);">
            <div class="px-6 mx-auto max-w-7xl">
                <h2 class="text-4xl text-center font-bold mb-24 md:text-5xl text-black/90">Korzyści kroplówek oczyszczających</h2>

                <div class="grid grid-cols-1 content-between justify-between place-content-between gap-12 md:grid-cols-7  ">
                    <!-- Left Column -->

                    <div class="flex flex-col h-full justify-baseline col-span-2 gap-16">


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--primary-2)" style="background: linear-gradient(135deg, var(--primary) 30%, var(--secondary) 120%);">



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
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--primary-2)" style="background: linear-gradient(115deg, var(--secondary) -60%, var(--primary) 70%);">



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
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/oczyszczajaca-2.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner min-h-[750px]">


                    </div>



                    <!-- right Column -->
                    <div class="flex flex-col h-full justify-baseline col-span-2 gap-16">


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--primary-2)" style="background: linear-gradient(135deg, var(--primary) 50%, var(--secondary) 150%);">



                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Lepsza kondycja

                                </h3>
                                <p class="text-white/70">
                                    Poprawa kondycji i wsparcie naturalnych procesów detoksykacji.
                                </p>
                            </div>
                        </div>


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--primary) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--primary-2)" style="background: linear-gradient(135deg, var(--primary) 30%, var(--secondary) 120%);">



                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Detoksykacja</h3>
                                <p class="text-white/70">
                                    Usunięcie szkodliwych toksyn gromadzących się w organizmie.
                                </p>
                            </div>
                        </div>



                    </div>
                </div>



            </div>
        </section>




        <!-- Szybka detoksykacja -->

        <section class="py-24 mx-auto bg-surface">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"> <span style="color: #7CE2C6;">Szybka detoksykacja </span> za pomocą wlewów oczyszczających</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Kroplówki detoksykujące będą pomocne również dla mieszkańców dużych miast i wszystkich osób żyjących na wysokich obrotach.




                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Smog, dym tytoniowy, nieodpowiednia dieta oparta o przetworzone produkty, a nawet spożywanie wzmacniających suplementów, mogą stanowić źródła toksyn, które negatywnie oddziałują na szereg procesów w organizmie.


                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Nasza oferta obejmuje także oczyszczające kroplówki na kaca, których odpowiednio dobrany skład pozwoli przyspieszyć eliminację alkoholu, a także utrzymać odpowiedni poziom nawodnienia, bardzo ważny dla procesów oczyszczania organizmu.



                        </p>

                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class="mt-28 ">

                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/oczyszczajaca-3.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner min-h-[630px]">







                        </div>
                    </div>

                </div>


            </div>
        </section>




        <!-- jak dzialaja -->

        <section class="py-40 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/oczyszczajaca-4.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner min-h-[630px]">
                    </div>


                    <!-- right Column -->

                    <div>

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"> <span style="color: #7CE2C6;"> Jak działają </span> kroplówki oczyszczające?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Do najważniejszych skutków terapii można zaliczyć: odtrucie organizmu z toksyn i szkodliwych substancji, usprawnienie metabolizmu, wspomaganie odchudzania, przywrócenie równowagi kwasowo-zasadowej, a także odprowadzenie nadmiaru wody.



                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Kroplówki oczyszczające odżywiają organizm – wlewy odżywczo-detoksykujące intensyfikują i usprawniają procesy zachodzące wewnątrz organizmu, wzmacniają pracę narządów wewnętrznych, zabezpieczają pracę mózgu i serca, zapewniają sprężystą skórę oraz piękne paznokcie.

                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Dla Twojej wygody proponujemy przygotowanie indywidualnie dobranej kroplówki oczyszczającej i podanie jej przez naszych specjalistów w zaciszu Twojego domu.

                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">Dojeżdżamy do Pacjentów przez 24 godziny na dobę. Zapraszamy do kontaktu zainteresowane osoby z Warszawy i okolic!</p>
                    </div>






                </div>
            </div>

            </div>


            </div>
        </section>



        <!-- kiedy stosować -->
        <section class=" mx-auto py-24" style="background:  linear-gradient( 180deg, #7CE2C6  -100%, rgb(252, 251, 255) 100%);">
            <div class="px-6 mx-auto max-w-7xl">

                <div class="grid items-center gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1 flex flex-col gap-4">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl text-black/90">Kroplówki oczyszczające - kiedy stosować?</h2>



                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Po zatruciach


                            </span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Po kontrakcie ze szkodliwymi substancjami
                            </span>
                        </div>


                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class=" ">

                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/oczyszczajaca-5.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">







                        </div>
                    </div>

                </div>






            </div>
        </section>





        <!--- FAQ-->
      <?php 
get_template_part('template-parts/faq');
?>




<!--- end of page-kroplowka-oczyszczajaca.php -->

<?php get_footer(); ?>
