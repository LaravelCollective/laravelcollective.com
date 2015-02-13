var elixir = require('laravel-elixir');
var neat = require('node-neat').includePaths;

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
  mix.sass('app.scss', null, {
    includePaths: ['styles'].concat(neat)
  });

  mix.scripts(['jquery.js', 'plugins/prism.js', 'collective.js'],
    'public/js/app.js',
    'resources/assets/js/'
  );
});
