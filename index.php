    <?php include('partials/header.php') ?>


    <?php
    $categories = [
        ['name' => 'Medical', 'icon' => 'fas fa-ambulance', 'desc' => 'Life-threatening'],
        ['name' => 'Fire', 'icon' => 'fas fa-fire-extinguisher', 'desc' => 'Fire & smoke'],
        ['name' => 'Police', 'icon' => 'fas fa-shield-alt', 'desc' => 'Crime & safety'],
        ['name' => 'Accident', 'icon' => 'fas fa-car-crash', 'desc' => 'Vehicle & collision'],
        ['name' => 'Disaster', 'icon' => 'fas fa-cloud-showers-heavy', 'desc' => 'Natural events'],
        ['name' => 'Other', 'icon' => 'fas fa-question-circle', 'desc' => 'All other cases'],
    ];
    ?>

    <!-- Hero Section with Emergency Form -->
    <header
        data-aos="fade-up"
        class="relative py-16 md:py-20 text-center text-white bg-gradient-to-br from-blue-950 to-indigo-950 overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 20px 20px;"></div>

        <div class="container relative mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <span
                class="inline-block mb-4 bg-red-700 text-white text-sm lg:text-base font-extrabold py-1.5 px-4 rounded-full shadow-md animate-fade-in-down">EMERGENCY
                RESPONSE</span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-5 leading-tight animate-fade-in-left">Get
                Emergency Help <span class="text-red-400">When Seconds Count</span></h1>
            <p class="text-lg sm:text-xl md:text-2xl mb-12 max-w-4xl mx-auto opacity-90 animate-fade-in-right">Fast,
                reliable connection to nearby emergency
                services. <b>Help is just a tap away.</b></p>

            <form id="emergency-form" action="services.php" method="GET" class="bg-white rounded-2xl shadow-2xl p-6 md:p-10 mx-auto max-w-5xl border-l-8 border-red-600 transition-transform duration-300 hover:scale-[1.01] animate-fade-in-up">

                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-4">What type of emergency assistance do you need?</h2>
                <p class="text-gray-700 mb-8 max-w-2xl mx-auto">
                    Select the service that best matches your situation for <b>immediate help</b> from our network in Kenya.
                </p>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6 mb-10">
                    <?php foreach ($categories as $category): ?>
                        <label class="cursor-pointer emergency-button block text-center bg-gray-50 peer-checked:bg-white text-gray-700 rounded-xl p-4 sm:p-5 border-2 border-gray-200 peer-checked:border-red-500 transition-all duration-200 hover:shadow-md transform hover:-translate-y-1 peer-checked:scale-[1.02] peer-checked:shadow-xl">
                            <input type="radio" name="category" value="<?= htmlspecialchars($category['name']) ?>" class="sr-only peer" required>
                            <div class="bg-gray-100 p-3 sm:p-4 rounded-full mb-3 transition-colors peer-checked:bg-red-100">
                                <i class="<?= $category['icon'] ?> text-3xl sm:text-4xl peer-checked:text-red-600"></i>
                            </div>
                            <span class="font-semibold text-base sm:text-lg peer-checked:text-red-700 peer-checked:font-bold">
                                <?= htmlspecialchars($category['name']) ?>
                            </span>
                            <div class="text-xs text-gray-500 mt-1 peer-checked:text-red-600">
                                <?= htmlspecialchars($category['desc']) ?>
                            </div>
                        </label>
                    <?php endforeach; ?>
                </div>

                <button type="submit"
                    class="w-full group bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition-all duration-200 flex justify-center items-center border border-red-700 shadow-md hover:shadow-lg disabled:opacity-50">
                    <span class="text-base sm:text-lg">Find Emergency Help Now</span>
                    <div class="ml-3 w-9 h-9 flex items-center justify-center bg-red-700 group-hover:bg-red-800 rounded-full transition-colors">
                        <i class="fas fa-arrow-right text-white text-lg"></i>
                    </div>
                </button>
            </form>


            <div class="mt-8 text-center">
                <p class="text-gray-100 text-sm sm:text-base">For life-threatening emergencies, <b>call</b> <a
                        href="tel:999" class="font-extrabold text-red-700 hover:underline">999</a><b>
                        immediately</b>.
                </p>
            </div>

            <div class="mt-12 flex flex-wrap items-center justify-center space-x-4 sm:space-x-8 text-sm sm:text-base">
                <a href="#"
                    class="text-white/90 hover:text-white flex items-center transition-colors duration-200 py-1"><i
                        class="fas fa-info-circle mr-2"></i> How It Works</a>
                <a href="#"
                    class="text-white/90 hover:text-white flex items-center transition-colors duration-200 py-1"><i
                        class="fas fa-phone-volume mr-2"></i> Emergency Hotlines</a>
                <a href="#"
                    class="text-white/90 hover:text-white flex items-center transition-colors duration-200 py-1"><i
                        class="fas fa-shield-alt mr-2"></i> Safety Tips</a>
            </div>
        </div>
    </header>



    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50 relative overflow-hidden">
        <div class="absolute top-0 left-1/4 w-32 h-32 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"
            aria-hidden="true"></div>
        <div class="absolute bottom-1/4 right-1/4 w-48 h-48 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"
            aria-hidden="true"></div>
        <div class="absolute top-1/2 left-0 w-40 h-40 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"
            aria-hidden="true"></div>


        <div class="container mx-auto px-6 relative z-10">
            <div data-aos="fade-up" class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-blue-100 text-blue-700 font-semibold rounded-full text-sm uppercase tracking-wider mb-4 shadow-sm">
                    Our Seamless Process
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-5 leading-tight">
                    Getting Help is Simple
                </h2>
                <p class="text-lg md:text-xl text-gray-700 max-w-4xl mx-auto">
                    Our intuitive platform connects you to the nearest emergency services in just a few clicks,
                    ensuring rapid response when every second counts.
                </p>
            </div>

            <div class="relative mt-12">
                <div class="hidden lg:block absolute top-[calc(50%-2px)] left-0 right-0 h-1 bg-blue-300 transform -translate-y-1/2"
                    aria-hidden="true"></div>
                <div class="hidden md:block lg:hidden absolute top-0 left-1/2 w-1 h-full bg-blue-300 transform -translate-x-1/2"
                    aria-hidden="true"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 xl:gap-12">
                    <div data-aos="fade-up"
                        class="group bg-white rounded-2xl shadow-xl p-8 relative z-10 border border-gray-100
                            hover:shadow-2xl hover:border-blue-300 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex justify-center mb-6">
                            <div
                                class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center
                                    text-3xl font-bold shadow-lg ring-4 ring-blue-200 group-hover:bg-blue-700 transition-all duration-300">
                                1
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center">Select Type</h3>
                        <p class="text-gray-600 text-center text-base leading-relaxed">
                            Choose the specific emergency assistance you need from our comprehensive categories.
                        </p>
                        <div class="mt-8 flex justify-center">
                            <svg viewBox="0 0 100 70"
                                class="w-full max-w-[150px] h-auto rounded-lg shadow-md border border-gray-200">
                                <rect x="5" y="5" width="90" height="60" rx="5" fill="#f0f4f8" stroke="#cbd5e0"
                                    stroke-width="1.5" />
                                <rect x="15" y="15" width="70" height="12" rx="3" fill="#ef4444" />
                                <rect x="15" y="32" width="40" height="12" rx="3" fill="#60a5fa" />
                                <rect x="60" y="32" width="25" height="12" rx="3" fill="#e2e8f0" />
                                <rect x="15" y="49" width="30" height="12" rx="3" fill="#22c55e" />
                                <rect x="50" y="49" width="35" height="12" rx="3" fill="#e2e8f0" />
                            </svg>
                        </div>
                    </div>

                    <div data-aos="fade-up"
                        class="group bg-white rounded-2xl shadow-xl p-8 relative z-10 border border-gray-100
                            hover:shadow-2xl hover:border-blue-300 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex justify-center mb-6">
                            <div
                                class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center
                                    text-3xl font-bold shadow-lg ring-4 ring-blue-200 group-hover:bg-blue-700 transition-all duration-300">
                                2
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center">Pin Location</h3>
                        <p class="text-gray-600 text-center text-base leading-relaxed">
                            Automatically share your precise location or manually input your address for accuracy.
                        </p>
                        <div class="mt-8 flex justify-center">
                            <svg viewBox="0 0 100 70"
                                class="w-full max-w-[150px] h-auto rounded-lg shadow-md border border-gray-200">
                                <rect x="5" y="5" width="90" height="60" rx="5" fill="#f0f4f8" stroke="#cbd5e0"
                                    stroke-width="1.5" />
                                <circle cx="50" cy="35" r="25" fill="#e0f2f7" stroke="#90cdf4" stroke-width="1.5" />
                                <path
                                    d="M50,20 C42,20 35,27 35,35 C35,45 50,60 50,60 C50,60 65,45 65,35 C65,27 58,20 50,20 Z"
                                    fill="#ef4444" />
                                <circle cx="50" cy="35" r="8" fill="#fff" />
                                <line x1="50" y1="0" x2="50" y2="15" stroke="#ef4444" stroke-width="2"
                                    stroke-dasharray="3,3" />
                                <line x1="50" y1="55" x2="50" y2="70" stroke="#ef4444" stroke-width="2"
                                    stroke-dasharray="3,3" />
                                <line x1="25" y1="35" x2="35" y2="35" stroke="#ef4444" stroke-width="2"
                                    stroke-dasharray="3,3" />
                                <line x1="65" y1="35" x2="75" y2="35" stroke="#ef4444" stroke-width="2"
                                    stroke-dasharray="3,3" />
                            </svg>
                        </div>
                    </div>

                    <div data-aos="fade-up"
                        class="group bg-white rounded-2xl shadow-xl p-8 relative z-10 border border-gray-100
                            hover:shadow-2xl hover:border-blue-300 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex justify-center mb-6">
                            <div
                                class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center
                                    text-3xl font-bold shadow-lg ring-4 ring-blue-200 group-hover:bg-blue-700 transition-all duration-300">
                                3
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center">Instant Connect</h3>
                        <p class="text-gray-600 text-center text-base leading-relaxed">
                            We instantly dispatch your request to the nearest and most appropriate help providers.
                        </p>
                        <div class="mt-8 flex justify-center">
                            <svg viewBox="0 0 100 70"
                                class="w-full max-w-[150px] h-auto rounded-lg shadow-md border border-gray-200">
                                <rect x="5" y="5" width="90" height="60" rx="5" fill="#f0f4f8" stroke="#cbd5e0"
                                    stroke-width="1.5" />
                                <circle cx="30" cy="35" r="15" fill="#a78bfa" stroke="#8b5cf6" stroke-width="1.5" />
                                <circle cx="30" cy="30" r="5" fill="#fff" />
                                <path d="M30,45 C20,45 15,50 15,55 L45,55 C45,50 40,45 30,45 Z" fill="#fff" />

                                <line x1="45" y1="35" x2="65" y2="35" stroke="#ef4444" stroke-width="2"
                                    stroke-dasharray="4,2" />
                                <polygon points="65,32 70,35 65,38" fill="#ef4444" />

                                <rect x="70" y="25" width="20" height="20" rx="4" fill="#22c55e" stroke="#16a34a"
                                    stroke-width="1.5" />
                                <path d="M75,30 L85,30 M80,25 L80,35" stroke="#fff" stroke-width="2" />
                                <path d="M75,40 L85,40 M80,35 L80,45" stroke="#fff" stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <div data-aos="fade-up"
                        class="group bg-white rounded-2xl shadow-xl p-8 relative z-10 border border-gray-100
                            hover:shadow-2xl hover:border-blue-300 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex justify-center mb-6">
                            <div
                                class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center
                                    text-3xl font-bold shadow-lg ring-4 ring-blue-200 group-hover:bg-blue-700 transition-all duration-300">
                                4
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center">Receive Help</h3>
                        <p class="text-gray-600 text-center text-base leading-relaxed">
                            Track your responders in real-time and get updates until help safely arrives at your
                            location.
                        </p>
                        <div class="mt-8 flex justify-center">
                            <svg viewBox="0 0 100 70"
                                class="w-full max-w-[150px] h-auto rounded-lg shadow-md border border-gray-200">
                                <rect x="5" y="5" width="90" height="60" rx="5" fill="#f0f4f8" stroke="#cbd5e0"
                                    stroke-width="1.5" />
                                <rect x="10" y="10" width="80" height="50" fill="#c7e6f8" rx="3" />
                                <path d="M10,40 L30,20 L50,45 L70,30 L90,50" fill="none" stroke="#2563eb"
                                    stroke-width="2" />
                                <path d="M25,25 C20,25 20,30 25,30 C30,30 30,25 25,25 Z" fill="#ef4444" />
                                <circle cx="25" cy="20" r="3" fill="#fff" />
                                <path d="M25,20 L25,10" stroke="#ef4444" stroke-width="2" />
                                <g transform="translate(65, 35)">
                                    <rect x="0" y="0" width="20" height="10" rx="2" fill="#ef4444" />
                                    <rect x="0" y="5" width="20" height="5" rx="1" fill="#dc2626" />
                                    <circle cx="5" cy="10" r="2.5" fill="#1e293b" />
                                    <circle cx="15" cy="10" r="2.5" fill="#1e293b" />
                                    <rect x="3" y="2" width="5" height="3" rx="1" fill="#fff" />
                                    <rect x="12" y="2" width="5" height="3" rx="1" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Safety Tips Section-->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="lg:w-1/2 lg:pr-12 text-center lg:text-left animate__animated animate__fadeInLeft">
                    <span data-aos="fade-up"
                        class="inline-block px-4 py-1 bg-green-100 text-green-700 font-semibold rounded-full text-sm uppercase tracking-wider mb-4 shadow-sm">
                        Be Prepared
                    </span>
                    <h2 data-aos="fade-up" class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Essential Emergency Preparedness Tips
                    </h2>
                    <p data-aos="fade-up" class="text-lg md:text-xl text-gray-700 mb-8 max-w-2xl lg:mx-0 mx-auto">
                        Being <b>proactively prepared</b> can significantly impact the outcome during an emergency.
                        Equip yourself with these vital tips to ensure you and your loved ones stay safe and ready.
                    </p>
                    <ul class="space-y-5 text-left max-w-2xl lg:mx-0 mx-auto">
                        <li data-aos="fade-up" class="fade-right flex items-start">
                            <span class="flex-shrink-0 bg-green-500 p-2 rounded-full mr-4 mt-1 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-white"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-8.66"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </span>
                            <p class="text-gray-700 text-lg">
                                <b>Develop a Family Emergency Plan:</b> Discuss and practice communication, shelter, and
                                evacuation procedures with your household.
                            </p>
                        </li>
                        <li data-aos="fade-up" class="fade-right flex items-start">
                            <span class="flex-shrink-0 bg-green-500 p-2 rounded-full mr-4 mt-1 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-white"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-8.66"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </span>
                            <p class="text-gray-700 text-lg">
                                <b>Assemble an Emergency Kit:</b> Stock essentials like water, non-perishable food,
                                first
                                aid supplies, flashlights, and a radio.
                            </p>
                        </li>
                        <li data-aos="fade-up" class="fade-right flex items-start">
                            <span class="flex-shrink-0 bg-green-500 p-2 rounded-full mr-4 mt-1 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-white"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-8.66"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </span>
                            <p class="text-gray-700 text-lg">
                                <b>Learn Basic First Aid & CPR:</b> These skills can be life-saving in critical moments
                                before professional help arrives.
                            </p>
                        </li>
                        <li data-aos="fade-up" class="fade-right flex items-start">
                            <span class="flex-shrink-0 bg-green-500 p-2 rounded-full mr-4 mt-1 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-white"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-8.66"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </span>
                            <p class="text-gray-700 text-lg">
                                <b>Stay Informed:</b> Monitor local news and official alerts for emergency instructions
                                specific to your area.
                            </p>
                        </li>
                    </ul>
                    <div class="mt-10">
                        <a href="#" data-aos="fade-right"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full
                                inline-flex items-center shadow-lg transform hover:scale-105 transition-all duration-300">
                            Download Our Full Safety Guide
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 ml-3" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="lg:w-1/2 flex justify-center animate__animated animate__fadeInRight">
                    <div data-aos="fade-left"
                        class="w-full max-w-xl bg-gradient-to-br from-green-50 to-blue-50 p-6 rounded-3xl shadow-xl flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400" class="w-full h-auto">
                            <g transform="translate(100, 50)">
                                <path d="M200,0 L400,150 L400,350 L0,350 L0,150 Z" fill="#fff" stroke="#cbd5e0"
                                    stroke-width="3" />
                                <rect x="150" y="250" width="100" height="100" fill="#f8fafc" stroke="#cbd5e0"
                                    stroke-width="2" />
                                <rect x="20" y="190" width="80" height="60" fill="#f8fafc" stroke="#cbd5e0"
                                    stroke-width="2" rx="5" />
                                <rect x="300" y="190" width="80" height="60" fill="#f8fafc" stroke="#cbd5e0"
                                    stroke-width="2" rx="5" />
                            </g>

                            <g transform="translate(150, 200)">
                                <rect x="0" y="0" width="50" height="35" fill="#ef4444" rx="5" ry="5" />
                                <rect x="18" y="-5" width="15" height="10" fill="#ef4444" rx="3" ry="3" />
                                <rect x="20" y="10" width="10" height="20" fill="#fff" />
                                <rect x="15" y="15" width="20" height="10" fill="#fff" />
                            </g>

                            <g transform="translate(250, 180)">
                                <path d="M15,0 C25,0 25,10 15,10 C5,10 5,0 15,0" fill="#60a5fa" />
                                <rect x="5" y="10" width="20" height="40" fill="#60a5fa" opacity="0.8" rx="3" ry="3" />
                                <path d="M8,20 L22,20 M8,30 L22,30 M8,40 L22,40" stroke="#fff" stroke-width="1" />
                            </g>

                            <g transform="translate(350, 210)">
                                <rect x="0" y="0" width="40" height="15" fill="#4b5563" rx="3" />
                                <circle cx="45" cy="7.5" r="7.5" fill="#fbbf24" />
                                <path d="M40,7.5 L55,7.5" stroke="#fbbf24" stroke-width="2" stroke-dasharray="2,2" />
                            </g>

                            <g transform="translate(100, 100)">
                                <circle cx="15" cy="15" r="10" fill="#a78bfa" />
                                <circle cx="45" cy="15" r="10" fill="#a78bfa" />
                                <line x1="25" y1="15" x2="35" y2="15" stroke="#a78bfa" stroke-width="2"
                                    stroke-dasharray="2,2" />
                                <text x="30" y="35" font-family="Arial" font-size="12" fill="#4b5563"
                                    text-anchor="middle">PLAN</text>
                            </g>

                            <g transform="translate(400, 100)">
                                <rect x="0" y="0" width="40" height="40" fill="#fff" stroke="#cbd5e0" stroke-width="2"
                                    rx="5" />
                                <rect x="0" y="0" width="40" height="10" fill="#cbd5e0" rx="5" />
                                <text x="20" y="8" font-family="Arial" font-size="6" fill="#fff"
                                    text-anchor="middle">MARCH</text>
                                <text x="20" y="28" font-family="Arial" font-size="16" fill="#4b5563"
                                    text-anchor="middle">25</text>
                            </g>

                            <g transform="translate(250, 50)">
                                <rect x="0" y="0" width="100" height="30" fill="#fef08a" rx="5" />
                                <text x="50" y="20" text-anchor="middle" font-family="Arial" font-size="14"
                                    fill="#854d0e" font-weight="bold">ALERT!</text>
                            </g>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service Provider Section -->

    <section class="py-24 bg-gradient-to-br from-blue-100 to-indigo-100 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'6\' height=\'6\' viewBox=\'0 0 6 6\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23a0aec0\' fill-opacity=\'0.1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E');"
            aria-hidden="true"></div>

        <div class="absolute -right-32 -top-32 w-80 h-80 bg-blue-200 rounded-full opacity-60 blur-3xl animate__animated animate__pulse animate__infinite"
            aria-hidden="true"></div>
        <div class="absolute -left-24 bottom-24 w-96 h-96 bg-indigo-200 rounded-full opacity-60 blur-3xl animate__animated animate__pulse animate__infinite animate__delay-2s"
            aria-hidden="true"></div>
        <div class="absolute top-1/4 left-1/4 w-48 h-48 bg-purple-200 rounded-full opacity-60 blur-3xl animate__animated animate__pulse animate__infinite animate__delay-4s"
            aria-hidden="true"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div data-aos="fade-up" class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-blue-200 text-blue-700 font-extrabold rounded-full text-sm uppercase tracking-wide mb-4 shadow-sm">JOIN
                    OUR NETWORK</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">Empower Emergency
                    Response.<br>Become a HelpNearby Provider.</h2>
                <p class="text-xl text-gray-700 mb-8 max-w-4xl mx-auto leading-relaxed">
                    Join our expansive network of dedicated emergency responders and connect directly with communities
                    in need.
                    Together, we can save lives and build safer, more resilient communities.
                </p>
                <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-y-8 gap-x-12 mb-20">
                <div data-aos="fade-up" class="flex flex-col items-center">
                    <div class="font-extrabold text-5xl text-blue-700 mb-2">2,500+</div>
                    <div class="text-gray-600 text-md uppercase tracking-wider">Registered Providers</div>
                </div>
                <div class="w-1 h-20 bg-blue-300 rounded-full hidden md:block"></div>
                <div data-aos="fade-up" class="flex flex-col items-center">
                    <div class="font-extrabold text-5xl text-blue-700 mb-2">15,000+</div>
                    <div class="text-gray-600 text-md uppercase tracking-wider">Emergency Responses</div>
                </div>
                <div class="w-1 h-20 bg-blue-300 rounded-full hidden md:block"></div>
                <div data-aos="fade-up" class="flex flex-col items-center">
                    <div class="font-extrabold text-5xl text-blue-700 mb-2">98%</div>
                    <div class="text-gray-600 text-md uppercase tracking-wider">Satisfaction Rate</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-6xl mx-auto mb-20">
                <div data-aos="fade-up"
                    class="bg-white rounded-3xl shadow-xl p-10 text-left hover:shadow-2xl transition-all duration-300 border-t-8 border-blue-600">
                    <div class="flex items-center mb-8">
                        <div class="bg-blue-100 p-4 rounded-full mr-5 shadow-inner">
                            <i class="fas fa-handshake text-blue-700 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Key Benefits for Service Providers</h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="bg-blue-200 rounded-full p-1.5 mt-1 mr-4 flex-shrink-0">
                                <i class="fas fa-check-circle text-blue-700 text-lg"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 text-lg">Increased Visibility & Reach</span>
                                <p class="text-gray-700 text-base">Get discovered by individuals and organizations in
                                    your service area during critical moments.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-200 rounded-full p-1.5 mt-1 mr-4 flex-shrink-0">
                                <i class="fas fa-check-circle text-blue-700 text-lg"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 text-lg">Advanced Emergency Information</span>
                                <p class="text-gray-700 text-base">Receive precise and detailed emergency data to
                                    optimize your response and preparation.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-200 rounded-full p-1.5 mt-1 mr-4 flex-shrink-0">
                                <i class="fas fa-check-circle text-blue-700 text-lg"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 text-lg">Efficient Resource Management</span>
                                <p class="text-gray-700 text-base">Streamline managing your team's availability, service
                                    status, and overall response capabilities.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-200 rounded-full p-1.5 mt-1 mr-4 flex-shrink-0">
                                <i class="fas fa-check-circle text-blue-700 text-lg"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 text-lg">Valuable Data Insights</span>
                                <p class="text-gray-700 text-base">Access analytics on emergency patterns and
                                    performance metrics to enhance future operations.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div data-aos="fade-up"
                    class="fade-up bg-white rounded-3xl shadow-xl p-10 text-left hover:shadow-2xl transition-all duration-300 border-t-8 border-green-600">
                    <div class="flex items-center mb-8">
                        <div class="bg-green-100 p-4 rounded-full mr-5 shadow-inner">
                            <i class="fas fa-users text-green-700 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Who Can Join Our Network</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-red-100 p-3 rounded-full mr-4 shadow-sm">
                                    <i class="fas fa-briefcase-medical text-red-600 text-lg"></i>
                                </div>
                                <h4 class="font-bold text-gray-900 text-lg">Medical Services</h4>
                            </div>
                            <ul class="text-base text-gray-700 space-y-1.5 list-disc pl-5">
                                <li>Hospitals & Clinics</li>
                                <li>Ambulance Services</li>
                                <li>Emergency Medical Teams</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-orange-100 p-3 rounded-full mr-4 shadow-sm">
                                    <i class="fas fa-fire text-orange-600 text-lg"></i>
                                </div>
                                <h4 class="font-bold text-gray-900 text-lg">Fire & Rescue</h4>
                            </div>
                            <ul class="text-base text-gray-700 space-y-1.5 list-disc pl-5">
                                <li>Fire Departments</li>
                                <li>Search & Rescue Teams</li>
                                <li>Hazardous Materials Units</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-blue-100 p-3 rounded-full mr-4 shadow-sm">
                                    <i class="fas fa-gavel text-blue-600 text-lg"></i>
                                </div>
                                <h4 class="font-bold text-gray-900 text-lg">Law Enforcement</h4>
                            </div>
                            <ul class="text-base text-gray-700 space-y-1.5 list-disc pl-5">
                                <li>Police Departments</li>
                                <li>Security Services</li>
                                <li>Public Safety Agencies</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-teal-100 p-3 rounded-full mr-4 shadow-sm">
                                    <i class="fas fa-hands-holding text-teal-600 text-lg"></i>
                                </div>
                                <h4 class="font-bold text-gray-900 text-lg">Relief Organizations</h4>
                            </div>
                            <ul class="text-base text-gray-700 space-y-1.5 list-disc pl-5">
                                <li>Disaster Relief NGOs</li>
                                <li>Humanitarian Aid Groups</li>
                                <li>Crisis Response Teams</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div data-aos="fade-up"
                    class="inline-flex flex-col sm:flex-row bg-white rounded-full shadow-lg p-3 gap-4">
                    <a href="register.php"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-extrabold py-4 px-10 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-user-plus mr-3 text-xl"></i>
                        Register as a Provider
                    </a>
                    <a href="/provider_info"
                        class="text-blue-700 hover:text-blue-900 font-bold py-4 px-10 rounded-full flex items-center justify-center transition-colors duration-300">
                        <i class="fas fa-info-circle mr-3 text-xl"></i>
                        Learn More
                    </a>
                </div>

                <p data-aos="fade-up" class="text-gray-600 text-sm mt-8">Already registered? <a href="login.php"
                        class="text-blue-600 hover:text-blue-800 font-medium hover:underline">Login to your provider
                        dashboard</a></p>
            </div>
        </div>
    </section>




    <!--Testimonials Section-->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 data-aos="fade-up" class="text-4xl font-extrabold text-center text-gray-900 mb-14">Hear From Our
                Community</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div data-aos="fade-up"
                    class="data-aos fade-up bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out transform hover:-translate-y-1">
                    <div class="flex items-center mb-5">
                        <div class="text-yellow-500 flex text-lg">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic mb-8 relative">
                        <span
                            class="absolute top-0 left-0 text-4xl text-gray-300 opacity-75 transform -translate-x-1 -translate-y-3">"</span>
                        The <b>Help Nearby app</b> saved my father's life. We found the nearest hospital in seconds
                        and got
                        him treatment for his heart attack in time.
                        <span
                            class="absolute bottom-0 right-0 text-4xl text-gray-300 opacity-75 transform translate-x-1 translate-y-3">"</span>
                    </p>
                    <div class="flex items-center">
                        <div class="bg-blue-100 rounded-full p-3 mr-4">
                            <i class="fas fa-user text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Sarah N.</p>
                            <p class="text-sm text-gray-600">Nairobi, Kenya</p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up"
                    class="data-aos fade-up bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out transform hover:-translate-y-1">
                    <div class="flex items-center mb-5">
                        <div class="text-yellow-500 flex text-lg">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic mb-8 relative">
                        <span
                            class="absolute top-0 left-0 text-4xl text-gray-300 opacity-75 transform -translate-x-1 -translate-y-3">"</span>
                        As a rural clinic, we've been able to help more people in emergency situations since joining the
                        Help Nearby network. The platform bridges critical gaps.
                        <span
                            class="absolute bottom-0 right-0 text-4xl text-gray-300 opacity-75 transform translate-x-1 translate-y-3">"</span>
                    </p>
                    <div class="flex items-center">
                        <div class="bg-green-100 rounded-full p-3 mr-4">
                            <i class="fas fa-user-md text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Dr. James O.</p>
                            <p class="text-sm text-gray-600">Kisumu Medical Center</p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up"
                    class="data-aos fade-up bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out transform hover:-translate-y-1">
                    <div class="flex items-center mb-5">
                        <div class="text-yellow-500 flex text-lg">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg italic mb-8 relative">
                        <span
                            class="absolute top-0 left-0 text-4xl text-gray-300 opacity-75 transform -translate-x-1 -translate-y-3">"</span>
                        During the recent flooding, Help Nearby helped coordinate our rescue efforts. We could see where
                        people needed help and respond efficiently.
                        <span
                            class="absolute bottom-0 right-0 text-4xl text-gray-300 opacity-75 transform translate-x-1 translate-y-3">"</span>
                    </p>
                    <div class="flex items-center">
                        <div class="bg-red-100 rounded-full p-3 mr-4">
                            <i class="fas fa-users text-red-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Kenya Red Cross</p>
                            <p class="text-sm text-gray-600">Emergency Response Team</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Download App Section-->
    <section class="relative py-20 bg-gradient-to-r from-blue-700 to-blue-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'10\' height=\'10\' viewBox=\'0 0 10 10\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'5\' cy=\'5\' r=\'2\'/%3E%3C/g%3E%3C/svg%3E');"
            aria-hidden="true"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="md:w-1/2 text-center md:text-left animate__animated animate__fadeInLeft">
                    <h2 data-aos="fade-right" class="text-4xl lg:text-5xl font-extrabold mb-5 leading-tight">Your
                        Lifeline,
                        <br class="hidden sm:inline">Always Nearby.
                    </h2>
                    <p data-aos="fade-up" class="text-lg lg:text-xl mb-8 opacity-90 max-w-lg md:mx-0 mx-auto">
                        Get <b>immediate emergency assistance</b> at your fingertips. Our mobile app is designed for
                        reliability,
                        even in low-connectivity areas, ensuring help is always just a tap away.
                    </p>
                    <div
                        class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 justify-center md:justify-start">
                        <a data-aos="fade-right" href="#"
                            class="bg-black hover:bg-gray-800 text-white font-semibold py-3 px-7 rounded-xl flex items-center justify-center transition-colors duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fab fa-apple text-3xl mr-3"></i>
                            <div class="text-left">
                                <p class="text-xs opacity-80">Download on the</p>
                                <p class="text-base font-bold">App Store</p>
                            </div>
                        </a>
                        <a data-aos="fade-right" href="#"
                            class="bg-black hover:bg-gray-800 text-white font-semibold py-3 px-7 rounded-xl flex items-center justify-center transition-colors duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fab fa-google-play text-3xl mr-3"></i>
                            <div class="text-left">
                                <p class="text-xs opacity-80">Get it on</p>
                                <p class="text-base font-bold">Google Play</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/2 flex justify-center animate__animated animate__fadeInRight">
                    <img data-aos="fade-left" src="/images/HelpNearby - Mobile App Screenshot.png"
                        alt="HelpNearby Mobile App Screenshot"
                        class="rounded-3xl shadow-2xl bg-transparent max-w-xs md:max-w-sm lg:max-w-md transform rotate-3 hover:rotate-0 transition-transform duration-500 ease-in-out">
                </div>
            </div>
        </div>
    </section>


    <?php include('partials/footer.php') ?>