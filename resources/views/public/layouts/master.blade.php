{{-- resources/views/welcome.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('public.layouts.head')

<body class="flex flex-col items-center justify-center min-h-screen text-gray-800 bg-gray-100" x-data="{ open: false }">

    @include('public.partials.header')

    <main class="flex flex-col items-center justify-center flex-1 space-y-6 text-center">
        <h1 class="text-4xl font-bold text-blue-600">Welcome to My Laravel App</h1>
        <p class="text-lg">Tailwind CSS & Alpine.js đã được cài đặt thành công 🎉</p>

        @yield('content')
    </main>

    @include('public.partials.footer')

</body>

</html>