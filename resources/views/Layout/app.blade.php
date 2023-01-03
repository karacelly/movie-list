<html>

<head>
    @yield('scripts')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-secondaryBlack min-h-screen w-full relative">
    <x-navbar />
    <div class="min-h-screen w-full">
        @yield('content')
    </div>
    <x-footer />
</body>

</html>
