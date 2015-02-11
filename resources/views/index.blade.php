@extends('layout')

@section('content')
  <div class="hero">
    <div class="hero-inner">
      <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image"></a>
      <div class="hero-copy">
        <h1>Short description of Product</h1>
        <p>A few reasons why this product is worth using, who it's for and why they need it.</p>
      </div>
      <button>Learn More</button>
    </div>
  </div>

  <div class="row">
    <div class="span12">
      <h1>Who we are</h1>
      <div class="cards">
        <div class="card">
          <div class="card-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
          </div>
          <div class="card-header">
            First Card
          </div>
          <div class="card-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-4.png" alt="">
          </div>
          <div class="card-header">
            Another Card
          </div>
          <div class="card-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
          </div>
          <div class="card-header">
            The Last Card
          </div>
          <div class="card-copy">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
    </div>
  </div>
@stop