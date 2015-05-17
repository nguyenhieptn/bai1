      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Tungfpm 's Blog</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="#">{{ link_to_route('home', 'Home') }}</li>
            <li><a href="">Projects</a></li>
            <li class="#">{{ link_to_route('about', 'About') }}</li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>