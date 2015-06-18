/* ----------------------------------------------------------------------------------- //
  gulpfile.js
  ===========
  Instead of managing one giant configuration file responsible
  for creating and configuring all tasks, each task has been broken out into
  its own file in gulpfile.js/tasks.

  To add a new task:
  1) Add a new task file to the 'tasks' directory.
  2) Update this file to load the task via getTask()
// ----------------------------------------------------------------------------------- */

var gulp = require('gulp'),

$ = require('gulp-load-plugins')();

// Reference native node plugins alongside Gulp plugins
$.browserSync = require('browser-sync').create();
//$.del = require('del'); // using gulp-clean now due to dependency order running tasks
$.eslint = require('eslint');
$.jscs = require('jscs');
$.runSequence = require('run-sequence');

// Load task from submodule
function getTask(task) {
  return require('./tasks/' + task)(gulp, $);
}

// Initialise project using themeName in package.json
gulp.task('init', getTask('init'));

// ----------------------------------------------------------------------------------- //
// Tasks
// ----------------------------------------------------------------------------------- //

// QA
gulp.task('a11y', getTask('a11y'));
gulp.task('plato', getTask('plato'));

// Tests

// Utility
gulp.task('clean', getTask('clean'));
gulp.task('clean-reports', getTask('clean-reports'));

// Build / Deploy
gulp.task('browserSync', getTask('browserSync'));
gulp.task('images', getTask('images'));
gulp.task('scripts', getTask('scripts'));
gulp.task('styles', getTask('styles'));
gulp.task('theme', getTask('theme'));

// Build a working copy of the theme for developing
gulp.task('build', getTask('build'));

// Build the production distribution
//gulp.task('dist', getTask('dist'));

// Serve dev environment
gulp.task('watch', ['browserSync'], getTask('watch'));

// Default task chain: build -> browsersync -> watch
gulp.task('default', ['watch']);

// QA Reports: accessibility audit -> JavaScript code quality
gulp.task('reports', ['clean-reports'], function() {
  $.runSequence('a11y', 'plato');
});