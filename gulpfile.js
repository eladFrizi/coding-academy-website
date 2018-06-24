var gulp = require('gulp');
var useref = require('gulp-useref');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var replace = require('gulp-replace');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');

gulp.task('cssjs', function () {
  return gulp.src('*.+(html|php)')
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    // Minifies only if it's a CSS file
    // .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('dist'))
});

gulp.task('images', function () {
  return gulp.src('images/**/*.+(png|jpg|gif|svg|ico)')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/images'))
});

gulp.task('fonts', function () {
  return gulp.src('css/fonts/*.+(*)')
    .pipe(gulp.dest('dist/fonts/'));
});

gulp.task('swipercss', function () {
  return gulp.src('css/swiper.css')
    .pipe(gulp.dest('dist/css'))
})

gulp.task('data', function () {
  return gulp.src('projs.json')
    .pipe(gulp.dest('dist'))
})

gulp.task('showcase', function(){
  return gulp.src('showcase.+(js|css)')
    .pipe(gulp.dest('dist'))
})
  // gulp.task('js', function(){
  //   return gulp.src('./*.html')
  //     .pipe(useref())
  //     // Minifies only if it's a JavaScript file
  //     .pipe(gulpIf('*.js', uglify()))
  //     .pipe(gulp.dest('dist'))
  // });

  gulp.task('build', ['showcase','data','swipercss','fonts','images','cssjs'])