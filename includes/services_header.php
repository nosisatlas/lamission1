<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- AOS animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- JIT SUPPORT, for using peer-* below -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!-- Title -->
    <title>Lamission1 - Services</title>
</head>

<body class="bg-gray-100 overflow-x-hidden">
     <!-- Navbar -->
     <nav
     class="bg-gray-100 md:h-24 text-dark md:fixed md:top-0 md:flex items-center justify-between md:w-full md:shadow-md md:z-10">
     <div class="container mx-auto px-4 md:flex items-center justify-between gap-6">
         <!-- Logo -->
         <div class="flex items-center justify-between">
             <a href="../" class="flex items-center py-5 px-2 text-dark logo-link">
                 <div class="img-container md:w-80 md:h-80">
                     <img class="navbar-logo" src="../imgs/lamission_logo.png" alt="Logo" />
                 </div>
             </a>

             <!-- Mobile Menu Button -->
             <div class="md:hidden flex items-center">
                 <div type="button" class="mobile-menu-button">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                         <title>bars-3-bottom-left</title>
                         <g fill="none">
                             <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="currentColor"
                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                     </svg>
                 </div>
             </div>
         </div>
         <!-- Primary Navigation -->
         <div
             class="hidden gtpressuramono md:flex md:flex-row flex-col items-center justify-end md:space-x-1 navigation-menu pb-3 md:pb-0 navigation-menu">
             <a href="#qui-sommes-nous" class="py-2 px-3 block">Qui sommes-nous ?</a>
             <a href="#nos-services" class="py-2 px-3 block">Nos services</a>
             <a href="#clients" class="py-2 px-3 block">Clients</a>
             <a href="#nous-contacter"
                 class="hidden py-2 px-3 block text-sm font-medium text-center text-white rounded-lg sm:w-fit green-bg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 md:block">Demander
                 un rappel</a>
         </div>
     </div>
 </nav>
        <div class="flex justify-center">
            <a href="#nous-contacter"
                class="mb-20 py-2 px-3 block text-sm font-medium text-center text-white w-1/2 md:hidden sm:w-fit green-bg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">Demander
                un rappel</a>
        </div>