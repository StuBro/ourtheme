var gulp = require('gulp');
var compass = require('gulp-compass');
var minifyCss = require('gulp-minify-css');
var concatJs = require('gulp-concat');
var rename = require('gulp-rename');
var minifyJs = require('gulp-uglify');

// scope of me
 var jsFiles = 'app/js/jsSrc/',
     jsPlugins = 'app/js/jsPlugins';

// end scope vars
gulp.task('t1',function () {
    console.log('gulp')
})

gulp.task('scripts',function () {
   return gulp.src([
       'app/js/jsPlugins/jquery-1.9.1.js',
       'app/js/jsSrc/app.js'
   ])
       .pipe(concatJs('allScripts.js'))
       .pipe(gulp.dest('src/'))
       .pipe(rename('scripts.min.js'))
       .pipe(minifyJs())
       .pipe(gulp.dest('src'))

});

gulp.task('compass',function () {
    return gulp.src('app/styles/sass/*')
    .pipe(compass({
       config_file:'app/styles/config.rb',
        css:'app/styles/stylesheets',
        sass:'app/styles/sass'

    }))
        .pipe(minifyCss())
        .pipe(gulp.dest(''))
});