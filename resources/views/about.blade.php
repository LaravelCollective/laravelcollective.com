@extends('layout')

@section('content')
  <div class="container">
    <div class="section">

      <h2 class="center">About The Collective</h2>
      <div class="divider"></div>

      <p>
        The Laravel Collective is a community organization designed to maintain components that have been removed from the <a href="http://laravel.com" target="_blank" title="Laravel">Laravel Framework</a> core. We love Laravel, and all of its features. However, as Taylor Otwell continues to grow the framework, changes must be made. Since Laravel has such a large community surrounding it, it goes without saying that components that are removed from the core framework will be missed by several developers. That's where we come in.
      </p>

      <p>
        We believe that maintaining these components will help support Laravel's future. By keeping every part of Laravel alive for its entire lifespan, we can help keep developers loyal to the framework.
      </p>

      <p>
        The Laravel Collective website is not meant to be a marketing website. It's meant to be a documentation website, similar to
        <a target="_blank" href="http://laravel.com" title="Laravel">Laravel.com</a>. You can keep coming back to this website for the latest up-to-date documentation (refreshed every 5 minutes), as well as new packages to be maintained by the Laravel Collective.
      </p>

      <p>
        Lastly, we want to emphasize the "community" in our title: "community organization". This project seeks to relieve Taylor of having to maintain these components that he no longer considers core-worthy. We love Pull Requests. We love Issues. We love feedback! If you run into any issues, or have an idea of a way that we can make any of these components better, please don't hesitate to share on <a target="_blank" href="https://github.com/LaravelCollective" title="GitHub">GitHub.</a> We look forward to continuing the Laravel Legacy here, at the Laravel Collective.
      </p>

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
          'name' => 'Robin Malfait',
          'image' => '/img/team/robin.jpg',
          'bio' => 'Repository Manager',
          'actions' => [
            'GitHub' => 'https://github.com/RobinMalfait',
            'Twitter' => 'https://twitter.com/malfaitrobin',
          ]
        ])

        @include('partials.card', [
          'name' => 'Matt Lantz',
          'image' => 'https://www.gravatar.com/avatar/'.md5('mattlantz@gmail.com').'?s=600',
          'bio' => 'Developer',
          'actions' => [
            'GitHub' => 'https://github.com/mlantz',
            'Twitter' => 'https://twitter.com/Mattylantz',
          ]
        ])

      </div>

    </div>
  </div>

  @include('partials.footer')
@stop