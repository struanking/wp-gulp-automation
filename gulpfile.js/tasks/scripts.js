var config = require('../configs/scripts');

/*
  jscs uses Airbnb rules - https://github.com/airbnb/javascript
 */

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.src)
      //.pipe($.jscs('.jscs'))
      .pipe($.if(config.lint, $.jshint('.jshintrc')))
      .pipe($.if(config.lint, $.jshint.reporter('jshint-stylish')))
      .pipe($.if(config.minify, $.concat(config.rename)))
      .pipe($.if(config.minify, $.uglify()))
      .pipe(gulp.dest(config.dest));
  };
};
