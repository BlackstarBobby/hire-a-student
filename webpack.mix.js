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
    'resources/assets/js/plugins/bootstrap/js/bootstrap.min.js',
    // 'resources/assets/js/plugins/wysihtml5/wysihtml5-0.3.0.js',
    'resources/assets/js/plugins/flexslider/jquery.flexslider-min.js',
    // 'resources/assets/js/theme/waypoints.min.js',
    'resources/assets/js/theme/jquery.counterup.min.js',
    'resources/assets/js/theme/jquery.waypoints.js',
    // 'resources/assets/js/theme/flexslider.js',
    'resources/assets/js/theme/counter.js',
    'resources/assets/js/theme/jquery.flexslider.js',
    // 'resources/assets/js/theme/wysihtml.js',
    'resources/assets/js/theme/common.js',
    'resources/assets/js/theme/file.js',
    // 'resources/assets/js/robojob/robojob.js',
    'resources/assets/js/ckeditor.js',
    'resources/assets/js/select2.js',
    // 'resources/assets/js/select2.full.js',
    'resources/assets/js/theme/login.tab.js',

    'resources/assets/js/student.js',
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
    .sass('resources/assets/sass/app.scss', 'public/dist/css/app.css')
    .copy('resources/assets/img', 'public/dist/img')
    .version();

mix.copy('resources/assets/js/jquery-3.3.1.js', 'public/dist/js/jquery.js')

/* Style files */

let cssFiles =[
    'resources/assets/css/bootstrap/css/bootstrap.min.css',
    'resources/assets/css/flexslider/flexslider.css',
    'resources/assets/css/font-awesome/css/font-awesome.css',
    'node_modules/animate.css/animate.css',
    'resources/assets/css/themify/themify-icons.css',
    'resources/assets/css/select2-bootstrap.css',
    // 'resources/assets/css/wysihtml5/wysihtml5.css',
    // 'resources/assets/css/editor.css',
    'resources/assets/css/robojob.css',
    'resources/assets/css/style.css',
    'resources/assets/css/responsive.css',

    // 'resources/assets/css/select2.min.css',
    'node_modules/select2-bootstrap-theme/src/build.scss',


    'resources/assets/css/student.css',
    'resources/assets/css/student.scss',
];

// mix.sass('resources/assets/sass/app.scss', 'public/dist/css/app.css')
    mix.styles(cssFiles, 'public/dist/css/app.css');

/* Coping images to the public directory */

mix.copy('resources/assets/img', 'public/dist/img');

/* Coping other files to the public directory */

let otherFiles =[
    'resources/assets/css/flexslider/fonts/flexslider-icon.svg',
    'resources/assets/css/flexslider/fonts/flexslider-icon.woff',
    'resources/assets/css/font-awesome/fonts/FontAwesome.otf',
    'resources/assets/css/font-awesome/fonts/fontawesome-webfont.eot',
    'resources/assets/css/font-awesome/fonts/fontawesome-webfont.svg',
    'resources/assets/css/font-awesome/fonts/fontawesome-webfont.ttf',
    'resources/assets/css/font-awesome/fonts/fontawesome-webfont.woff',
    'resources/assets/css/font-awesome/fonts/fontawesome-webfont.woff2',
    'resources/assets/css/themify/font/themify.eot',
    'resources/assets/css/themify/font/themify.svg',
    'resources/assets/css/themify/font/themify.ttf',
    'resources/assets/css/themify/font/themify.woff',
    // 'resources/assets/css/themify/font/glyphicons-halflings-regular.eot',
    // 'resources/assets/css/themify/font/glyphicons-halflings-regular.svg',
    // 'resources/assets/css/themify/font/glyphicons-halflings-regular.ttf',
    // 'resources/assets/css/themify/font/glyphicons-halflings-regular.woff',
    // 'resources/assets/css/themify/font/glyphicons-halflings-regular.woff2',

];

mix.copy(otherFiles, 'public/dist/fonts');
mix.copy('resources/assets/fonts', 'public/dist/fonts');

if (!mix.inProduction()) {

    /*mix.browserSync('stars.localhost');*/

    mix.webpackConfig({
        devtool: "source-map"
    })
        .sourceMaps()

}