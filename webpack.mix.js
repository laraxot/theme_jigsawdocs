const mix = require('laravel-mix');
require('dotenv').config({
    path: __dirname + '/../../../../.env'
});

require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');

//mix.disableSuccessNotifications();
//mix.setPublicPath('source/assets/build');

mix.js('resources/js/app.js', 'dist/js')
    .sass('resources/sass/app.scss', 'dist/css')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
        ],
    })
    .purgeCss({
        content: ['source/**/*.html', 'source/**/*.md', 'source/**/*.js', 'source/**/*.php', 'source/**/*.vue'],
        whitelistPatterns: [/language/, /hljs/, /algolia/],
    })
    .sourceMaps()
    .version();

mix.setResourceRoot('../');
mix.setPublicPath('dist');
mix.extract();

var $prefix = '../../../../';
var $suffix = '/themes/jigsawdocs';
var $resource_root = $prefix + $suffix;
var $public_path = $prefix + process.env.MIX_PUBLIC_FOLDER + $suffix;

console.log('public_path :' + $public_path);
console.log('dirname :' + __dirname);
$res = mix.copyDirectory(__dirname + '/dist', $public_path + '/dist');
