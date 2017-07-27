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
    mix.sass(
        'app.scss',
        'public/css',
        {includePaths: ['vendor/bower_components/foundation/scss']}
    );


    mix.scripts(
        ['vendor/modernizr.js', 'vendor/jquery.js', 'foundation.min.js'], // Source files
        'public/js/app.js', // Destination file
        'vendor/bower_components/foundation/js/' // Source files base directory
    );

});