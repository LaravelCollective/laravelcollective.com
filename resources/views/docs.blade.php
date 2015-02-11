@extends('layout')

@section('content')
  <nav class="js-menu sliding-menu-content">
    {!! $index !!}
  </nav>

  <div class="js-menu-screen sliding-menu-fade-screen"></div>

  <div class="row">
    <div class="span12">
      <button type="button" class="js-menu-trigger sliding-menu-button">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/menu-white.png" alt="Menu Icon">
      </button>

      <article class="docs">

        {!! $content !!}

      </article>
    </div>
  </div>
@stop

@section('scripts')
  <script>
    $(function()
    {
      $('.js-menu-trigger,.js-menu-screen').on('click touchstart',function (e) {
        $('.js-menu,.js-menu-screen').toggleClass('is-visible');
        e.preventDefault();
      });
    });
  </script>
@stop