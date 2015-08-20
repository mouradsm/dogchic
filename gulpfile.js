var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['app.scss']);

});

elixir(function(mix) {
    mix.sass(['media-adjust.scss'],'public/css/media-adjust.css');

});

elixir(function(mix){
    mix.copy('resources/vendor/materialize/dist/css/materialize.min.css','public/css/materialize.min.css');
    mix.copy('resources/vendor/materialize/dist/js/materialize.min.js','public/js/materialize.min.js');
    mix.copy('resources/vendor/jquery/dist/jquery.min.js','public/js/jquery.min.js');
    mix.copy('resources/vendor/materialize/dist/font','public/font');
    mix.copy('resources/font/Material-Icons.woff','public/font/Material-Icons.woff');
});

