@include('supplier.layouts.header')
<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('supplier.layouts.sidebar')
        </div>

        <div id="main" class="refined-main">
            @include('supplier.layouts.topbar')

            <div class="refined-wrap">
                @yield('page')
            </div>
        </div>

    </div>

    @include('supplier.layouts.footer')
</body>

</html>