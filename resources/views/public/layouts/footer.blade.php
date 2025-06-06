<footer class="text-white bg-gray-900">
    <!-- Main Footer -->
    <div class="container px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- About Section -->
            <div>
                <div class="mb-6">
                    <a href="{{ route('blog.index') }}" class="text-2xl font-bold">
                        <span class="text-blue-400">My</span>Blog
                    </a>
                </div>
                <p class="mb-6 leading-relaxed text-gray-300">
                    Discover amazing stories, insights, and knowledge from our community of passionate writers.
                    Join us on this journey of learning and sharing.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="p-2 bg-blue-600 rounded-full hover:bg-blue-700">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="p-2 rounded-full bg-sky-500 hover:bg-sky-600">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="p-2 bg-pink-600 rounded-full hover:bg-pink-700">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="p-2 bg-red-600 rounded-full hover:bg-red-700">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="mb-4 text-xl font-semibold">Quick Links</h3>
                <ul class="space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#" class="hover:text-white">About</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                    <li><a href="#" class="hover:text-white">Blog</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div>
                <h3 class="mb-4 text-xl font-semibold">Categories</h3>
                <ul class="space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Technology</a></li>
                    <li><a href="#" class="hover:text-white">Lifestyle</a></li>
                    <li><a href="#" class="hover:text-white">Education</a></li>
                    <li><a href="#" class="hover:text-white">Travel</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="mb-4 text-xl font-semibold">Subscribe</h3>
                <p class="mb-4 text-gray-300">Get the latest posts delivered right to your inbox.</p>
                <form action="#" method="POST" class="flex flex-col space-y-3">
                    <input type="email" name="email" placeholder="Your email address"
                        class="px-4 py-2 text-white bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="py-4 text-sm text-center text-gray-400 bg-gray-800">
        &copy; {{ date('Y') }} MyBlog. All rights reserved.
    </div>
</footer>