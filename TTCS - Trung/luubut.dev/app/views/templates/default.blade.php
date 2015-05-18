@include('templates.partials.header')
<div class="container">
    @include('templates.partials.main-nav')
    @yield('content')
    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; Company 2014</p>
    </footer>
</div> <!-- /container -->
@include('templates.partials.footer')