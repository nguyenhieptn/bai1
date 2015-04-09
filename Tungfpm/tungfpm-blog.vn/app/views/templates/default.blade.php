
@include('templates.partials.header')

    <div class="container">

      @include('templates.partials.main-nav')

      @yield('content')

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Tungfpm 's Blog 2015 </p>
      </footer>

    </div> <!-- /container -->

@include('templates.partials.footer')