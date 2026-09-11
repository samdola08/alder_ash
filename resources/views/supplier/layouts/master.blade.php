@include('supplier.layouts.header')
<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('supplier.layouts.sidebar')
        </div>

        @yield('page')

    </div>

    @include('supplier.layouts.footer')
</body>

</html>