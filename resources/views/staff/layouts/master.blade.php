@include('staff.layouts.header')
@include('staff.layouts.sidebar')
  <div class="main-wrapper">
    @include('staff.layouts.topbar')

    @yield('page')

    @include('staff.layouts.footer')