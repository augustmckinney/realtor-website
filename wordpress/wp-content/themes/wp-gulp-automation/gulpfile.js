var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();
var sass = require('gulp-sass'); 
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var reload = browserSync.reload;

gulp.task('default', function(){
 
    console.log('default gulp task...')
 
});

// reload BrowserSync
gulp.task('bs-reload', function () {
    browserSync.reload();
});

// start BrowserSync server
gulp.task('serve', function() {
  browserSync({
    server: {
      baseDir: '../realtors-to-the-rescue-theme/'
    },
    reloadDelay: 1000
  });
});

// comple scss into css, autoprefix and minify
 
gulp.task('sass', function () {
    gulp.src('../realtors-to-the-rescue-theme/sass/style.scss')
        .pipe(plugins.sass().on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer('last 4 versions'))
        .pipe(gulp.dest('../realtors-to-the-rescue-theme/sass/'))
 
});



// add images to build
gulp.task('img', function() {
  return gulp.src('wp-admin/images/**/*.+(png|jpg|jpeg|gif|svg)')
  // .pipe(gulp.dest('build/images/'))
})

// add js to build
gulp.task('js', function () {
  return gulp.src([
    'wp-admin/js/**/*.js'
    ])
    // .pipe(plugins.concat('main.js'))
    // .pipe(gulp.dest('build/js'));
});



 
gulp.task('default', ['sass', 'js', 'bs-reload', 'img', 'serve', 'watch']);



//watch task

gulp.task('watch', function() {
  gulp.watch('../realtors-to-the-rescue-theme/sass/*.scss', ['sass']);
  gulp.watch('js/src/*.js', ['js']);
  gulp.watch('img/src/*.{png,jpg,gif}', ['img']);
 
});


