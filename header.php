<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.svg" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Vit-House" />
    <meta name="description" content="Profesjonalne leczenie uzależnień - VitHouse. Kroplówki, detoksykacja, ozonoterapia. Dostępni 24/7">
    <meta property="og:title" content="VitHouse - Profesjonalne leczenie uzależnień">
    <meta property="og:description" content="Skuteczne metody leczenia uzależnień. Kroplówki, detoksykacja, wsparcie 24/7">
    <meta property="og:url" content="https://vit-house.pl/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="VitHouse - Profesjonalne leczenie uzależnień">
    <meta name="twitter:description" content="Skuteczne metody leczenia uzależnień. Kroplówki, detoksykacja, wsparcie 24/7">

    <?php wp_head(); ?>
    
</head>




<body class="antialiased">






    <div class="above-header">
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
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
            <div class="drawer-content flex flex-col">
                <div class="w-full flex justify-between content-between">
                    <div class="flex-none lg:hidden self-center">
                        <label for="my-drawer-3" aria-label="open sidebar" class=" bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-7 w-7 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    
                    <div class="mx-2 flex-none px-2 hover:scale-110 self-center-safe transition-transform duration-250 ease-in-out">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">    
                            <img class="h-9" src="<?php echo get_template_directory_uri(); ?>/assets/vit-house-logo.svg" alt="Vit-House">
                            </a>
                        </div>
                    
                    <div class="hidden grow lg:flex justify-center-safe mx-12 text-sm  items-center-safe relative">
                        
                        <div class="dropdown dropdown-hover dropdown-center dropdown-bottom menupaddingbg group/dropdown">
                            <div class="menuhoverbg opacity-0 group-hover/dropdown:opacity-100 squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                            
                            <a href="https://vit-house.pl/leczenie-uzaleznien" class="menu-top-link">Leczenie uzależnień</a>
                            <ul class="squircle-mask squircle-3xl gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden delay-500">
                              
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/odtrucia-od-alkoholu" class="leading-8 cloth-small group-hover:bg-white/8">Odtrucia alkoholowe</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/odtrucia-po-narkotykach" class="leading-8 cloth-small group-hover:bg-white/8">Odtrucie od narkotyków</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/lekomania" class="leading-8 cloth-small group-hover:bg-white/8">Odtrucie od leków</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/wszywka-alkoholowa" class="leading-8 cloth-small group-hover:bg-white/8">Wszywki alkoholowe</a>
                                </li>
                            </ul>
                        </div>



                        <div class="dropdown dropdown-hover dropdown-center dropdown-bottom  menupaddingbg group/dropdown">
                            <div class="menuhoverbg opacity-0 group-hover/dropdown:opacity-100 squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>                        
                            <a href="https://vit-house.pl/kroplowki-witaminowe" class="menu-top-link">Kroplówki</a>
                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden transition-all duration-350 ease-in-out">
                                
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/witaminoterapia/dla-sportowcow" class="leading-8 cloth-small group-hover:bg-white/8">Dla sportowców</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/witaminoterapia/oczyszczajaca" class="leading-8 cloth-small group-hover:bg-white/8">Oczyszczające</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/witaminoterapia/wzmacniajaca/" class="leading-8 cloth-small group-hover:bg-white/8">Wzmacniające</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/witaminoterapia/na-kaca" class="leading-8 cloth-small group-hover:bg-white/8">Na kaca</a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="menupaddingbg group">
                            <div class="menuhoverbg opacity-0 group-hover:opacity-100 squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>                        
                            <a href="https://vit-house.pl/ozonoterapia" class="menu-top-link">Ozonoterapia</a>
                        </div>
                        
                        
                        
                        
                        <div class="dropdown dropdown-hover dropdown-center dropdown-bottom menupaddingbg group">
                            <div class="menuhoverbg opacity-0 group-hover:opacity-100 squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                            <a href="https://vit-house.pl/badania-laboratoryjne" class="menu-top-link">Badania laboratoryjne</a>

                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden">

                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/badania-laboratoryjne/crp" class="leading-8 cloth-small transition-all duration-200  py-3 px-4 hover:bg-white/18 ease-in">CRP</a>
                                </li>
                                <li class="py-2 pl-4 pr-4 hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="https://vit-house.pl/badania-laboratoryjne/szybki-test-na-paciorkowca" class="leading-8 cloth-small transition-all duration-200  py-3 px-4 hover:bg-white/18 ease-in">Szybki test na paciorkowca</a>
                                </li>
                            </ul>
                        </div>
                        



                        <div class="menupaddingbg group">
                            <div class="menuhoverbg opacity-0 group-hover:opacity-100 squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                            <a href="https://vit-house.pl/eliksir-mlodosci" class="menu-top-link">Eliksir młodości</a>
                        </div>
                        <div class="menupaddingbg group">
                            <div class="menuhoverbg opacity-0 group-hover:opacity-100 squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>                        
                            <a href="https://vit-house.pl/o-nas" class="menu-top-link">O nas</a>
                        </div>

                    </div>
                    <div class="flex-none z-9999 relative">
                        <a href="https://www.halodoctor.pl/lekarze/iwona-zaborowska-internista-warszawa" target="_blank" class="z-9999 cursor-pointer">
                        <button class="button-nav-header" href="https://vit-house.pl/kroplowki-witaminowe"><div class="button-inner"> Umów wizytę online   </div></button>    
                        
                        </a>
                    </div>
                </div>
            </div>
            <div class="drawer-side backdrop-blur-md bg-black/40 z-9999">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu min-h-full w-fit justify-center delay-0 font-bold hover:delay-200 transition-all duration-75  bg-surface/8">
                    <li>
                        <a href="https://vit-house.pl/leczenie-uzaleznien">Detoksykacje</a>
                        <ul class="menu">
                            <li><a href="https://vit-house.pl/odtrucia-po-alkoholu">Odtrucia alkoholowe</a></li>
                            <li><a href="https://vit-house.pl/odtrucia-po-narkotykach">Odtrucie od narkotyków</a></li>
                            <li><a href="https://vit-house.pl/lekomania">Odtrucie od leków</a></li>
                            <li><a href="https://vit-house.pl/wszywka-alkoholowa">Wszywki alkoholowe</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://vit-house.pl/witaminoterapia">Witaminoterapia</a>
                        <ul class="menu">
                            <li><a href="https://vit-house.pl/witaminoterapia/dla-sportowcow">Dla sportowców</a></li>
                            <li><a href="https://vit-house.pl/witaminoterapia/oczyszczajaca">Oczyszczające</a></li>
                            <li><a href="https://vit-house.pl/witaminoterapia/wzmacniajaca">Wzmacniające</a></li>
                            <li><a href="https://vit-house.pl/witaminoterapia/na-kaca">Na kaca</a></li>
                        </ul>
                    </li>
                    <li><a href="https://vit-house.pl/ozonoterapia">Ozonoterapia</a></li>
                    <li>
                        <a href="https://vit-house.pl/badania-laboratoryjne">Badania laboratoryjne</a>
                        <ul class="menu">
                            <li><a href="https://vit-house.pl/badania-laboratoryjne/crp">CRP</a></li>
                            <li><a href="https://vit-house.pl/badania-laboratoryjne/szybki-test-na-paciorkowca">Szybki test na paciorkowca</a></li>
                        </ul>
                    </li>
                    <li><a href="https://vit-house.pl/eliksir-mlodosci">Eliksir młodości</a></li>
                    <li><a href="https://vit-house.pl/o-nas">O nas</a></li>
                </ul>
            </div>
        </div>
        
    </header>

    
 
