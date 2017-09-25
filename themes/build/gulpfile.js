var gulp = require('gulp');
var sass = require('gulp-sass');
var concatCss = require('gulp-concat-css');
var watch = require('gulp-watch');

gulp.task('default', function() {
  // place code for your default task here
  console.log("Hello Kino");
});


//Compile sass
gulp.task('sass', function () {
  return gulp.src('./scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('../jyr/'));

});

gulp.task('watch', function(){
  gulp.watch('./scss/**/*.scss', ['sass']); 
  // Other watchers
});

gulp.task('default', ['sass']);
gulp.watch('watch', ['watch', 'sass']);