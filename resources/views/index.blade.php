@extends('layout')

@section('content')
  <div class="section" id="index-banner">
    <div class="container center">

      <img src="/img/full-logo.png" alt="Laravel Collective"/>

      <div class="row">
        <code class="col s6 offset-s3 thin">We maintain Laravel components that have been removed from the core framework, so you can continue to use the amazing Laravel features that you love.</code>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row center">
        <a class="btn-large" href="{{route('docs.show', ['master', 'annotations'])}}">Annotations</a>
        <a class="btn-large" href="{{route('docs.show', ['master', 'html'])}}">HTML &amp; Forms</a>
        <a class="btn-large" href="{{route('docs.show', ['master', 'ssh'])}}">Remote (SSH)</a>
        <a class="btn-large" href="{{route('docs.show', ['master', 'iron-queue'])}}">Iron Queue</a>
        <a class="btn-large" href="{{route('docs.show', ['master', 'bus'])}}">Command Bus</a>
    </div>
  </div>

@stop
