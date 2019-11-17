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
    'resources/js/plugins/bootstrap/js/bootstrap.min.js',
    'resources/js/plugins/flexslider/jquery.flexslider-min.js',
    'resources/js/theme/jquery.counterup.min.js',
    'resources/js/theme/jquery.waypoints.js',
    'resources/js/theme/counter.js',
    'resources/js/theme/jquery.flexslider.js',
    'resources/js/theme/common.js',
    'resources/js/theme/file.js',
    'resources/js/select2.js',
    'resources/js/counterJs.js',
    'resources/js/theme/login.tab.js',

    'resources/js/student.js',
];

let compiledJsFiles = [];

jsFiles.forEach(function (file) {
    let compilePath = file.replace('resources', 'public/compiled');

    mix.js(file, compilePath);

    compiledJsFiles.push(compilePath);
});

/*Files will be just copied to /public/compiled*/

let copyJsFiles = [

];

copyJsFiles.forEach(function (file) {
    let copyPath = file.replace('resources/assets', 'public/dist');
    mix.copy(file, copyPath);
});

// let mergeJs = [
//     'node_modules/pnotify/dist/es/PNotify.js',
// ];
//
// compiledJsFiles.concat(mergeJs);

mix.scripts(compiledJsFiles, 'public/dist/js/app.js')
    .sass('resources/sass/app.scss', 'public/dist/css/app.css')
    .copy('resources/img', 'public/dist/img')
    .version();

mix.copy('resources/js/jquery-3.3.1.js', 'public/dist/js/jquery.js')

/* Style files */

let cssFiles =[
    'resources/css/bootstrap/css/bootstrap.min.css',
    'resources/css/flexslider/flexslider.css',
    'resources/css/font-awesome/css/font-awesome.css',
    'node_modules/animate.css/animate.css',
    'resources/css/themify/themify-icons.css',
    'resources/css/select2-bootstrap.css',
    // 'resources/css/wysihtml5/wysihtml5.css',
    // 'resources/css/editor.css',
    'resources/css/robojob.css',
    'resources/css/style.css',
    'resources/css/responsive.css',

    // 'resources/css/select2.min.css',
    'node_modules/select2-bootstrap-theme/src/build.scss',


    'resources/css/student.scss',
    'resources/css/student.css',
];

// mix.sass('resources/sass/app.scss', 'public/dist/css/app.css')
    mix.styles(cssFiles, 'public/dist/css/app.css');

/* Coping images to the public directory */

mix.copy('resources/img', 'public/dist/img');

/* Coping other files to the public directory */

let otherFiles =[
    'resources/css/flexslider/fonts/flexslider-icon.svg',
    'resources/css/flexslider/fonts/flexslider-icon.woff',
    'resources/css/font-awesome/fonts/FontAwesome.otf',
    'resources/css/font-awesome/fonts/fontawesome-webfont.eot',
    'resources/css/font-awesome/fonts/fontawesome-webfont.svg',
    'resources/css/font-awesome/fonts/fontawesome-webfont.ttf',
    'resources/css/font-awesome/fonts/fontawesome-webfont.woff',
    'resources/css/font-awesome/fonts/fontawesome-webfont.woff2',
    'resources/css/themify/font/themify.eot',
    'resources/css/themify/font/themify.svg',
    'resources/css/themify/font/themify.ttf',
    'resources/css/themify/font/themify.woff',
    'resources/fonts/ionicons/ionicons.eot',
    'resources/fonts/ionicons/ionicons.svg',
    'resources/fonts/ionicons/ionicons.ttf',
    'resources/fonts/ionicons/ionicons.woff',

];

mix.copy(otherFiles, 'public/dist/fonts');
mix.copy('resources/fonts', 'public/dist/fonts');

if (!mix.inProduction()) {

    /*mix.browserSync('stars.localhost');*/

    mix.webpackConfig({
        devtool: "source-map"
    })
        .sourceMaps()

}