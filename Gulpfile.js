'use strict';

var gulp         = require('gulp'),
        sass = require('gulp-sass'),
        plumber = require('gulp-plumber'),
        notify = require('gulp-notify'),
        livereload = require('gulp-livereload'),
        autoprefixer = require('autoprefixer'),
        sourcemaps = require('gulp-sourcemaps'),
        postcss = require('gulp-postcss'),
        csso = require('gulp-csso');

var config = {
    src           : './resources/sass/style.scss',
    dest          : './assets/css/'
};

// Error message
var onError = function (err) {
    notify.onError({
        title   : 'Gulp',
        subtitle: 'Failure!',
        message : 'Error: <%= error.message %>',
        sound   : 'Beep'
    })(err);

    this.emit('end');
};

// Compile CSS
gulp.task('styles', function () {
    var stream = gulp
            .src([config.src])
            .pipe(plumber({errorHandler: onError}))
            .pipe(sass({
                outputStyle: 'nested',
                precision: 10,
                includePaths: ['.'],
                onError: console.error.bind(console, 'Sass error:')
            }));

    return stream
            .pipe(sourcemaps.init())
            .pipe(postcss([ autoprefixer() ]))
            .pipe(csso())
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest('./assets/css/'));
});

// listener task
gulp.task('watch', function(){
    livereload.listen();
    gulp.watch('./resources/sass/*.scss', gulp.series('styles'));

});
