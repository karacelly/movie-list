<html>

<head>
    @yield('scripts')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="bg-secondaryBlack min-h-screen w-full relative">
    <x-navbar />
    <div class="w-full">
        @yield('content')
    </div>
    <x-footer />

    @yield('js-scripts')
</body>

</html>
