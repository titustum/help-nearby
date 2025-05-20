<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Nearby - Your Emergency Response Network</title>
    <meta name="description"
        content="Help Nearby is your go-to platform for immediate emergency assistance. Connect with local services quickly and efficiently.">
    <meta name="keywords"
        content="emergency services, help nearby, emergency response, safety tips, medical assistance, fire department, police services">
    <meta name="author" content="Help Nearby Team">
    <meta name="theme-color" content="#2563eb">

    <link rel="icon" href="images/HelpNearby - logo.svg" type="image/svg+xml">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- animate.css latest -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- animate on scroll css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-gray-50 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 border-b-2 border-red-600">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-3">

                <!-- Logo Section -->
                <a href="index.php" class="flex items-center">
                    <div class="flex items-center space-x-2">
                        <div class="bg-red-600 text-white p-2 rounded-lg shadow-md">
                            <i class="fas fa-heartbeat text-2xl"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-extrabold text-2xl text-gray-900 leading-none">
                                Help<span class="text-red-600">Nearby</span>
                            </span>
                            <span class="text-xs text-gray-500 mt-0.5">Emergency Services Network</span>
                        </div>
                    </div>
                </a>

                <!-- Search Field -->
                <div class="hidden lg:flex flex-1 justify-center px-6">
                    <form method="get" class="w-full max-w-md flex items-center space-x-2">
                        <input type="text" name="q" placeholder="Search services..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition" />
                        <button type="submit"
                            class="px-4 py-2 flex items-center bg-red-600 hover:bg-red-700 text-white font-semibold rounded-full shadow transition-all duration-200">
                            <i class="fas fa-search mr-2"></i> Search
                        </button>
                    </form>
                </div>

                <!-- Emergency Button & Login -->
                <div class="items-center space-x-4 hidden lg:flex">

                    <a href="services.php"
                        class="text-gray-700 hover:text-red-600 px-2 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                        <i class="fas fa-map-marker-alt mr-2"></i> Find Services
                    </a>

                    <a href="about.php"
                        class="text-gray-700 hover:text-red-600 px-2 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                        <i class="fas fa-info-circle mr-2"></i> About Us
                    </a>
                    <a href="contact.php"
                        class="text-gray-700 hover:text-red-600 px-2 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                        <i class="fas fa-phone mr-2"></i> Contact
                    </a>

                    <!-- Login Link -->
                    <a href="login.php" class="text-sm text-gray-700 hover:text-red-600 font-semibold transition">
                        <i class="fas fa-user mr-2"></i> Login
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex lg:hidden">
                    <button type="button" aria-label="Open mobile menu" id="mobile-menu-button"
                        class="text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-red-500 rounded-md p-2">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>


        <div id="mobile-menu"
            class="fixed inset-y-0 left-0 w-64 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden z-40">
            <div class="px-4 pt-2 pb-4 space-y-1 mt-4">

                <a href="/" class="flex items-center space-x-2">
                    <div class="bg-red-600 text-white p-2 rounded-lg shadow-md">
                        <i class="fas fa-heartbeat text-2xl"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-extrabold text-2xl text-gray-900 leading-none">Help<span
                                class="text-red-600">Nearby</span></span>
                        <span class="text-xs text-gray-500 mt-0.5">Emergency Services Network</span>
                    </div>
                </a>

                <!-- Search Field -->
                <div class="block mt-12">
                    <form method="get" class="w-full grid gap-2 space-x-2">
                        <input type="text" name="q" placeholder="Search services..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition" />
                        <button type="submit"
                            class="px-4 py-2 flex justify-center items-center bg-red-600 hover:bg-red-700 text-white font-semibold rounded-full shadow transition-all duration-200">
                            <i class="fas fa-search mr-2"></i> Search
                        </button>
                    </form>
                </div>

                <a href="index.php"
                    class="block text-gray-700 hover:bg-red-50 px-3 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                    <i class="fas fa-home mr-3 text-red-600"></i> Home
                </a>
                <a href="services.php"
                    class="block text-gray-700 hover:bg-red-50 px-3 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                    <i class="fas fa-map-marker-alt mr-3 text-red-600"></i> Find Services
                </a>
                <a href="about.php"
                    class="block text-gray-700 hover:bg-red-50 px-3 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                    <i class="fas fa-info-circle mr-3 text-red-600"></i> About Us
                </a>
                <a href="contact.php"
                    class="block text-gray-700 hover:bg-red-50 px-3 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                    <i class="fas fa-phone mr-3 text-red-600"></i> Contact
                </a>
                <a href="login.php"
                    class="block text-gray-700 hover:bg-red-50 px-3 py-2 rounded-md text-base font-medium flex items-center transition-colors duration-200">
                    <i class="fas fa-user mr-3 text-red-600"></i> Login
                </a>
                <div class="border-t border-gray-200 pt-3 mt-3">
                    <a href="tel:999" aria-label="Call Emergency Services in Kenya" class="group relative">
                        <div
                            class="animate-ping absolute -inset-1 bg-red-400 rounded-full opacity-60 group-hover:opacity-75">
                        </div>
                        <button
                            class="relative bg-red-700 hover:bg-red-800 text-white font-bold py-2.5 px-5 md:px-7 rounded-full flex items-center space-x-2 transition-all duration-200 shadow-lg hover:shadow-xl">
                            <i class="fas fa-exclamation-triangle text-lg"></i>
                            <span class="text-base">Call (999)</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div id="mobile-menu-overlay"
            class="fixed inset-0 bg-black/50 z-30 hidden transition-opacity duration-300 ease-in-out md:hidden">
        </div>
    </nav>