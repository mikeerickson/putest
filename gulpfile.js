/* Gulpfile
 * Mike Erickson
 */

var gulp   = require('gulp'),
  notify   = require('gulp-notify'),
  phpunit  = require('gulp-phpunit'),
  codecept = require('gulp-codeception'),
  phpspec  = require('gulp-phpspec');

gulp.task('phpunit', function() {
	var options = {debug: true};
	gulp.src('phpunit.xml')
		.pipe(phpunit('', options))
		.on('error', notify.onError({
			title: "Testing Failed",
			message: "Error(s) occurred during testing..."
		}));
});

gulp.task('phpspec', function() {
  var options = {debug: true, formatter: 'pretty'};

	gulp.src('phpspec.yml')
		.pipe(phpspec('',options));
});

gulp.task('codecept', function() {
	var options = {debug: false, testSuite: 'functional'};
//	var options = {debug: true, skipSuites: 'api'};
//	var options = {notify: true, debug: true, skipSuites: ['api', 'acceptance']};
//	var options = {notify: true, debug: true, testClass: 'app/tests/functional/TestByClassCest.php'};
	gulp.src('codeception.yml')
		.pipe(codecept('', options))
});

// set watch task to look for changes in test files
gulp.task('watch', function () {
	gulp.watch('./app/tests/**/*.php', ['phpunit','codecept']);
});

// execute all tests (PHPUnit and Codeception)
gulp.task('test', ['phpunit', 'codecept', 'phpspec']);

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['phpunit', 'codecept', 'phpspec', 'watch']);
