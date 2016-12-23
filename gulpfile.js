var gulp = require('gulp');
var sass = require('gulp-sass');
var uglifyjs = require('gulp-uglifyjs');
var concat = require('gulp-concat');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');

gulp.task('sass', function(){
	return gulp.src('gulp/styles/**/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('gulp/styles'))
});

gulp.task('scripts', function(){
	return gulp.src('gulp/scripts/**/*.js')
		.pipe(concat('scripts.min.js'))
		.pipe(uglifyjs())
		.pipe(gulp.dest('js'));
});

gulp.task('styles', ['sass'], function(){
	return gulp.src('gulp/styles/**/*.css')
		.pipe(cssnano())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('css'));
});

gulp.task('watch', ['styles', 'scripts'], function(){
	gulp.watch('gulp/styles/**/*.scss', ['styles']);
	gulp.watch('gulp/scripts/**/*.js', ['scripts']);
});
