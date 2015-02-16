@extends('layout')

@section('content')
  <div class="container">
    <div class="section">

      <h2 class="center">About The Collective</h2>
      <div class="divider"></div>

      <p>Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu.</p>

      <p>Oh wait, I was supposed to write real copy here? Yeah, I'll just do it tomorrow...</p>

      <h2 class="center">The Collective Team</h2>
      <div class="divider"></div>
      <br/>

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

  @include('partials.footer')
@stop