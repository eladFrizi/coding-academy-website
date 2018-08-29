var gulp = require('gulp');
var useref = require('gulp-useref');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var replace = require('gulp-replace');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cache = require('gulp-cache');
var del = require('del');
var htmlmin = require('gulp-htmlmin');
var runSequence = require('run-sequence');
var uncss = require('gulp-uncss');



gulp.task('htmlmin', function () {
  return gulp.src('dist/*.html')
    .pipe(htmlmin({ collapseWhitespace: true, removeComments: true }))
    .pipe(gulp.dest('dist'));

})


gulp.task('clean:dist', function () {
  return del.sync('dist');
})

gulp.task('unusedcss', function() {
  return gulp.src('dist/styles.min.css')
      .pipe(uncss({
          html: ['dist/index.html', 'dist/about.html', 'dist/grads.html','dist/q&a.html',
        'dist/staff.html' , 'dist/thank.html',
        'dist/for-employers.html','dist/landing1.html','dist/nextCourse.html'],
        timeout      : 5000,
      }
    ))
      .pipe(gulp.dest('./dist'));
});




gulp.task('cssjs', function () {
  return gulp.src('*.+(html|php)')
    // return gulp.src('index.html')
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('dist'))
});

gulp.task('simple', function () {
  return gulp.src('*.+(html|php)')
    .pipe(gulp.dest('dist'))

})

// minifed all images- take a lot of time
gulp.task('images', function () {
  return gulp.src('images/**/*.+(png|jpg|gif|svg|ico)')
    .pipe(cache(imagemin({
      interlaced: true
    })))
    .pipe(gulp.dest('dist/images'))
});


// This task bring the mailer php files into the dist
gulp.task('include', function () {
  return gulp.src('include/**/*.+(php)')
    .pipe(gulp. dest('dist/include'))
});



gulp.task('fonts', function () {
  return gulp.src('css/fonts/*.+(*)')
    .pipe(gulp.dest('dist/fonts/'));
});

gulp.task('swipercss', function () {
  return gulp.src('css/swiper.css')
    .pipe(gulp.dest('dist/css'))
})


gulp.task('slider-background', function () {
  return gulp.src('css/slider-background.css')
    .pipe(gulp.dest('dist/css'))
})

gulp.task('data', function () {
  return gulp.src('projs.json')
    .pipe(gulp.dest('dist'))
})

gulp.task('showcase', function () {
  return gulp.src('showcase.+(js|css)')
    .pipe(gulp.dest('dist'))
})


gulp.task('build', function () {
  runSequence('clean:dist',
    ['showcase', 'data', 'swipercss', 'fonts', 'cssjs', 'slider-background', 'include', 'images'],
    'htmlmin'
  )
})
