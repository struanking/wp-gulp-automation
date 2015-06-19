var config = require('../config');

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.reports).pipe($.clean());
  };
};
