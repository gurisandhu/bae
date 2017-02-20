var gulp = require ('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-ruby-sass'),
	imagemin = require('gulp-imagemin'),
	browserSync = require('browser-sync').create();


// Show error function for Script and Style
function errorLog(error) {
	console.error.bind(error);
	this.emit('end');
}
gulp.task('serve', ['styles'], function(){
	browserSync.init({
		proxy: "http://localhost:8888/baewp/"
	});
	gulp.watch('compressed/*.css').on('change', browserSync.reload);
	gulp.watch('compressed/*.js').on('change', browserSync.reload);
	gulp.watch('compressed/images/*').on('change', browserSync.reload);
	gulp.watch("*.php").on('change', browserSync.reload);
});
// Script Minified
gulp.task('script', function(){
		gulp.src('script.js')
		.pipe(uglify())
	 	.on('error', errorLog)		
		.pipe(gulp.dest('compressed'));
});


// Style: SASS to CSS and Minified

gulp.task('styles', function() {
	 return sass('theme.scss', {
	  	style: 'compressed'
	 })
	 	.on('error', errorLog)
	  	.pipe(gulp.dest('compressed'))
	  	.pipe(browserSync.stream());
});﻿

// Image compressed tasks
gulp.task('imagemin', function(){
	gulp.src('images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('compressed/images'));
});

// Watch Task
// Watches Scripts
gulp.task('watch', ['styles'], function(){
	gulp.watch('script.js', ['script']);
	gulp.watch('*.scss', ['styles']);
	gulp.watch('images/*', ['imagemin']);
});

gulp.task('default', ['script', 'styles', 'imagemin', 'watch', 'serve']);
