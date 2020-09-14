//  Require Gulp into file and define the variable
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	rename = require('gulp-rename'),
	terser = require('gulp-terser-js'),
	gulpIf = require('gulp-if'),
	cssnano = require('gulp-cssnano'),
	watch = require('gulp-watch'),
	sourcemaps = require('gulp-sourcemaps');


//script paths
var jsFiles = 'assets/js/src/*.js',
    jsDest = 'assets/js/dest/',
    cssFiles = 'assets/css/src/*.css',
    cssDest = 'assets/css/dest/';

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
		//.pipe(sourcemaps.init({loadMaps: true}))
        .pipe(concat('scripts.js'))
        //.pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts.min.js'))
        .pipe(terser())
        .pipe(gulp.dest(jsDest));
});

gulp.task('design', function() {
	return gulp.src(cssFiles)
		.pipe(sourcemaps.init({loadMaps: true}))
		.pipe(concat('design.css'))
		.pipe(rename('design.min.css'))
		.pipe(gulpIf('*.css', cssnano()))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(cssDest));
});

gulp.task('watch', function() {
	gulp.watch(jsFiles, gulp.series('scripts'));
	gulp.watch(cssFiles, gulp.series('design'));
});