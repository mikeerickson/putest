/* Gulpfile
 * Mike Erickson
 */

var gulp   = require('gulp'),
	notify   = require('gulp-notify'),
phpunit    = require('gulp-phpunit'),
	 filelog = require("gulp-filelog"),
codecept   = require('gulp-codeception');

gulp.task('phpunit', function() {
	var options = {notify: true, debug: true};
	gulp.src('app/tests/*.php')
		.pipe(phpunit('', options))
		.on('error', notify.onError({
			title: "Testing Failed",
			message: "Error(s) occurred during testing..."
		}));
});

gulp.task('codecept', function() {
	var options = {notify: true, debug: true, testSuite: 'unit'};
	gulp.src('app/tests/*.php')
		.pipe(filelog())
		.pipe(codecept('', options))
		.on('error', notify.onError({
			title: "Testing Failed",
			message: "Error(s) occurred during test..."
		}))
		.pipe(notify({
			title: "Testing Passed",
			message: "All tests have passed..."
		}));

});
