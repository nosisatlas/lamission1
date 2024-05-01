<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- AOS animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- JIT SUPPORT, for using peer-* below -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!-- Alertify Js CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
    <!-- Title -->
    <title>Lamission1</title>
</head>

<body class="bg-gray-100 overflow-x-hidden">
    <!-- Navbar -->
    <nav
        class="bg-gray-100 md:h-24 text-dark md:fixed md:top-0 md:flex items-center justify-between md:w-full md:shadow-md md:z-10">
        <div class="container mx-auto px-4 md:flex items-center justify-between gap-6">
            <!-- Logo -->
            <div class="flex items-center justify-between">
                <a href="./" class="flex items-center py-5 px-2 text-dark logo-link">
                    <!-- <span class="futura font-bold">Lamission1</span> -->
                    <div class="img-container md:w-80 md:h-80">
                        <img class="navbar-logo" src="imgs/lamission_logo.png" alt="Logo" />
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
                    class="py-2 px-3 block text-sm font-medium text-center text-white rounded-lg sm:w-fit green-bg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">Demander
                    un rappel</a>
            </div>
        </div>
    </nav>

    <!-- Qui somme nous -->
    <div id="qui-sommes-nous" class="overflow-x-hidden md:overflow-x-visible">
        <!-- Home Heading -->
        <div class="my-5 mx-auto md:mt-28 md:flex md:flex-row md:justify-center items-center" data-aos="fade-up">
            <h1
                class="alternategotno1d text-center md:text-center uppercase font-bold text-2xl md:text-4xl flex items-center justify-center md:justify-start md:h-full">
                Votre succès, notre mission.
            </h1>
        </div>
        <!-- Home Container -->
        <div class="home-section px-5 my-5 md:mt-10 md:px-12 mx-auto">
            <div class="my-5 mx-auto md:flex md:flex-row md:justify-center items-center">
                <!-- Image -->
                <img class="mb-5 md:mb-0 w-full md:w-1/2" src="imgs/about_section.png" alt="first image"
                    data-aos="fade-up-right" />
                <!-- Text Content -->
                <div class="akziden text-content w-full md:w-1/2 md:ml-16 md:pl-5" data-aos="fade-up-left">
                    <p class="text-justify">
                        Chez “LA MISSION 1” , nous nous distinguons par notre engagement
                        inébranlable envers l'excellence et l’innovation. Et comprenons
                        que chaque entreprise est unique tout comme les défis auxquels
                        elle est confrontée, et a le potentiel de réaliser de grandes
                        choses.
                    </p>
                    <br />
                    <p class="text-justify">
                        Nous sommes là pour vous guider à chaque étape de votre parcours,
                        que vous cherchiez à élaborer une stratégie gagnante, à
                        perfectionner vos processus ou à développer les compétences de
                        votre équipe, Nous offrons donc un accompagnement sur mesure,
                        conçu pour répondre spécifiquement aux besoins ainsi qu’aux
                        objectifs de chaque client.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div id="nos-services" class="overflow-x-hidden md:overflow-x-visible" data-aos="fade-up">
        <!-- About Heading -->
        <div class="my-5 mx-auto md:mt-28 md:flex md:flex-row md:justify-center items-center overflow-x-hidden">
            <h1
                class="alternategotno1d text-center md:text-center uppercase font-bold text-2xl md:text-4xl flex items-center justify-center md:justify-start md:h-full overflow-x-hidden">
                Explorez. Engagez. <br />
                Accomplissez la mission.
            </h1>
        </div>
        <!-- About Container -->
        <div class="home-section px-5 my-5 md:mt-10 md:px-12 mx-auto">
            <div class="my-5 mx-auto md:flex md:flex-row md:justify-center items-center">
                <!-- Image -->
                <img class="mb-5 md:mb-0 w-full md:w-1/2" src="imgs/services_section.webp" alt="first image"
                    data-aos="fade-up-right" />
                <!-- Text Content -->
                <div class="akziden text-content w-full md:w-1/2 md:ml-16 md:pl-5" data-aos="fade-up-left">
                    <p class="text-justify">
                        Nos services englobent une gamme complète de solutions, allant du
                        consulting stratégique à des séances de mentoring individualisées,
                        en passant par des masterclasses dynamiques et des workshops
                        interactifs. Nous croyons en l'importance de conjuguer
                        connaissances théoriques et pratiques concrètes, nos interventions
                        sont donc à la fois informatives, inspirantes et immédiatement
                        applicables.
                    </p>
                    <br />
                    <p class="text-justify">
                        Chez La Mission 1, nous nous engageons à cultiver des relations
                        authentiques et durables avec nos clients. Nous ne nous contentons
                        pas de résoudre des problèmes, nous investissons dans votre succès
                        à long terme. Notre mission est de vous armer des outils, des
                        compétences et de la confiance nécessaires pour prospérer dans un
                        monde en constante évolution.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div id="clients" class="px-5 py-14 mb-5 md:mt-10 md:px-12 mx-auto overflow-x-hidden md:overflow-x-visible">
        <!-- Clients Heading -->
        <div class="my-5 mx-auto md:mt-28 md:flex md:flex-row md:justify-center items-center" data-aos="fade-up">
            <h1
                class="alternategotno1d text-center md:text-center uppercase font-bold text-2xl md:text-4xl flex items-center justify-center md:justify-start md:h-full">
                Ils nous font confiance
            </h1>
        </div>
        <div
            class="my-5 mx-auto flex flex-col justify-center items-center md:flex-row md:justify-center md:items-center overflow-x-hidden md:overflow-x-visible">
            <!-- Image -->
            <div class="mb-4 w-72 md:mr-2" data-aos="fade-up-right">
                <img src="imgs/clients_berraka_logo.webp" class="h-auto max-w-full rounded-lg" alt="" />
            </div>
            <!-- Image -->
            <div class="mb-4 w-72 md:mr-2" data-aos="fade-down">
                <img src="imgs/clients_ump6_logo.webp" class="h-auto max-w-full rounded-lg" alt="" />
            </div>
            <!-- Image -->
            <div class="mb-4 w-72 md:mr-2" data-aos="fade-down">
                <img src="imgs/clients_creadh_logo.webp" class="h-auto max-w-full rounded-lg" alt="" />
            </div>
            <!-- Image -->
            <div class="mb-4 w-72 md:mr-2" data-aos="fade-down">
                <img src="imgs/clients_amesip_logo.webp" class="h-auto max-w-full rounded-lg" alt="" />
            </div>
            <!-- Image -->
            <div class="mb-4 w-72 md:mr-2" data-aos="fade-down">
                <img src="imgs/clients_ababou_logo.webp" class="h-auto max-w-full rounded-lg" alt="" />
            </div>
            <!-- Image -->
            <div class="mb-4 w-72 md:mr-2" data-aos="fade-down">
                <img src="imgs/clients_verdaterre_logo.webp" class="h-auto max-w-full rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <!-- Contact Heading -->
    <div id="nous-contacter"
        class="bg-white dark:bg-gray-900 overflow-x-hidden md:overflow-x-visible md:overflow-y-hidden">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="alternategotno1d mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-center text-gray-900"
                data-aos="fade-up">
                Ensemble réalisons l’impossible
            </h2>
            <p class="akziden mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"
                data-aos="fade-up">
                Rejoignez-nous dans cette aventure passionnante et laissez-nous vous
                accompagner vers de nouveaux sommets de réussite.
            </p>
            <form action="php/contact.php" class="akziden space-y-8 overflow-x-hidden" data-aos="fade-up">
                <div>
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom
                        complet</label>
                    <input type="text" id="fullname" name="fullname"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Votre nom complet" required />
                </div>

                <div>
                    <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Num de tél
                    </label>
                    <input type="text" id="tel" name="tel"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="+212-000000000" required />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Adresse
                        email
                    </label>
                    <input type="email" id="email" name="email"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="votreadresse@email.com" required />
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" name="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Laissez un message..."></textarea>
                </div>
                <button type="submit" name="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg sm:w-fit green-bg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                    Demander un rappel
                </button>
            </form>
        </div>
    </div>

    <!-- Footer section -->

    <footer class="bg-gray-100 py-4">
        <div
            class="container mx-auto flex flex-col items-center justify-center md:gap-1 md:flex-row md:justify-between">
            <div class="flex items-center mb-4 md:mb-0">
                <img src="imgs/lamission_logo.png" alt="Logo" class="h-72 w-72 md:h-80 md:w-80 mr-2" />
            </div>
            <div
                class="flex flex-col gap-6 md:flex md:flex-row md:justify-center md:items-center md:gap-6 text-dark text-sm">
                <p>Address: Rabat, Maroc</p>
                <p>Tel: +212 (0) 674 064 166</p>
                <p>Email: lamission1.sarl@gmail.com</p>
            </div>
        </div>
    </footer>
    <!-- Scripts section -->
    <script src="js/script.js"></script>
    <!-- AOS animations script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        AOS.init();
    });
    </script>
</body>

</html>