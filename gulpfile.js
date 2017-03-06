var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
	return gulp.src('gulp/styles/**/*.scss')
	.pipe(sass())
	.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
	.pipe(gulp.dest('gulp/styles'))
});

gulp.task('admin-sass', function(){
	return gulp.src('admin/gulp/styles/**/*.scss')
	.pipe(sass())
	.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
	.pipe(gulp.dest('admin/gulp/styles'))
});

gulp.task('scripts', function(){
	return gulp.src('gulp/scripts/**/*.js')
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('js'));
});

gulp.task('admin-scripts', function(){
	return gulp.src('admin/gulp/scripts/**/*.js')
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('admin/js'));
});

gulp.task('styles', ['sass'], function(){
	return gulp.src('gulp/styles/**/*.css')
		.pipe(cssnano())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('css'));
});

gulp.task('admin-styles', ['admin-sass'], function(){
	return gulp.src('admin/gulp/styles/**/*.css')
		.pipe(cssnano())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('admin/css'));
});

gulp.task('watch', ['styles', 'admin-styles', 'scripts', 'admin-scripts'], function(){
	gulp.watch('gulp/styles/**/*.scss', ['styles']);
	gulp.watch('admin/gulp/styles/**/*.scss', ['admin-styles']);
	gulp.watch('gulp/scripts/**/*.js', ['scripts']);
	gulp.watch('admin/gulp/scripts/**/*.js', ['admin-scripts']);
});

gulp.task('default', ['watch']);
