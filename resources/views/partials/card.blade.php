<div class="col s12 m3">
  <div class="card grey lighten-4">
    <div class="card-image">
      <img src="{{$image}}">
    </div>
    <div class="card-content center">
      <div class="name">
        {{$name}}
      </div>
      <p>
        {{$bio}}
      </p>
    </div>
    @if(isset($actions) && count($actions))
      <div class="card-action">
        @foreach($actions as $text => $link)
          <a href="{{$link}}" target="_blank" title="{{$name}}">{{$text}}</a>
        @endforeach
      </div>
    @endif
  </div>
</div>