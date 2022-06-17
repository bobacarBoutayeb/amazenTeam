@include('includes.head')

<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