<!--                     
                <div class="hidden grow-3 md:flex justify-center-safe text-sm  items-center-safe  gap-2">
                        
                    
                    <div class="dropdown dropdown-hover dropdown-center dropdown-bottom cursor-pointer group/dropdown px-4 py-4">
                            <div class="menuhoverbg squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>    
                        
                            <a href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>" class="menu-top-link ">Leczenie uzależnień</a>
                            
                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8  backdrop-blur-2xl lg:min-w-max backface-hidden ">
                              
                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/odtrucia-od-alkoholu' ) ); ?>" class="leading-8 cloth-small group-hover:bg-white/8">Odtrucia alkoholowe</a>
                                </li>
                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/odtrucia-po-narkotykach' ) ); ?>" class="leading-8 cloth-small group-hover:bg-white/8">Odtrucie od narkotyków</a>
                                </li>
                                <li class=" hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/lekomania' ) ); ?>" class="leading-8 cloth-small group-hover:bg-white/8">Odtrucie od leków</a>
                                </li>
                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/wszywka-alkoholowa' ) ); ?>" class="leading-8 cloth-small group-hover:bg-white/8">Wszywki alkoholowe</a>
                                </li>
                            </ul>
                        </div>



                    <div class="dropdown dropdown-hover dropdown-center dropdown-bottom cursor-pointer group/dropdown px-4 py-4">
                        <div class="menuhoverbg squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                        <a href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>" class="menu-top-link">Kroplówki</a>
                        
                        <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden transition-all duration-350 ease-in-out">
                                <li class=" hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/witaminoterapia/dla-sportowcow' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">Dla sportowców</a>
                                </li>
                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/witaminoterapia/oczyszczajaca' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">Oczyszczające</a>
                                </li>
                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/witaminoterapia/wzmacniajaca' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">Wzmacniające</a>
                                </li>
                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/witaminoterapia/na-kaca' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">Na kaca</a>
                                </li>
                        </ul>
                    </div>
                    
                        <div class="menuhoverbg squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                        <a href="<?php echo esc_url( home_url( '/ozonoterapia' ) ); ?>" class="menu-top-link">Ozonoterapia</a>
                        
                            
                        <a href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>" class="menu-top-link group-hover/dropdown:bg-white/18 group-hover/dropdown:duration-75">Badania laboratoryjne</a>
                            
                            <ul class="cloth-corner gap-0 dropdown-content bg-white/8 menu menu-vertical backdrop-blur-2xl lg:min-w-max backface-hidden">

                                <li class="hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/crp' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">CRP</a>
                                </li>
                                <li class=" hover:scale-110 transition-all duration-350 ease-in-out group">
                                    <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/szybki-test-na-paciorkowca' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">Szybki test na paciorkowca</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menuhoverbg squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                        <a href="<?php echo esc_url( home_url( '/eliksir-mlodosci' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">Eliksir młodości</a>
                        <div class="menuhoverbg squircle squircle-3xl squircle-smooth-md squircle-white/10"></div>
                        <a href="<?php echo esc_url( home_url( '/o-nas' ) ); ?>" class="menu-top-link hover:bg-white/18 hover:duration-75">O nas</a>
                    </div>
                </div>

                    <div class="flex-none z-9999 relative">
                        <a href="https://www.halodoctor.pl/lekarze/iwona-zaborowska-internista-warszawa" target="_blank" class="z-9999 cursor-pointer">
                        <button class="button-nav-header" href="<?php echo esc_url( home_url( '/kroplowki-witaminowe' ) ); ?>"><div class="button-inner"> Umów wizytę online   </div></button>    
                        
                        </a>
                    </div>
             -->
            
            <div class="drawer-side backdrop-blur-md bg-black/40 z-9999">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu min-h-full w-fit justify-center delay-0 font-bold hover:delay-200 transition-all duration-75  bg-surface/8">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/leczenie-uzaleznien' ) ); ?>">Detoksykacje</a>
                        <ul class="menu">
                            <li><a href="<?php echo esc_url( home_url( '/odtrucia-po-alkoholu' ) ); ?>">Odtrucia alkoholowe</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/odtrucia-po-narkotykach' ) ); ?>">Odtrucie od narkotyków</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/lekomania' ) ); ?>">Odtrucie od leków</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/wszywka-alkoholowa' ) ); ?>">Wszywki alkoholowe</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/witaminoterapia' ) ); ?>">Witaminoterapia</a>
                        <ul class="menu">
                            <li><a href="<?php echo esc_url( home_url( '/witaminoterapia/dla-sportowcow' ) ); ?>">Dla sportowców</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/witaminoterapia/oczyszczajaca' ) ); ?>">Oczyszczające</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/witaminoterapia/wzmacniajaca' ) ); ?>">Wzmacniające</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/witaminoterapia/na-kaca' ) ); ?>">Na kaca</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/ozonoterapia' ) ); ?>">Ozonoterapia</a></li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/badania-laboratoryjne' ) ); ?>">Badania laboratoryjne</a>
                        <ul class="menu">
                            <li><a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/crp' ) ); ?>">CRP</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/badania-laboratoryjne/szybki-test-na-paciorkowca' ) ); ?>">Szybki test na paciorkowca</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/eliksir-mlodosci' ) ); ?>">Eliksir młodości</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/o-nas' ) ); ?>">O nas</a></li>
                </ul>
            </div>
        </div>
        
    </header>


    <main id="main" class="site-main">