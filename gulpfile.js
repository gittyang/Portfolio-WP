
const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// compile scss into css
function style() {
    return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
}

// watch files for changes
function watch() {
    browserSync.init({
      notify: false,
      proxy: 'http://portfolio.local/',
      ghostMode: false
    });

    // if scss changes -> call style function
    gulp.watch('./scss/**/*.scss', style)
    // if php changes, reload page
    gulp.watch('./**/*.php').on('change',browserSync.reload);
}

exports.style = style;
exports.watch = watch;