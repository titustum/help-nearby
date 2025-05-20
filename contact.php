<?php require 'partials/header.php'; ?>
<!-- Contact Section -->

<section class="py-16 md:py-24 bg-gray-50" id="contact">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block mb-3 bg-red-100 text-red-700 text-sm font-semibold py-1 px-3 rounded-full uppercase">Get in Touch</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                We're Here to Help, <span class="text-blue-600">Beyond Emergencies.</span>
            </h2>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Have questions, feedback, or looking to partner with HelpNearby in Kenya? Reach out to us through the channels below.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 border-t-8 border-red-600 mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Contact Details</h3>

                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="bg-red-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Our Office Address</h4>
                                <p class="text-gray-600">HelpNearby Headquarters,<br> Kijabe Street, Nyeri, Kenya</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-red-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email Us</h4>
                                <a href="mailto:info@helpnearby.ke" class="text-blue-600 hover:underline">info@helpnearby.ke</a>
                                <p class="text-gray-600">For general inquiries</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-red-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-phone-alt text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Call Us</h4>
                                <a href="tel:+2547XXXXXXXX" class="text-blue-600 hover:underline">+254 7XX XXX XXX</a>
                                <p class="text-gray-600">Monday - Friday, 9 AM - 5 PM EAT</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-red-100 p-3 rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-comments text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Emergency Hotlines</h4>
                                <p class="text-gray-600">
                                    <span class="font-bold text-red-700">999</span> (Police, Fire, Ambulance - Kenya)<br>
                                    <a href="tel:112" class="text-blue-600 hover:underline">112</a> (Alternative Emergency - Kenya)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden" style="height: 350px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15956.126435035272!2d36.95361093121081!3d-0.4227702476572173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18285c57b1657c91%3A0x633519c7f9e8a71!2sNyeri!5e0!3m2!1sen!2ske!4v1701090000000!5m2!1sen!2ske"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="HelpNearby Nyeri Office Location">
                    </iframe>
                </div>
            </div>

            <div>
                <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 border-t-8 border-blue-600">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h3>
                    <p class="text-gray-600 mb-6">
                        Fill out the form below and we'll get back to you as soon as possible.
                    </p>

                    <form class="space-y-6">
                        <div>
                            <label for="contact-name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="contact-name" name="name" placeholder="Full Name" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div>
                            <label for="contact-email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                            <input type="email" id="contact-email" name="email" placeholder="email@example.com" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div>
                            <label for="contact-subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" id="contact-subject" name="subject" placeholder="Inquiry about..." required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div>
                            <label for="contact-message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Write your message here..." required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>