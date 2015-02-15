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
  mix.copy('bower_components/materialize/font', 'public/font');
  mix.copy('bower_components/materialize/dist/js/materialize.js', 'resources/assets/js/plugins/materialize.js');

  mix.sass('app.scss', null, {
    includePaths: ['bower_components']
  });

  mix.scripts(['jquery.js', 'plugins/prism.js', 'plugins/materialize.js', 'collective.js'],
    'public/js/app.js',
    'resources/assets/js/'
  );
});
