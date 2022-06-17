@include('includes.backoffice.head')

<body>

@include('includes.backoffice.header')

<div class="container-fluid">
    <div class="row">
        @include('includes.backoffice.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @include('backoffice.dashboard')
            @include('backoffice.products')

        </main>
        @yield('content')
    </div>
</div>

<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/feather.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
