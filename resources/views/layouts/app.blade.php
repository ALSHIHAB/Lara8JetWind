<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" data-turbolinks-track="true">

    @livewireStyles
    {{-- <script type="module">
        import Turbolinks from 'turbolinks';
        Turbolinks.start()
    </script> --}}
    <!-- Scripts -->

    <script src="{{ asset('js/init-alpine.js') }}" defer data-turbolinks-track="true"></script>
    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="true"></script>

</head>

<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.menu')
        @include('layouts.mobile-menu')
        {{-- <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ isset($header) ? $header : '' }}
            </div>
        </header> --}}
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.navigation-dropdown')
            <!-- Page Content -->
            <main class="h-full overflow-y-auto">
                {{ $slot }}
            </main>
        </div>
        @stack('modals')

        @livewireScripts
    </div>


</body>

</html>
