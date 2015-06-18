var config = require('../configs/images');

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.src)
      .pipe($.changed(config.dest))
      .pipe(gulp.dest(config.dest));
  };
};