@extends('layout')

@section('content')
  <div class="hero">
    <div class="hero-inner">
      <a href="{{route('home')}}" class="hero-logo">
        <img src="/img/full-logo.png" alt="Laravel Collective">
      </a>
      <div class="hero-copy">
        <h1>Keeping the Laravel Legacy</h1>
        <p>We maintain Laravel components that have been removed from the core framework, so you can continue to use the amazing Laravel features that you love.</p>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="span12">
      <h1>Who we are</h1>
      <div class="cards">

        @include('partials.card', [
          'name' => 'Adam Engebretson',
          'image' => 'adam.jpg',
          'bio' => 'Adam Rocks'
        ])

        @include('partials.card', [
          'name' => 'Adam Engebretson',
          'image' => 'adam.jpg',
          'bio' => 'Adam Rocks'
        ])

        @include('partials.card', [
          'name' => 'Adam Engebretson',
          'image' => 'adam.jpg',
          'bio' => 'Adam Rocks'
        ])

        @include('partials.card', [
          'name' => 'Adam Engebretson',
          'image' => 'adam.jpg',
          'bio' => 'Adam Rocks'
        ])

      </div>
    </div>
  </div>
@stop