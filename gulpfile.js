var   gulp = require('gulp'),
      sass = require('gulp-sass'),
      browserSync = require('browser-sync').create(),
      cleanCSS = require('gulp-clean-css'),
      cleanhtml = require('gulp-cleanhtml'),
      imagemin = require('gulp-imagemin'),
      cache = require('gulp-cache'),
      runSequence = require('run-sequence'),
      uglify = require('gulp-uglify'),
      del = require('del');


gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

gulp.task('browserSync', function() {
  browserSync.init({
 	proxy: "localhost/films_plein_air/app/",
	port: 80
  })
})

gulp.task('watch', ['browserSync', 'sass'], function(){
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/*.html', browserSync.reload);
  gulp.watch('app/*.php', browserSync.reload);
  gulp.watch('app/js/**/*.js', browserSync.reload);
  // Other watchers
})

gulp.task('minCss', function(){
  return gulp.src('app/css/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest('dist/css'));
});

gulp.task('cleanhtml', function(){
  gulp.src('app/*.php')
    .pipe(cleanhtml())
    .pipe(gulp.dest('dist/'));
});

gulp.task('images', function(){
  return gulp.src('app/images/**/*.+(png|jpg|gif|svg)')
  .pipe(cache(imagemin()))
  .pipe(gulp.dest('dist/images'));
});

gulp.task('fonts', function() {
  return gulp.src('app/fonts/**/*')
  .pipe(gulp.dest('dist/fonts'));
});

gulp.task('vendor', function() {
  return gulp.src('app/vendor/**/*')
  .pipe(gulp.dest('dist/vendor'));
});

gulp.task('carouselJs', function() {
  return gulp.src('app/js/carousel.js')
  .pipe(gulp.dest('dist/js'));
});

gulp.task('uglifyJs', function(){
  return gulp.src('app/js/script.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});

gulp.task('clean:dist', function() {
  return del.sync('dist');
});



gulp.task('build', function (callback) {
  runSequence('clean:dist', 'sass',
    ['vendor', 'images', 'fonts', 'cleanhtml', 'minCss', 'carouselJs', 'uglifyJs'],
    callback
  );
});
