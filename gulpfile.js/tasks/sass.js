var config = require('../configs/sass'),

autoprefixer = require('autoprefixer');

// TODO: linting

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.src)
      .pipe($.sourcemaps.init())
      .pipe($.sass({
        outFile: config.dest,
        outputStyle: config.outputStyle,
        sourceMap: config.sourceMap
      }).on('error', $.sass.logError))
      .pipe($.postcss([ autoprefixer({ browsers: config.browserSupport }) ]))
      .pipe($.sourcemaps.write('./maps'))
      .pipe(gulp.dest(config.dest));
  };
};