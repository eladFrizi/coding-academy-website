var gulp = require('gulp');
var useref = require('gulp-useref');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var replace = require('gulp-replace');

var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');

gulp.task('css', function(){
    return gulp.src('./*.html')
      .pipe(useref())
      .pipe(gulpIf('*.js', uglify()))
      // Minifies only if it's a CSS file
      .pipe(gulpIf('*.css', cssnano()))
      .pipe(gulp.dest('dist'))
  });
  
  gulp.task('images', function(){   
    return gulp.src('images/**/*.+(png|jpg|gif|svg)')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/images'))
  });
  
  // gulp.task('js', function(){
  //   return gulp.src('./*.html')
  //     .pipe(useref())
  //     // Minifies only if it's a JavaScript file
  //     .pipe(gulpIf('*.js', uglify()))
  //     .pipe(gulp.dest('dist'))
  // });
  