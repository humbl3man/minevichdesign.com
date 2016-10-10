(function () {
	'use strict';

	var gulp = require('gulp'),
		concat = require('gulp-concat'),
		uglify = require('gulp-uglify'),
		minifyCSS = require('gulp-minify-css'),
		rename = require('gulp-rename');


	var jsfiles = [
		'./js/vendor/jquery.min.js',
		'./js/vendor/jquery.validate.min.js',
		'./js/vendor/typed/typed.min.js',
		'./js/form_validate.js',
		'./js/landing_page.js',
		'./js/main.js'
	];

	gulp.task('concatJS', function () {
		return gulp.src(jsfiles)
			.pipe(concat('app.js'))
			.pipe(gulp.dest('./js/'));
	});

	gulp.task('minifyJS', ['concatJS'], function () {
		return gulp.src('./js/app.js')
			.pipe(uglify())
			.pipe(rename('app.min.js'))
			.pipe(gulp.dest('./js/'));
	});

	gulp.task('minifyCSS', function () {
		return gulp.src('./css/main.css')
			.pipe(minifyCSS())
			.pipe(rename('main.min.css'))
			.pipe(gulp.dest('./css/'));
	});
}());
