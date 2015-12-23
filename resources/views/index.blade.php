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
      <div class="col s12 m1">&nbsp;</div>
      <div class="col s12 m2">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'annotations'])}}">Annotations</a>
      </div>
      <div class="col s12 m2">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'html'])}}">HTML &amp; Forms</a>
      </div>
      <div class="col s12 m2">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'ssh'])}}">Remote (SSH)</a>
      </div>
      <div class="col s12 m2">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'iron-queue'])}}">Iron Queue</a>
      </div>
      <div class="col s12 m2">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'bus'])}}">Command Bus</a>
      </div>
      <div class="col s12 m1">&nbsp;</div>
    </div>
  </div>

@stop