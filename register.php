<?php require 'partials/header.php'; ?>

<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-lg">
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-10 border-t-8 border-red-600">
            <div class="text-center mb-8">
                <div class="bg-red-100 p-4 rounded-full inline-flex mb-4">
                    <i class="fas fa-user-plus text-red-600 text-3xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Create Your Account</h2>
                <p class="text-gray-600">Join HelpNearby to access enhanced emergency services.</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="John Doe" autocomplete="name" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div>
                    <label for="email-register" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email-register" name="email" placeholder="you@example.com" autocomplete="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div>
                    <label for="phone-register" class="block text-sm font-medium text-gray-700 mb-1">Phone Number (e.g., 0712345678)</label>
                    <input type="tel" id="phone-register" name="phone" placeholder="07XXXXXXXX" autocomplete="tel-national" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div>
                    <label for="password-register" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password-register" name="password" placeholder="••••••••" autocomplete="new-password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div>
                    <label for="confirm-password-register" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" id="confirm-password-register" name="confirm-password" placeholder="••••••••" autocomplete="new-password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div class="flex items-center">
                    <input id="terms-conditions" name="terms-conditions" type="checkbox" required
                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <label for="terms-conditions" class="ml-2 block text-sm text-gray-900">
                        I agree to the <a href="#" class="font-medium text-red-600 hover:text-red-500 hover:underline">Terms & Conditions</a>
                    </label>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                        Register Account
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="login.php" class="font-medium text-red-600 hover:text-red-500 hover:underline">Log In Here</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>