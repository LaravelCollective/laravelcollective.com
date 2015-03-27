var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
  mix.copy('bower_components/materialize/font', 'public/build/font');
  mix.copy('bower_components/materialize/dist/js/materialize.js', 'resources/assets/js/plugins/materialize.js');

  mix.sass('app.scss', null, {
    includePaths: ['bower_components']
  });

  mix.scripts(['jquery.js', 'plugins/prism.js', 'plugins/materialize.js', 'collective.js'],
    'public/js/app.js',
    'resources/assets/js/'
  );

  mix.version(["css/app.css", "js/app.js"]);

  mix.copy('public/css/app.css.map', 'public/build/css/app.css.map');
  mix.copy('public/js/app.js.map', 'public/build/js/app.js.map');
  mix.copy('public/font', 'public/build/font');

});
