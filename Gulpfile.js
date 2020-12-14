'use strict';
/* node_modules are local and used on multiple projects, please change location as required */
var gulp         = require('~/node_modules/gulp'),
        sass         = require('~/node_modules/gulp-sass'),
        plumber      = require('~/node_modules/gulp-plumber'),
        notify       = require('~/node_modules/gulp-notify'),
        livereload = require('~/node_modules/gulp-livereload');

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
            .pipe(sass().on('error', sass.logError));

    return stream
            .pipe(gulp.dest('./assets/css/'));
});

// listener task
gulp.task('watch', function(){
    livereload.listen();
    gulp.watch('./resources/sass/*.scss', gulp.series('styles'));

});