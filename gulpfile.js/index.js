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

$ = require('gulp-load-plugins')(),

runSequence = require('run-sequence');

// TODO: Probably a good idea to add gulp-plumber https://www.npmjs.com/package/gulp-plumber

// Reference native node plugins alongside Gulp plugins
//$.eslint = require('eslint'); // Not currently using

// Load task from submodule
function getTask(task) {
  return require('./tasks/' + task)(gulp, $);
}

// ----------------------------------------------------------------------------------- //
// Tasks
// ----------------------------------------------------------------------------------- //

// Still needed??
// Initialise project using themeName in package.json
gulp.task('init', getTask('init'));

// QA
gulp.task('a11y', getTask('a11y'));
gulp.task('plato', getTask('plato'));

// Tests
gulp.task('test', getTask('test'));

// TO DOs
gulp.task('todo', getTask('todo'));

// Utility
gulp.task('clean', getTask('clean'));
gulp.task('clean-reports', getTask('clean-reports'));

// Build / Deploy
gulp.task('browserSync', getTask('browserSync'));
gulp.task('images', getTask('images'));
gulp.task('scripts', getTask('scripts'));
gulp.task('styles', getTask('styles'));
gulp.task('sass', getTask('sass'));
gulp.task('theme', getTask('theme'));

// Build a working copy of the theme for developing
gulp.task('build', ['clean'], function() {
  return runSequence(['images', 'scripts', 'styles', 'theme']);
});

// Build the production distribution
//gulp.task('dist', ['clean'], getTask('dist')); // TODO write dist task

// Serve dev environment
gulp.task('watch', ['browserSync'], getTask('watch'));

// Default task chain: build -> browsersync -> watch
gulp.task('default', ['watch']);

// QA Reports: accessibility audit -> JavaScript code quality
gulp.task('reports', ['clean-reports'], function() {
  runSequence('a11y', 'plato');
});