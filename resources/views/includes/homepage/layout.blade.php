@include('includes.homepage.head')

<body>

@include('includes.homepage.header')

@yield('content')

@include('includes.homepage.footer')
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
