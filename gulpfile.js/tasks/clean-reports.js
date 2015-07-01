var config = require('../config'),

del = require('del');

// TODO: clean out any .DS_Store files after build

module.exports = function (gulp, $) {
  return function () {
    return del([config.reports + '**/*'], function (err, deletedFiles) {
      if (err) {
        console.log('Error!: ' + err);
      }
    });
  };
};