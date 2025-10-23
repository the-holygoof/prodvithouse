<?php
/**
 * Template Name: Wzmacniające
 * Description: Template for displaying strengthening IV therapy services
 *
 * @package VitHouse
 */


get_header(); ?>

<!--- start of page-kroplowka-wzmacniajaca.php -->


<?php 
get_template_part('template-parts/childpage-title-section', null, [
    'background_image' => 'https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/title-wzmacniajaca.webp',
    'text' => '<p class="leading-relaxed font-normal opacity-85">Jeśli potrzebujesz większych zapasów energii na co dzień, wybierz kroplówki wzmacniające – przeznaczone dla osób przemęczonych, borykających się z obniżoną odpornością organizmu, niepotrafiących się skoncentrować, uprawiających zawodowo lub amatorsko sport, a także prowadzących bardzo intensywny tryb życia.</p>
              <p class="leading-relaxed font-normal opacity-80" style="color: var(--text-2);">Za każdym razem dopasowujemy skład elektrolitów i antyoksydantów do indywidualnych potrzeb naszych pacjentów, co zawsze gwarantuje szybkie i doskonałe efekty kuracji.</p>
              ',
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
















        <!-- Dlaczego warto stosować kroplówki wzmacniające? -->

        <section class="py-40 mx-auto bg-surface">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"><span style="color: var(--accent);">Dlaczego warto</span> stosować kroplówki wzmacniające?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Nawadniające kroplówki wzmacniające to najlepszy sposób na uregulowanie gospodarki wodnej organizmu. Nawadnianie drogą dożylną jest skuteczne, gdyż składniki wlewu są tak skomponowane, aby dostarczyć nie tylko wodę, ale i wiele innych składników odżywczych.
                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Dlaczego należy dbać o gospodarkę wodną organizmu? Woda jest odpowiedzialna za dostarczenie wielu ważnych składników odżywczych do tkanek – pozwala również zachować odpowiednią ilość krwi w naszym organizmie.
                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Co więcej, jest ona podstawowym przenośnikiem ciepła – mało kto wie, ale odwodnienie może być kluczowym powodem nadmiernego przegrzania organizmu. Aby uzupełnić deficyt wody, warto zdecydować się na kroplówki wzmacniające.
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

                                        <!-- SVG icon -->



                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1306_96)">
                                                <path d="M31.643 10.8176C31.643 8.41365 30.5008 5.79724 28.3426 3.25388C26.7422 1.36794 25.1617 0.185913 25.0953 0.132788C24.8629 -0.0398682 24.5375 -0.0398682 24.3051 0.132788C24.2387 0.179272 22.6582 1.3613 21.0578 3.25388C20.6859 3.69216 20.3406 4.13044 20.0352 4.57537C17.7109 2.18474 15.7984 0.763648 15.7188 0.697241C15.4863 0.524585 15.1609 0.524585 14.9285 0.697241C14.8023 0.79021 11.7609 3.0613 8.67305 6.70037C6.85352 8.84529 5.39922 11.0234 4.35664 13.1617C3.03516 15.8711 2.37109 18.5406 2.37109 21.0906C2.37109 28.2094 8.18164 34 15.327 34C22.4723 34 28.2828 28.2094 28.2828 21.0906C28.2828 13.9719 28.1035 18.4078 27.7449 17.0398C30.0559 15.9176 31.6562 13.5469 31.6562 10.8176H31.643ZM26.9348 21.0906C26.9348 27.4722 21.7219 32.6719 15.307 32.6719C8.89219 32.6719 3.68594 27.4789 3.68594 21.0906C3.68594 14.7023 6.9332 10.791 9.65586 7.57693C12.0133 4.79451 14.3906 2.79568 15.3137 2.06521C16.0109 2.62302 17.5582 3.9113 19.2914 5.71755C18.282 7.45076 17.7574 9.18396 17.7574 10.8109C17.7574 14.6293 20.8719 17.7304 24.7035 17.7304C28.5352 17.7304 25.9121 17.6508 26.4832 17.498C26.7887 18.7133 26.9414 19.9219 26.9414 21.084L26.9348 21.0906ZM24.6969 16.409C21.6023 16.409 19.0789 13.8988 19.0789 10.8176C19.0789 7.7363 23.3555 2.62302 24.6969 1.51404C26.0383 2.62302 30.3148 6.49451 30.3148 10.8176C30.3148 15.1406 27.798 16.409 24.6969 16.409Z" fill="#F4F2F7" stroke="#F4F2F7" stroke-width="0.5" />
                                                <path d="M19.2049 21.2434H15.9576V17.8367C15.9576 17.4383 15.6322 17.1129 15.2338 17.1129H15.1607C14.7623 17.1129 14.4369 17.4383 14.4369 17.8367V21.2434H11.1896C10.7912 21.2434 10.4658 21.5688 10.4658 21.9672C10.4658 22.3656 10.7912 22.691 11.1896 22.691H14.4369V26.1309C14.4369 26.5293 14.7623 26.8547 15.1607 26.8547H15.2338C15.6322 26.8547 15.9576 26.5293 15.9576 26.1309V22.691H19.2049C19.6033 22.691 19.9287 22.3656 19.9287 21.9672C19.9287 21.5688 19.6033 21.2434 19.2049 21.2434Z" fill="#F4F2F7" stroke="#F4F2F7" stroke-width="0.5" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1306_96">
                                                    <rect width="34" height="34" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>




                                    </div>
                                    <h3 class="mb-4 text-xl font-extrabold tracking-tight transform-3d z-50" style=" color: var(--surface);">Uzupełnienie witamin i minerałów</h3>

                                </div>
                            </div>
















                            <!-- Feature Card 2 - Pick Up & Delivery (Highlighted) -->
                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="12">
                                <div class="cloth-corner  p-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">


                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1306_84)">
                                                <path d="M20.3255 15.7722C20.3255 15.4693 20.2356 15.1731 20.0673 14.9212C19.899 14.6693 19.6597 14.4729 19.3798 14.357C19.0999 14.241 18.7919 14.2107 18.4947 14.2698C18.1976 14.3289 17.9246 14.4748 17.7104 14.689C17.4962 14.9033 17.3503 15.1762 17.2912 15.4734C17.232 15.7705 17.2624 16.0785 17.3783 16.3585C17.4943 16.6384 17.6906 16.8776 17.9425 17.0459C18.1944 17.2143 18.4906 17.3041 18.7936 17.3041C19.1999 17.3041 19.5895 17.1427 19.8768 16.8554C20.1641 16.5681 20.3255 16.1785 20.3255 15.7722Z" fill="#150D1B" />
                                                <path d="M21.0537 18.7595C20.6867 18.7595 20.328 18.8683 20.0229 19.0722C19.7177 19.2761 19.4799 19.5659 19.3395 19.9049C19.199 20.244 19.1623 20.617 19.2339 20.977C19.3055 21.3369 19.4822 21.6675 19.7417 21.927C20.0012 22.1865 20.3318 22.3632 20.6917 22.4348C21.0517 22.5064 21.4247 22.4697 21.7638 22.3292C22.1028 22.1888 22.3926 21.951 22.5965 21.6458C22.8004 21.3407 22.9092 20.982 22.9092 20.615C22.9092 20.3713 22.8612 20.13 22.7679 19.9049C22.6747 19.6798 22.538 19.4753 22.3657 19.303C22.1934 19.1307 21.9889 18.994 21.7638 18.9008C21.5387 18.8075 21.2974 18.7595 21.0537 18.7595Z" fill="#150D1B" />
                                                <path d="M15.9948 18.0723C15.7543 18.0721 15.5192 18.1433 15.3192 18.2768C15.1191 18.4103 14.9632 18.6001 14.8711 18.8222C14.7789 19.0444 14.7548 19.2888 14.8016 19.5247C14.8484 19.7606 14.9641 19.9772 15.1341 20.1473C15.3041 20.3174 15.5207 20.4333 15.7566 20.4803C15.9924 20.5272 16.2369 20.5032 16.4591 20.4112C16.6813 20.3192 16.8712 20.1634 17.0048 19.9635C17.1384 19.7635 17.2097 19.5284 17.2097 19.288C17.2097 18.9657 17.0817 18.6566 16.8539 18.4286C16.6261 18.2006 16.3171 18.0725 15.9948 18.0723Z" fill="#150D1B" />
                                                <path d="M35.2196 15.7685C35.1149 10.3164 34.3549 6.29004 34.3631 6.28707C34.0327 5.64945 33.4824 5.1532 32.8142 4.89027C28.361 3.1632 23.9821 1.5148 19.7131 0.108357C19.2795 -0.0362817 18.8107 -0.0362817 18.3771 0.108357C14.1088 1.51109 9.73064 3.15652 5.27825 4.88136C4.69144 5.11474 4.19434 5.52917 3.85919 6.06441C3.88368 6.06812 2.94333 9.00347 2.78376 15.4902C2.68505 21.9687 3.49255 23.9125 3.46583 23.9148C3.90224 25.339 4.72013 26.7893 5.89278 28.2632C7.20275 29.9094 8.97286 31.6098 11.1104 33.2819C14.6506 36.0599 17.963 37.7202 18.1018 37.7788C18.3961 37.9248 18.7202 38.0008 19.0488 38.0008C19.3774 38.0008 19.7015 37.9248 19.9958 37.7788C20.1354 37.7202 23.4515 36.0547 26.9895 33.2775C29.1277 31.6046 30.8986 29.9042 32.2093 28.2588C33.4651 26.6802 34.3141 25.1312 34.7245 23.6097C34.7082 23.606 35.302 21.2266 35.2196 15.7685ZM27.299 19.9136C26.9821 19.914 26.6764 19.7969 26.441 19.5848C26.3679 19.518 26.2811 19.4679 26.1866 19.4382C26.0921 19.4084 25.9922 19.3997 25.894 19.4127H25.8858C25.7468 19.4321 25.6172 19.4941 25.5148 19.5902C25.4125 19.6863 25.3425 19.8117 25.3143 19.9493C25.1407 20.7807 24.8039 21.5695 24.3235 22.2701L25.4658 23.7812C25.5368 23.8743 25.6274 23.9507 25.7311 24.005C25.8348 24.0594 25.9492 24.0904 26.0662 24.0959C26.3601 24.1112 26.6434 24.2114 26.8816 24.3843C27.1198 24.5573 27.3028 24.7956 27.4084 25.0703C27.514 25.3451 27.5377 25.6446 27.4767 25.9325C27.4157 26.2205 27.2725 26.4846 27.0645 26.6929C26.8565 26.9012 26.5926 27.0448 26.3047 27.1062C26.0168 27.1676 25.7173 27.1443 25.4424 27.0391C25.1674 26.9338 24.9289 26.7512 24.7556 26.5132C24.5824 26.2753 24.4818 25.9922 24.466 25.6982C24.4608 25.5809 24.4299 25.4661 24.3755 25.362C24.3212 25.2579 24.2446 25.1669 24.1513 25.0956L22.6365 23.9541C21.9371 24.4343 21.1492 24.7706 20.3187 24.9434C20.1811 24.9715 20.0557 25.0416 19.9596 25.1439C19.8635 25.2463 19.8015 25.3759 19.7821 25.5149C19.7675 25.6125 19.7746 25.7121 19.8028 25.8066C19.831 25.9011 19.8797 25.9883 19.9454 26.0619C20.1131 26.2455 20.2239 26.4739 20.2644 26.7192C20.3049 26.9646 20.2733 27.2164 20.1735 27.4442C20.0736 27.672 19.9098 27.8659 19.7019 28.0023C19.4941 28.1388 19.251 28.2121 19.0023 28.2131C18.7537 28.2142 18.51 28.1431 18.301 28.0084C18.0919 27.8737 17.9265 27.6812 17.8247 27.4543C17.7229 27.2274 17.6891 26.9758 17.7275 26.7301C17.7659 26.4844 17.8748 26.2551 18.0409 26.0701C18.1078 25.997 18.1578 25.9101 18.1876 25.8156C18.2173 25.7212 18.226 25.6213 18.2131 25.5231V25.5149C18.1937 25.3759 18.1317 25.2463 18.0356 25.1439C17.9395 25.0416 17.814 24.9715 17.6765 24.9434C16.845 24.7699 16.0561 24.4332 15.3557 23.9526L13.8431 25.0971C13.7497 25.1684 13.6731 25.2593 13.6186 25.3634C13.5641 25.4675 13.533 25.5823 13.5277 25.6997C13.5119 25.9937 13.4113 26.2768 13.238 26.5148C13.0647 26.7528 12.8261 26.9354 12.5512 27.0407C12.2762 27.1459 11.9767 27.1691 11.6888 27.1077C11.4009 27.0462 11.137 26.9025 10.929 26.6942C10.721 26.4858 10.5779 26.2216 10.5169 25.9336C10.456 25.6456 10.4798 25.3461 10.5855 25.0713C10.6912 24.7966 10.8743 24.5583 11.1126 24.3855C11.3509 24.2126 11.6342 24.1125 11.9283 24.0973C12.0451 24.0919 12.1594 24.0609 12.263 24.0065C12.3666 23.9521 12.457 23.8757 12.5279 23.7827L13.6739 22.2656C13.1942 21.566 12.8582 20.7782 12.6853 19.9478C12.6572 19.8102 12.5871 19.6848 12.4848 19.5887C12.3824 19.4926 12.2528 19.4306 12.1138 19.4112C12.0162 19.3966 11.9166 19.4037 11.8221 19.4319C11.7276 19.4601 11.6404 19.5088 11.5668 19.5744C11.3832 19.7422 11.1549 19.853 10.9095 19.8935C10.6641 19.934 10.4123 19.9024 10.1845 19.8026C9.95675 19.7027 9.76286 19.5389 9.62637 19.331C9.48988 19.1231 9.41666 18.8801 9.4156 18.6314C9.41453 18.3827 9.48567 18.1391 9.62037 17.93C9.75507 17.721 9.94755 17.5555 10.1744 17.4537C10.4013 17.352 10.6529 17.3182 10.8986 17.3566C11.1443 17.395 11.3736 17.5038 11.5586 17.67C11.6317 17.7369 11.7186 17.7869 11.8131 17.8167C11.9076 17.8464 12.0074 17.8551 12.1056 17.8422H12.1138C12.2529 17.8227 12.3826 17.7606 12.485 17.6644C12.5873 17.5681 12.6573 17.4425 12.6853 17.3048C12.8545 16.4939 13.1791 15.7235 13.6412 15.036L12.8152 13.9457C12.7363 13.8401 12.635 13.7531 12.5187 13.6912C12.4023 13.6292 12.2737 13.5937 12.142 13.5872C11.8063 13.5722 11.4821 13.4601 11.2088 13.2644C10.9356 13.0688 10.725 12.798 10.6026 12.485C10.4803 12.172 10.4514 11.8302 10.5195 11.501C10.5877 11.1719 10.7499 10.8697 10.9864 10.631C11.223 10.3923 11.5238 10.2274 11.8523 10.1563C12.1808 10.0852 12.5228 10.111 12.8369 10.2305C13.151 10.3501 13.4237 10.5582 13.6218 10.8297C13.8199 11.1012 13.9349 11.4244 13.9529 11.76C13.959 11.8938 13.9944 12.0247 14.0564 12.1434C14.1185 12.2621 14.2058 12.3658 14.3122 12.4472L15.4032 13.2725C16.0914 12.8092 16.8629 12.4838 17.675 12.3144C17.8127 12.2864 17.9383 12.2164 18.0345 12.1141C18.1308 12.0117 18.1929 11.882 18.2124 11.7429C18.2269 11.6453 18.2199 11.5457 18.1916 11.4512C18.1634 11.3567 18.1148 11.2695 18.0491 11.1959C17.8813 11.0123 17.7705 10.7839 17.73 10.5386C17.6895 10.2932 17.7211 10.0414 17.821 9.8136C17.9208 9.58584 18.0846 9.39195 18.2925 9.25546C18.5004 9.11897 18.7434 9.04575 18.9921 9.04469C19.2408 9.04362 19.4844 9.11475 19.6935 9.24945C19.9025 9.38416 20.068 9.57663 20.1698 9.80353C20.2716 10.0304 20.3053 10.282 20.2669 10.5277C20.2285 10.7734 20.1197 11.0027 19.9535 11.1877C19.8867 11.2608 19.8366 11.3477 19.8069 11.4422C19.7771 11.5367 19.7684 11.6365 19.7813 11.7347V11.7429C19.8008 11.882 19.8629 12.0117 19.9592 12.1141C20.0554 12.2164 20.181 12.2864 20.3187 12.3144C21.1311 12.4833 21.9031 12.8079 22.592 13.2703L23.6815 12.4472C23.7877 12.3657 23.8748 12.2619 23.9367 12.1432C23.9986 12.0245 24.0339 11.8937 24.04 11.76C24.058 11.4249 24.1726 11.1023 24.3701 10.831C24.5676 10.5598 24.8395 10.3516 25.1528 10.2316C25.4662 10.1117 25.8076 10.0851 26.1357 10.1551C26.4639 10.2251 26.7647 10.3887 27.0018 10.6261C27.2389 10.8635 27.4021 11.1645 27.4717 11.4927C27.5413 11.821 27.5143 12.1623 27.394 12.4755C27.2736 12.7887 27.0651 13.0603 26.7936 13.2575C26.5222 13.4547 26.1994 13.5689 25.8643 13.5865C25.7309 13.5928 25.6006 13.6282 25.4823 13.6902C25.3641 13.7523 25.2609 13.8395 25.18 13.9457L24.3562 15.0345C24.8196 15.7226 25.145 16.4942 25.3143 17.3063C25.3389 17.423 25.3936 17.5312 25.4731 17.6201C25.5525 17.709 25.6538 17.7756 25.767 17.8131C25.8802 17.8507 26.0012 17.8579 26.118 17.8341C26.2348 17.8103 26.3434 17.7563 26.4328 17.6774C26.587 17.5366 26.7732 17.4354 26.9753 17.3827C27.1774 17.3301 27.3893 17.3275 27.5926 17.3751C27.7959 17.4228 27.9845 17.5193 28.1422 17.6563C28.2998 17.7933 28.4216 17.9667 28.4971 18.1614C28.5726 18.3561 28.5996 18.5663 28.5755 18.7737C28.5515 18.9812 28.4773 19.1796 28.3593 19.3519C28.2412 19.5242 28.083 19.6652 27.8983 19.7625C27.7135 19.8599 27.5078 19.9107 27.299 19.9107V19.9136Z" fill="#150D1B" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1306_84">
                                                    <rect width="38" height="38" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>


                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Wzmocnienie naturalnej odporności</h3>

                                </div>
                            </div>



                            <!-- Feature Card 3 - Support Assistant -->
                            <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                                <div class="cloth-corner  p-7 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                    <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--secondary-3) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/40 inset-shadow-sm inset-ring-1 inset-ring-(--warning-2) " style="background: linear-gradient(135deg, var(--secondary) -20%, var(--warning) 100%);">

                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.6667 6.66667H23.3333V5C23.3333 3.67392 22.8065 2.40215 21.8689 1.46447C20.9312 0.526784 19.6594 0 18.3333 0H11.6667C10.3406 0 9.06881 0.526784 8.13113 1.46447C7.19345 2.40215 6.66667 3.67392 6.66667 5V6.66667H3.33333C2.45009 6.6693 1.60378 7.02134 0.979225 7.64589C0.354674 8.27044 0.00263788 9.11676 0 10V26.6667C0.00263788 27.5499 0.354674 28.3962 0.979225 29.0208C1.60378 29.6453 2.45009 29.9974 3.33333 30H26.6667C27.5499 29.9974 28.3962 29.6453 29.0208 29.0208C29.6453 28.3962 29.9974 27.5499 30 26.6667V10C29.9974 9.11676 29.6453 8.27044 29.0208 7.64589C28.3962 7.02134 27.5499 6.6693 26.6667 6.66667ZM10 5C10 4.55797 10.1756 4.13405 10.4882 3.82149C10.8007 3.50893 11.2246 3.33333 11.6667 3.33333H18.3333C18.7754 3.33333 19.1993 3.50893 19.5118 3.82149C19.8244 4.13405 20 4.55797 20 5V6.66667H10V5ZM20 20H16.6667V23.3333H13.3333V20H10V16.6667H13.3333V13.3333H16.6667V16.6667H20V20Z" fill="#150D1B" />
                                        </svg>



                                    </div>
                                    <h3 class="mb-4 text-xl font-semibold tracking-tight text-white ">Zapobieganie i pomoc w walce z infekcjami</h3>

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




        <!-- Kroplówki witaminowe Warszawa -->

        <section class="py-40 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/wzmacniajaca-pic-1.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">
                    </div>


                    <!-- right Column -->

                    <div>

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl">Kroplówki<span style="color: var(--accent);"> wzmacniające </span> Warszawa</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Nie jest tajemnicą, że witaminy mają bardzo pozytywny wpływ na zdrowie i urodę – wzmacniają odporność, zapobiegają chorobom, a także skutecznie spowalniają procesy starzenia się organizmu człowieka. Często sięgamy po różne suplementy diety i mieszanki multiwitaminowe, niestety nie zawsze jest to skuteczna metoda.

                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            W związku z tym warto rozważyć kroplówki wzmacniające – wlewy witaminowe to jedna z najskuteczniejszych i sprawdzonych metod na skuteczne dostarczenie składników, których potrzebuje nasz organizm. Wlewy dożylne to szybki sposób na uzupełnienie niedoborów.
                        </p>

                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Kroplówki z magnezem to najlepsze rozwiązanie dla osób chcących szybko i skutecznie wyrównać poziom magnezu w organizmie. To dobry sposób na bezpieczne wyregulowanie gospodarki magnezu – znacznie szybszy niż suplementy, dieta czy zmiana nawyków w codziennym życiu.
                        </p>

                    </div>






                </div>
            </div>

            </div>


            </div>
        </section>



        <!-- Korzyści kroplówek wzmacniających -->
        <section class=" mx-auto py-28" style="background: linear-gradient( 180deg, #FFF0E1  0%, rgba(255, 255, 255) 70%);">
            <div class="px-6 mx-auto max-w-7xl">
                <h2 class="text-4xl text-center font-bold mb-24 md:text-5xl text-black/90">Korzyści kroplówek wzmacniających</h2>

                <div class="grid grid-cols-1 content-between justify-between place-content-between gap-12 md:grid-cols-7  ">
                    <!-- Left Column -->

                    <div class="flex flex-col h-full justify-baseline col-span-2 gap-16">


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--danger-2) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--danger)" style="background: linear-gradient(135deg, var(--accent) 10%, var(--danger) 120%);">



                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Indywidualny dobór</h3>
                                <p class="text-white/70">
                                    Dobieramy dawki witamin i minerałów dostosowane dla Twoich potrzeb.
                                </p>
                            </div>
                        </div>


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--danger-2) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--danger)" style="background: linear-gradient(135deg, var(--accent) 10%, var(--danger) 120%);">



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
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/wzmacniajaca-2.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">


                    </div>



                    <!-- right Column -->
                    <div class="flex flex-col h-full justify-baseline col-span-2 gap-16">


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--danger-2) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--danger)" style="background: linear-gradient(135deg, var(--accent) 10%, var(--danger) 120%);">



                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.6803 17C33.6803 26.2 26.2003 33.68 17.0003 33.68C7.80031 33.68 0.320312 26.2 0.320312 17C0.320312 7.80001 7.80031 0.320007 17.0003 0.320007C17.6403 0.320007 18.2403 0.360007 18.8403 0.440007C19.7603 0.560007 20.4003 1.36001 20.3203 2.28001C20.2003 3.20001 19.4003 3.88001 18.4803 3.76001C18.0003 3.72001 17.4803 3.68001 17.0003 3.68001C9.64031 3.68001 3.68031 9.68001 3.68031 17C3.68031 24.32 9.68031 30.32 17.0003 30.32C24.3203 30.32 30.3203 24.32 30.3203 17C30.3203 16.48 30.2803 16 30.2403 15.52C30.1203 14.6 30.8003 13.8 31.7203 13.68C32.6403 13.6 33.4403 14.24 33.5603 15.16C33.6403 15.76 33.6803 16.36 33.6803 17ZM17.8403 13.8C17.5603 13.72 17.2803 13.68 17.0003 13.68C15.1603 13.68 13.6803 15.16 13.6803 17C13.6803 18.84 15.1603 20.32 17.0003 20.32C18.8403 20.32 20.3203 18.84 20.3203 17C20.3203 16.72 20.2803 16.44 20.2003 16.16L22.6803 13.68H27.0003C27.4403 13.68 27.8803 13.52 28.1603 13.2L33.1603 8.20001C33.6403 7.72001 33.8003 7.00001 33.5203 6.40001C33.2803 5.76001 32.6403 5.36001 32.0003 5.36001H28.6803V2.04001C28.6803 1.36001 28.2803 0.760007 27.6403 0.520007C27.0003 0.200007 26.2803 0.360007 25.8403 0.840007L20.8403 5.84001C20.5203 6.16001 20.3603 6.56001 20.3603 7.00001V11.32L17.8403 13.8ZM15.6803 10.48C16.6003 10.28 17.1603 9.40001 17.0003 8.52001C16.8403 7.64001 15.9203 7.00001 15.0003 7.20001C10.3603 8.16001 7.00031 12.28 7.00031 17C7.00031 22.52 11.4803 27 17.0003 27C21.7203 27 25.8403 23.64 26.8003 19C27.0003 18.08 26.4003 17.2 25.4803 17.04C24.6003 16.88 23.6803 17.44 23.5203 18.36C22.8803 21.44 20.1603 23.68 17.0003 23.68C13.3203 23.68 10.3203 20.68 10.3203 17C10.3203 13.84 12.5603 11.08 15.6803 10.48Z" fill="#150D1B" />
                                    </svg>



                                </div>
                                <h3 class="mb-4 text-xl font-semibold" style=" color: var(--text);">Odporność</h3>
                                <p class="text-white/70">
                                    Kroplówki witaminowe to wsparcie przy walce z infekcjami i zapobieganiu im.
                                </p>
                            </div>
                        </div>


                        <div class="card cloth-border flex items-center justify-center p-0.5 transform-3d transform-gpu will-change-transform" tabindex="13">
                            <div class="cloth-corner  px-6 py-10 text-center  bg-card w-full h-full" style="background: linear-gradient(-40deg, var(--surface), var(--card));">
                                <div class="flex  items-center justify-center w-20 h-20 mx-auto mb-4 rounded-full border-(--danger-2) border-t-2 border-l-2 border-r transform-3d border-b shadow-black/20 shadow-xl inset-shadow-black/30 inset-shadow-sm inset-ring-1 inset-ring-(--danger)" style="background: linear-gradient(135deg, var(--accent) 10%, var(--danger) 120%);">



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

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl"><span style="color: var(--accent);">Jakie korzyści</span> płyną ze stosowania kroplówek wzmacniających?</h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Infuzje dożylne zapewniają maksymalny poziom wchłaniania zawartych w preparacie składników. Ten sposób podania umożliwia pominięcie układu pokarmowego, a co za tym idzie – jego podrażnienia lub nasilenia obecnych dolegliwości. Stosując kroplówki wzmacniające, masz pewność dostarczenia do organizmu odpowiedniej dawki witamin i minerałów, a także ich pełnego bezpieczeństwa dla układu pokarmowego.
                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Bez obaw możesz skorzystać z wzmacniających wlewów w trakcie rekonwalescencji po chorobach. Z pakietem VIT-PREMIUM, skomponowaną przez naszych specjalistów „bombą witaminową”, szybciej staniesz na nogi i odzyskasz witalność! Wzmacniający zabieg możemy przeprowadzić w naszej siedzibie w Warszawie lub w Twoim domu, aby zapewnić Ci w pełni komfortowe warunki terapii.
                        </p>

                    </div>


                    <!-- right Column -->
                    <div class="col-span-1">
                        <div id="benefits-wrapper" class="mt-28 ">

                            <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/wzmacniajaca-pic-3.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">







                        </div>
                    </div>

                </div>


            </div>
        </section>




        <!-- Kto może skorzystać z kroplówek wzmacniających?-->

        <section class="py-40 mx-auto">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="grid items-end gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div>
                        <img src="https://vithouse.gameisrigged.pl/wp-content/uploads/2025/09/wzmacniajaca-pic-4.webp" alt="" alt="Kroplówki witaminowe" class="card object-cover w-full h-full cloth-corner">
                    </div>


                    <!-- right Column -->

                    <div>

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl">Kto może skorzystać z kroplówek <span style="color: var(--accent);"> wzmacniających?</span></h2>



                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text);">
                            Kroplówki wzmacniające pomogą w uzupełnieniu witamin i składników mineralnych. Polecane są szczególnie osobom osłabionym, po zabiegach lub przebytych chorobach. Pakiet VIT-PERSONAL pozwoli na dostarczenie do organizmu indywidualnie dobranej dawki witamin i minerałów. Wybierz naszą ofertę, jeśli chcesz skutecznie walczyć z infekcjami lub gdy organizm jest osłabiony w wyniku nadmiernego stresu. Z naszych kroplówek korzystają również osoby uprawiające sport – dzięki indywidualnie dobranym zestawom witamin można szybko zregenerować się po intensywnym treningu.

                        </p>
                        <p class="mb-8 leading-relaxed font-normal" style="color: var(--text-2);">
                            Podawane w domu lub gabinecie kroplówki wzmacniające wybierane są przez pacjentów, którzy borykają się np. z odwodnieniem, utrzymującym się osłabieniem organizmu czy wyczerpaniem na skutek wysiłku fizycznego. Kroplówki wzmacniające są chętnie przyjmowane przez osoby, które pragną zregenerować organizm po długiej chorobie lub infekcji. Wlewy to ładunek witamin poprawiający kondycję, przywracający równowagę oraz dodający energii. Zawierają w sobie m.in. witaminę C, kwas foliowy, magnez, cynk, aminokwasy oraz inne substancje niezbędne do szybkiego powrotu do dawnej sprawności.
                        </p>

                    </div>






                </div>
            </div>

            </div>


            </div>
        </section>



        <!-- Korzyści kroplówek wzmacniających -->
        <section class=" mx-auto py-24" style="background: linear-gradient( 180deg, #FFF0E1  0%, rgba(255, 255, 255) 70%);">
            <div class="px-6 mx-auto max-w-7xl">

                <div class="grid items-center gap-12 md:grid-cols-2">
                    <!-- Left Column -->

                    <div class="col-span-1 flex flex-col gap-4">

                        <h2 class="text-4xl font-bold mb-9 md:text-5xl text-black/90">Kroplówki wzmacniające - kiedy stosować?</h2>



                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Po zabiegach medycznych</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Po przebytych chorobach</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center shrink-0 w-5 h-5 rounded-full" style="background: linear-gradient(135deg, var(--card), var(--bg));">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <span class="font-medium" style=" color: var(--card);">Przy stresie lub wysiłku</span>
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








<!--- end of page-kroplowka-wzmacniajaca.php -->

<?php get_footer(); ?>
