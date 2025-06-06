<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Blog') - {{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="@yield('description', 'Discover amazing stories and insights on our blog')">
    <meta name="keywords" content="@yield('keywords', 'blog, articles, stories')">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Blog')">
    <meta property="og:description" content="@yield('og_description', 'Discover amazing stories and insights')">
    <meta property="og:image" content="@yield('og_image', asset('images/default-og.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="antialiased bg-gray-50 light:bg-gray-900">
    <!-- Header -->
    @include('public.layouts.header')

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('public.layouts.footer')


    <!-- Dark Mode Toggle Script -->
    @push('script')
    <script src="{{ asset('js/master-layouts.js') }}"></script>
    @endpush
    <!-- js -->
    @stack('script')

</body>

</html>