<nav role="navigation">
  <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
    <li class="nav-link"><a href="{{route('home')}}">Home</a></li>
    <li class="nav-link more"><a href="javascript:void(0)">Docs</a>
      {!! $index !!}
    </li>
    <li class="nav-link logo">
      <a href="{{route('home')}}" class="logo">
        <img src="/img/logo.png" alt="Laravel Collective">
      </a>
    </li>
    <li class="nav-link"><a href="https://github.com/LaravelCollective" target="_blank">Github</a></li>
    <li class="nav-link"><a href="https://twitter.com/LaraCollective" target="_blank">Twitter</a></li>
  </ul>
</nav>