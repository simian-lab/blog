var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('browser-sync', function() {
  var files = [
  'css/**/*.css',
  './*.php'
  ];
  browserSync(files, {
    proxy: "http://blogsimian.sim",
    notify: false
  });
});

gulp.task('sass', function() {
  return gulp.src('sass/*.scss')
  .pipe(sass({
    sourcemap: true,
    includePaths: require('node-neat').includePaths
  }))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('css'))
  .pipe(reload({stream:true}));
});

gulp.task('reload', function() {
  browserSync.reload();
});

gulp.task('watch', function() {
  gulp.watch('sass/*.scss', { interval: 500 }, ['sass']);
  gulp.watch('css/**/*.css', { interval: 500 }, ['reload']);
  gulp.watch('js/**/*.js', { interval: 500 }, ['reload']);
  gulp.watch('*.html', { interval: 500 }, ['reload']);
});

gulp.task('default', ['sass', 'browser-sync', 'watch']);