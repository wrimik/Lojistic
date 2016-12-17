var elixir = require('laravel-elixir');
//require('laravel-elixir-livereload');

//elixir(function(mix) {
//    mix.livereload();
//});

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

elixir(function (mix) {
    mix.sass(['2015/fonts.scss'], 'public/css/fonts.css');
    mix.sass(['2015/libraries.scss', '2015/snippets.scss', '2015/structure.scss'], 'public/css/lojistic.css');

    var pages = [
        '2020',
        'blog',
        'audit-demo',
        'dim-calc',
        'parcel',
        'pricing',
        'splash',
        'test-audit',
        'whitepapers'
    ];

    for (var i in pages) {
        var sass = pages[i];
        mix.sass('2015/pages/'+sass +'.scss', 'public/css/pages/'+sass+'.css');
    }
});
elixir(function (mix) {
    var misc = [
        'ajaxfileupload.js',
        'audit.js',
        'give.js',
        'intelliship-signup.js',
        'internal.js',
        'masonry.pkgd.min.js',
        'notify.min.js',
        'splash.js'
    ];
    for (var i in misc) {
        var script = misc[i];
        mix.scripts(['2016/misc/' + script], 'public/js/2016/misc/'+script);
    }

    mix.scriptsIn('resources/assets/js/2016/parts/');

    mix.scripts(['2016/libraries.js'], 'public/js/2016/libraries.js');
});

