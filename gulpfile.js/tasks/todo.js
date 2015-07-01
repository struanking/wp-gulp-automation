var config = require('../configs/todo');

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.src)
      .pipe($.todo())
      .pipe(gulp.dest(config.dest));
  };
};