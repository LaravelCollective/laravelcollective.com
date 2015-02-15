@extends('layout')

@section('content')
  <div class="section" id="index-banner">
    <div class="container">

      <h1 class="header center light">Keeping Laravel Alive</h1>

      <div class="row center">
        <h5 class="header col s6 offset-s3 thin">We maintain Laravel components that have been removed from the core framework, so you can continue to use the amazing Laravel features that you love.</h5>
      </div>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <h3>The Collective Team</h3>

      <!--   Icon Section   -->
      <div class="row">

        @include('partials.card', [
          'name' => 'Adam Engebretson',
          'image' => '/img/team/adam.jpg',
          'bio' => 'Co-Founder',
          'actions' => [
            'GitHub' => 'https://github.com/adamgoose',
            'Twitter' => 'https://twitter.com/artisangoose',
          ]
        ])

        @include('partials.card', [
          'name' => 'Tom Shafer',
          'image' => '/img/team/tom.jpg',
          'bio' => 'Co-Founder',
          'actions' => [
            'GitHub' => 'https://github.com/tshafer',
            'Twitter' => 'https://twitter.com/tshafer',
          ]
        ])

        @include('partials.card', [
          'name' => 'Kayla Daniels',
          'image' => '/img/team/kayla.jpg',
          'bio' => 'Repository Manager',
          'actions' => [
            'GitHub' => 'https://github.com/kayladnls',
            'Twitter' => 'https://twitter.com/kayladnls',
          ]
        ])

        @include('partials.card', [
          'name' => 'Robin Malfait',
          'image' => '/img/team/robin.jpg',
          'bio' => 'Public Relations',
          'actions' => [
            'GitHub' => 'https://github.com/RobinMalfait',
            'Twitter' => 'https://twitter.com/malfaitrobin',
          ]
        ])

      </div>

    </div>
  </div>
@stop