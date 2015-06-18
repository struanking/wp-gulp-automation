/*
  https://www.npmjs.com/package/a11y
  https://www.npmjs.com/package/gulp-a11y
 */

var config = require('../configs/a11y'),

exec = require('child_process').exec,

fs = require('fs');

module.exports = function (gulp, $) {
  return function () {

    fs.mkdir(config.output, 0744, function(err) {
        if (err) {
            if (err.code == 'EEXIST') {
              console.log(null); // ignore the error if the folder already exists
            } else {
              console.log(err); // something else went wrong
            }
        }
    });

    return exec(['a11y', config.src, '>', config.output + config.reportName].join(' '), function() {
      console.log('Accessibility audit report can be found here: ' + config.output + config.reportName);
    });
  };
};
