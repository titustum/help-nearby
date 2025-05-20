    <!--Footer -->
    <footer class="bg-gray-950 text-white pt-16 pb-8 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div data-aos="fade-up">
                    <div class="flex items-center mb-5">
                        <i
                            class="fas fa-heartbeat text-red-500 text-3xl mr-3 animate__animated animate__heartBeat animate__delay-1s"></i>
                        <span class="font-extrabold text-2xl text-white">HelpNearby</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Your trusted emergency response network, seamlessly connecting individuals with life-saving
                        services across Kenya when they need them most.
                    </p>
                    <div class="mt-6 flex space-x-5">
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl transition-colors duration-200"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl transition-colors duration-200"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl transition-colors duration-200"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 text-xl transition-colors duration-200"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div data-aos="fade-up">
                    <h3 class="font-bold text-xl text-white mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Home</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">About
                                Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Our
                                Services</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-200">Testimonials</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Contact
                                Us</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up">
                    <h3 class="font-bold text-xl text-white mb-6">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Emergency
                                Guides</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">First Aid
                                Tips</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Provider
                                Registration</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">FAQs</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Support
                                Center</a></li>
                    </ul>
                </div>

                <div data-aos="fade-up">
                    <h3 class="font-bold text-xl text-white mb-6">Get in Touch</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-3 text-lg"></i>
                            <span class="text-gray-400 text-sm">Nairobi, Kenya</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt text-blue-500 mt-1 mr-3 text-lg"></i>
                            <span class="text-gray-400 text-sm">+254 7XX XXX XXX</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-blue-500 mt-1 mr-3 text-lg"></i>
                            <span class="text-gray-400 text-sm">info@helpnearby.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p class="text-gray-500 text-center md:text-left mb-4 md:mb-0">&copy; 2025 Help Nearby. All rights
                    reserved.</p>
                <div class="flex space-x-6">
                    <a href="/privacy" class="text-gray-500 hover:text-white transition-colors duration-200">Privacy
                        Policy</a>
                    <a href="/terms" class="text-gray-500 hover:text-white transition-colors duration-200">Terms of
                        Service</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

            function openMobileMenu() {
                mobileMenu.classList.remove('-translate-x-full');
                mobileMenu.classList.add('translate-x-0');
                mobileMenuOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent scrolling on the main content
            }

            function closeMobileMenu() {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('-translate-x-full');
                mobileMenuOverlay.classList.add('hidden');
                document.body.style.overflow = ''; // Restore scrolling
            }

            if (mobileMenuButton && mobileMenu && mobileMenuOverlay) {
                mobileMenuButton.addEventListener('click', openMobileMenu);
                mobileMenuOverlay.addEventListener('click', closeMobileMenu); // Close when clicking overlay

                // Close menu when a link inside is clicked (optional, but good for UX)
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', closeMobileMenu);
                });
            }
        });
    </script>
    </body>

    </html>