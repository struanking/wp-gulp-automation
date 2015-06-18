var config = require('../configs/styles');

// TODO: linting, sass, autoprexfixer

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.src)
      .pipe($.if(config.minify, $.concat(config.rename)))
      .pipe($.if(config.minify, $.csso()))
      .pipe(gulp.dest(config.dest));
  };
};
