@extends('layout')

@section('content')
  <div class="section">
    <div class="container">
      @include('version-selection')
      <article class="docs language-php">
        {!! $content !!}
      </article>
    </div>
  </div>

  @include('partials.footer')
@stop