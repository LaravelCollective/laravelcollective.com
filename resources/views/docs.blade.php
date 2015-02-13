@extends('layout')

@section('content')
  <div class="js-menu-screen sliding-menu-fade-screen"></div>

  <div class="row">
    <div class="span12">
      <article class="docs language-php">

        {!! $content !!}

      </article>
    </div>
  </div>
@stop