<nav role="navigation">
  <div class="container">
    <div class="nav-wrapper">
      <a id="logo-container" href="{{ route('home') }}" class="brand-logo">
        <img src="/img/full-logo.png" alt="Laravel Collective" />
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="dropdown-button" href="#" data-activates="docs-dropdown">
            Docs
            <i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
          <div id="docs-dropdown" class="dropdown-content no-pad-top no-pad-bot">
            {!! $index !!}
          </div>
        </li>
        <li><a href="https://github.com/LaravelCollective">GitHub</a></li>
        <li><a href="https://twitter.com/LaraCollective">Twitter</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li>
          <a class="dropdown-button" href="#" data-activates="docs-dropdown-mobile">
            Docs
            <i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
          <div id="docs-dropdown-mobile" class="dropdown-content no-pad-top no-pad-bot">
            {!! $index !!}
          </div>
        </li>
        <li><a href="https://github.com/LaravelCollective">GitHub</a></li>
        <li><a href="https://twitter.com/LaraCollective">Twitter</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse">
        <i class="mdi-navigation-menu"></i>
      </a>
    </div>
  </div>
</nav>