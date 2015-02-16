@extends('layout')

@section('content')
  <div class="section" id="index-banner">
    <div class="container">

      <img src="/img/full-logo.png" alt="Laravel Collective"/>

      <div class="row center">
        <code class="col s6 offset-s3 thin">We maintain Laravel components that have been removed from the core framework, so you can continue to use the amazing Laravel features that you love.</code>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row center">
      <div class="col s12 m4">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'annotations'])}}">Annotations</a>
      </div>
      <div class="col s12 m4">
        <a class="btn-large" href="{{route('docs.show', [DEFAULT_VERSION, 'html'])}}">Forms & HTML</a>
      </div>
      <div class="col s12 m4">
        <a class="btn-large tooltipped disabled" href="#" data-position="top" data-tooltip="Coming Soon">Remote (SSH)</a>
      </div>
    </div>
  </div>

@stop