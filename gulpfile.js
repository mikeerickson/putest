/* Gulpfile
 * Mike Erickson
 */

var gulp   = require('gulp'),
  notify   = require('gulp-notify'),
  phpunit  = require('gulp-phpunit'),
  filelog  = require("gulp-filelog"),
  codecept = require('gulp-codeception');

gulp.task('phpunit', function() {
	var options = {notify: true, debug: true};
	gulp.src('phpunit.xml')
		.pipe(phpunit(options))
		.on('error', notify.onError({
			title: "Testing Failed",
			message: "Error(s) occurred during testing..."
		}));
});

gulp.task('codecept', function() {
	var options = {notify: true, debug: true, skipSuites: 'api'};
	var options = {notify: true, debug: true, skipSuites: ['api', 'acceptance']};
//	var options = {notify: true, debug: true, testClass: 'app/tests/functional/TestByClassCest.php'};
	gulp.src('codeception.yml')
		.pipe(filelog())
			.pipe(codecept('', options))
		.on('error', notify.onError({
			title: "Testing Failed",
			message: "Error(s) occurred during test..."
		}));

//		.pipe(notify({
//			title: "Testing Passed",
//			message: "All tests have passed..."
//		}));

});

// set watch task to look for changes in test files
gulp.task('watch', function () {
	gulp.watch('./app/tests/**/*.php', ['phpunit','codecept']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['phpunit', 'codecept', 'watch']);
