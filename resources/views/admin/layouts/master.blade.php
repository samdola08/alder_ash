@include('admin.layouts.header')
<div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    @include('admin.layouts.sidebar')

        <div class="admin-main">

    @include('admin.layouts.topbar')

    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">

            @yield('page')

        </div>
    </main>

    @include('admin.layouts.footer')
