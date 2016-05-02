<div class="row">
    <div class="col s12">
      <ul class="version-tabs tabs">
        @foreach(Config::get('documentation.packages.'.Request::segment(3).'.versions') as $version)
        <li class="tab col s4"><a class="{{ (Request::segment(2) == $version) ? 'active' : '' }} pointer" data-url="{{ url('docs/'.$version.'/'.Request::segment(3)) }}">{{ $version }}</a></li>
        @endforeach
      </ul>
    </div>
</div>