/*
  gulpfile.js
  ===========
  Instead of managing one giant configuration file responsible
  for creating and configuring all tasks, each task has been broken out into
  its own file in gulpfile.js/tasks.

  To add a new task:
  1) Add a new task file to the 'tasks' directory.
  2) Update this file to load the task via getTask()
*/

var gulp = require('gulp'),

$ = require('gulp-load-plugins')();

// Reference native plugins alongside Gulp plugins
$.browserSync = require('browser-sync').create();
$.del = require('del');
$.runSequence = require('run-sequence');
$.fs = require('node-fs');
$.fse = require('fs-extra');

// Load task from submodule
function getTask(task) {
  return require('./tasks/' + task)(gulp, $);
}

gulp.task('init', getTask('init'));