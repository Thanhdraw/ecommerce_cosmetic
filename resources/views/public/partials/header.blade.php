<!-- Header/Navbar -->
@include('public.partials.navigation')

<!-- Search Modal -->
@include('public.partials.search')

{{-- Auth: Login/Logout --}}
@include('public.auth.auth')



@push('js')
    <script src="{{ asset('js/theme.js') }}"></script>
@endpush
