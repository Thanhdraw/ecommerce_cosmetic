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
        <div x-data="{ show: false, message: '' }" class="space-y-4">

            <!-- Nút Kích Hoạt -->
            <button @click="message = 'Thêm sản phẩm thành công!'; show = true; setTimeout(() => show = false, 3000)"
                class="btn">
                Thêm sản phẩm
            </button>

            <!-- Alert từ DaisyUI -->
            <div x-show="show" x-transition class="shadow-lg alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current shrink-0" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span x-text="message"></span>
                <button @click="show = false" class="ml-auto btn btn-sm btn-ghost">✕</button>
            </div>
        </div>


    </main>

    @include('public.partials.footer')

</body>

</html>