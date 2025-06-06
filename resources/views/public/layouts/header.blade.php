{{-- resources/views/layouts/blog/header.blade.php --}}
<header class="sticky top-0 z-50 bg-white shadow-sm dark:bg-gray-800">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
        <!-- Top Bar -->
        <div class="py-2 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center space-x-4 text-gray-600 dark:text-gray-300">
                    <span>{{ now()->format('l, F j, Y') }}</span>
                    <span class="hidden sm:inline">•</span>
                    <span class="hidden sm:inline">Welcome to our Blog</span>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- Social Links -->
                    <a href="#" class="text-gray-400 transition-colors hover:text-blue-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors hover:text-blue-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors hover:text-pink-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.746.098.119.112.223.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z" />
                        </svg>
                    </a>

                    <!-- Dark Mode Toggle -->
                    <button onclick="toggleTheme()"
                        class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300">
                        <svg class="hidden w-4 h-4 dark:block" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="block w-4 h-4 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('blog.index') }}" class="text-2xl font-bold text-gray-900 dark:text-white">
                        <span class="text-blue-600">My</span>Blog
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="items-center hidden space-x-8 md:flex">
                    <a href="{{ route('blog.index') }}"
                        class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors {{ request()->routeIs('blog.index') ? 'text-blue-600 dark:text-blue-400' : '' }}">
                        Home
                    </a>
                    <div class="relative group">
                        <button
                            class="flex items-center font-medium text-gray-700 transition-colors dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                            Categories
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 z-50 invisible w-48 mt-2 transition-all duration-200 bg-white rounded-lg shadow-lg opacity-0 top-full dark:bg-gray-800 group-hover:opacity-100 group-hover:visible">
                            <div class="py-2">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Technology</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Lifestyle</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Travel</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Food</a>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="font-medium text-gray-700 transition-colors dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                        About
                    </a>
                    <a href="#"
                        class="font-medium text-gray-700 transition-colors dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                        Contact
                    </a>
                </div>

                <!-- Search & Mobile Menu -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="Search..."
                            class="w-64 py-2 pl-10 pr-4 text-sm text-gray-900 border border-gray-300 rounded-lg dark:border-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button
                        class="text-gray-700 md:hidden dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400"
                        id="mobile-menu-toggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('blog.index') }}"
                    class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Categories</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">About</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Contact</a>

                <!-- Mobile Search -->
                <div class="px-3 py-2">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="w-full py-2 pl-10 pr-4 text-sm text-gray-900 border border-gray-300 rounded-lg dark:border-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>