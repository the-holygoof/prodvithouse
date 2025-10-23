<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="icon" type="image/png" href="https://vithouse.gameisrigged.pl/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="https://vithouse.gameisrigged.pl/favicon.svg" />
    <link rel="shortcut icon" href="https://vithouse.gameisrigged.pl/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://vithouse.gameisrigged.pl/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Vit-House" />
    <script src="<?php echo get_template_directory_uri(); ?>/dist/squircle-init.js" type="module" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/init-tilt-glare.js" type="module" defer></script>
    <meta name="description" content="Profesjonalne leczenie uzależnień - VitHouse. Kroplówki, detoksykacja, ozonoterapia. Dostępni 24/7">
    <meta property="og:title" content="VitHouse - Profesjonalne leczenie uzależnień">
    <meta property="og:description" content="Skuteczne metody leczenia uzależnień. Kroplówki, detoksykacja, wsparcie 24/7">
    <meta property="og:url" content="https://vithouse.gameisrigged.pl/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="VitHouse - Profesjonalne leczenie uzależnień">
    <meta name="twitter:description" content="Skuteczne metody leczenia uzależnień. Kroplówki, detoksykacja, wsparcie 24/7">

    <?php wp_head(); ?>
    
</head>




<body class="antialiased">






    <div id="above-header" class="h-10 w-screen content-center" style="background: linear-gradient(135deg, var(--secondary), var(--warning));">
        <div class="px-4 sm:px-6 mx-auto max-w-7xl">
            <div class="flex justify-stretch md:justify-between md:content-between content-stretch text-sm">
                <div class="hidden md:flex md:items-center gap-4">
                    <span class="text-black">
                        Jesteśmy dla Ciebie dostępni przez całą dobę
                    </span>
                </div>
                <div class="flex grow justify-between md:items-center md:justify-end gap-2 sm:gap-4">
                    <span class="font-extrabold text-black">Infolinia 24/7 </span> <span class="tracking-tight font-normal opacity-65 text-black">+48 516 516 133 </span> <span class="tracking-tight font-normal opacity-65 text-black">
                        +48 533 732 802</span>
                </div>
            </div>
        </div>
    </div>


    <header>

        <div class="drawer">
    


            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">

                <div class="w-full flex justify-between content-between items-center">
                    <div class="flex-none lg:hidden self-center">
                        <label for="my-drawer-3" aria-label="open sidebar" class=" bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-7 w-7 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="mx-2 flex-none px-2 hover:scale-110 transition-transform duration-250 ease-in-out">
                            <img class="h-9 opacity-95" src="<?php echo get_template_directory_uri(); ?>/assets/vit-house-logo.svg" alt="Vit-House">
                        </div>
                    </a>
                    <div class="hidden grow md:flex justify-center text-sm gap-8 items-center relative">
                        <div class="dropdown dropdown-hover dropdown-center dropdown-bottom cursor-pointer">
                            <a href="<?php echo esc_url( home_url( '/detoksykacje/' ) ); ?>" class="m-1 self-center leading-8 transition-all duration-350 ease-in-out group-hover:bg-white/8">Detoksykacje</a>
                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden">
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/detoksykacje/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Detoksykacje</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/detoksykacje/odtrucie-od-alkoholu' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Odtrucia alkoholowe</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/detoksykacje/odtrucie-od-narkotykow' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Odtrucie od narkotyków</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/detoksykacje/odtrucie-od-lekow' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Odtrucie od leków</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/detoksykacje/wszywka-alkoholowa' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Wszywki alkoholowe</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown dropdown-hover dropdown-bottom  cursor-pointer ">
                            <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/' ) ); ?>" class="m-1 self-center leading-8 transition-all duration-350 ease-in-out group-hover:bg-white/8">Kroplówki</a>
                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden transition-all duration-350 ease-in-out">
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Kroplówki witaminowe</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-dla-sportowcow/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Dla sportowców</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-oczyszczajaca/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Oczyszczające</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-wzmacniajaca/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Wzmacniające</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-na-kaca/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Na kaca</a>
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/ozonoterapia-4/' ) ); ?>" class="m-1 self-center">Ozonoterapia</a>
                        <div class="dropdown dropdown-hover dropdown-center dropdown-bottom cursor-pointer">
                            <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/' ) ); ?>" class="m-1 self-center leading-8 transition-all duration-350 ease-in-out group-hover:bg-white/8">Badania laboratoryjne</a>
                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden">
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Badania laboratoryjne</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/crp' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">CRP</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/szybki-test-na-paciorkowca' ) ); ?>" class="leading-8 cloth-button group-hover:bg-white/8">Szybki test na paciorkowca</a>
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/eliksir-mlodosci/' ) ); ?>" class="m-1 self-center">Eliksir młodości</a>
                        <a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>" class="m-1 self-center">O nas</a>
                    </div>
                    <div class="flex-none z-9999 relative">
                        <a href="https://www.halodoctor.pl/lekarze/iwona-zaborowska-internista-warszawa" target="_blank" class="z-9999 cursor-pointer">
                            <div class="cloth-button-border p-0.5 bg-linear-to-r from-(--primary-2) to-(--secondary-2) hover:scale-110 transition-transform duration-250 ease-in-out">
                                <button class="flex relative cursor-pointer z-50 text-sm items-center px-4 py-2.5 cloth-button text-black" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">Umów wizytę online</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="drawer-side backdrop-blur-md bg-black/40 z-9999">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu min-h-full w-fit justify-center delay-0 font-bold hover:delay-200 transition-all duration-75  bg-surface/8">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/detoksykacje/' ) ); ?>">Detoksykacje</a>
                        <ul class="menu">
                            <li><a href="<?php echo esc_url( home_url( '/detoksykacje/odtrucie-od-alkoholu' ) ); ?>">Odtrucia alkoholowe</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/detoksykacje/odtrucie-od-narkotykow' ) ); ?>">Odtrucie od narkotyków</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/detoksykacje/odtrucie-od-lekow' ) ); ?>">Odtrucie od leków</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/detoksykacje/wszywka-alkoholowa' ) ); ?>">Wszywki alkoholowe</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/' ) ); ?>">Kroplówki</a>
                        <ul class="menu">
                            <li><a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/' ) ); ?>">Kroplówki witaminowe</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-dla-sportowcow/' ) ); ?>">Dla sportowców</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-oczyszczajaca/' ) ); ?>">Oczyszczające</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-wzmacniajaca/' ) ); ?>">Wzmacniające</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/kroplowki-witaminowe/kroplowka-na-kaca/' ) ); ?>">Na kaca</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/ozonoterapia-4/' ) ); ?>">Ozonoterapia</a></li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/' ) ); ?>">Badania laboratoryjne</a>
                        <ul class="menu">
                            <li><a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/crp' ) ); ?>">CRP</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/szybki-test-na-paciorkowca' ) ); ?>">Szybki test na paciorkowca</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/eliksir-mlodosci/' ) ); ?>">Eliksir młodości</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O nas</a></li>
                </ul>
            </div>
        </div>
        
    </header>


    <main id="main" class="site-main">


    
        <!--- end of header.php -->