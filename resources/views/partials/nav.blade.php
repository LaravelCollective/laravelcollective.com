<nav role="navigation">
  <div class="container">
    <div class="nav-wrapper">
      @if( ! isset($hideLogo) || $hideLogo == false)
        <a id="logo-container" href="{{ route('home') }}" class="brand-logo" title="Laravel Collective">
          <img src="/img/full-logo.png" alt="Laravel Collective" />
        </a>
      @endif
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="dropdown-button" href="#" data-activates="docs-dropdown">
            Docs
            <i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
          <div id="docs-dropdown" class="dropdown-content">
            {!! $index !!}
          </div>
        </li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="https://github.com/LaravelCollective" title="GitHub">GitHub</a></li>
        <li><a href="https://twitter.com/LaraCollective" title="Twitter">Twitter</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li>
          <a class="dropdown-button" href="#" data-activates="docs-dropdown-mobile">
            Docs
            <i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
          <div id="docs-dropdown-mobile" class="dropdown-content">
            {!! $index !!}
          </div>
        </li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="https://github.com/LaravelCollective" title="GitHub">GitHub</a></li>
        <li><a href="https://twitter.com/LaraCollective" title="Twitter">Twitter</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse">
        <i class="mdi-navigation-menu"></i>
      </a>
    </div>
  </div>
</nav>