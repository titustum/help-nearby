<?php require 'partials/header.php'; ?>

<section class="py-16 md:py-24 bg-gray-50" id="login">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-lg">
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-10 border-t-8 border-red-600">
            <div class="text-center mb-8">
                <div class="bg-red-100 p-4 rounded-full inline-flex mb-4">
                    <i class="fas fa-sign-in-alt text-red-600 text-3xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Welcome Back!</h2>
                <p class="text-gray-600">Sign in to your HelpNearby account.</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label for="email-login" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email-login" name="email" placeholder="you@example.com" autocomplete="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div>
                    <label for="password-login" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password-login" name="password" placeholder="••••••••" autocomplete="current-password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-red-600 hover:text-red-500 hover:underline">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                        Log In
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account?
                    <a href="register.php" class="font-medium text-red-600 hover:text-red-500 hover:underline">Register Now</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>