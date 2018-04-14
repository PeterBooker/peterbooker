var gulp   = require('gulp');
var es     = require('event-stream');
var $      = require('gulp-load-plugins')();

var sassPaths = [
  'node_modules/font-awesome/scss',
];

//var pkg = require('./package.json');
var banner = [
  '/**',
  ' * Theme Name: peterbooker',
  ' * Theme URI: https://www.peterbooker.com/',
  ' * Author: Peter Booker',
  ' * Author URI: https://www.peterbooker.com/',
  ' * Description: A Personal Website Theme.',
  ' * Version: 1.0.0',
  ' * License: MIT',
  ' * License URI: https://mit-license.org/',
  '**/'
].join('\n');

gulp.task('update', function () {

  return es.merge(
    //gulp.src(['node_modules/foundation-sites/dist/js/foundation.min.js']).pipe(gulp.dest('assets/js/')),
    gulp.src(['node_modules/font-awesome/fonts/*']).pipe(gulp.dest('assets/fonts/'))
    );

});

gulp.task('sass', function() {

  return gulp.src('assets/scss/**.scss')
      .pipe($.sass({
            includePaths: sassPaths
          })
          .on('error', $.sass.logError))
      .pipe($.autoprefixer({
        browsers: ['last 2 versions', 'ie >= 9']
      }))
      .pipe(gulp.dest('assets/css'));

});

gulp.task('cssmin', ['sass'], function() {

  return gulp.src('assets/css/theme.css')
      .pipe($.cssmin())
      .pipe($.header(banner))
      .pipe($.rename('style.css'))
      .pipe(gulp.dest(''));

});

gulp.task('default', ['sass', 'cssmin'], function() {

  gulp.watch(['assets/scss/**/*.scss'], ['sass', 'cssmin']);

});