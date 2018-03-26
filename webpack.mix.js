let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


/*Files to be compiled and combined in given order*/
let jsFiles = [

];

let compiledJsFiles = [];

jsFiles.forEach(function (file) {
    let compilePath = file.replace('resources', 'public/compiled');

    mix.js(file, compilePath);

    compiledJsFiles.push(compilePath);
});

/*Files will be just copied to /public/compiled*/

let copyJsFiles = [
    'resources/assets/js/theme/jquery.min.js',
    'resources/assets/js/plugins/bootstrap/js/bootstrap.min.js',
    'resources/assets/js/plugins/flexslider/jquery.flexslider-min.js',
    'resources/assets/js/plugins/wysihtml5/wysihtml5-0.3.0.js',
    'resources/assets/js/theme/jquery.counterup.min.js',
    'resources/assets/js/theme/waypoints.min.js',
    'resources/assets/js/theme/counter.js',
    'resources/assets/js/theme/flexslider.js',
    'resources/assets/js/theme/common.js',
    'resources/assets/js/theme/wysihtml.js',
    'resources/assets/js/theme/file.js',
    'resources/assets/js/theme/login.tab.js',
];

copyJsFiles.forEach(function (file) {
    let copyPath = file.replace('resources/assets', 'public/dist');
    mix.copy(file, copyPath);
});

mix.scripts(compiledJsFiles, 'public/dist/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/dist/css/app.css')
    .copy('resources/assets/img', 'public/dist/img')
    .version();

if (!mix.inProduction()) {

    /*mix.browserSync('stars.localhost');*/

    mix.webpackConfig({
        devtool: "source-map"
    })
        .sourceMaps()

}