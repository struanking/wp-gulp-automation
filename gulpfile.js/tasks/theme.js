var config = require('../configs/theme');

module.exports = function (gulp, $) {
  return function () {

    var assets = $.useref.assets();

    /*return gulp.src(config.src)
      .pipe($.changed(config.dest))
      .pipe($.if(config.minify, $.htmlReplace({
        mainCss: config.cssFileName,
        vendorJs: 'js/vendor.js'
      })))*/
    return gulp.src(config.src)
      .pipe(assets)
      .pipe($.rev())
      .pipe(assets.restore())
      .pipe($.useref())
      .pipe($.revReplace({
        "replaceInExtensions": [".html", ".php"],
        "prefix": "<?php echo get_stylesheet_directory_uri(); ?>"
      }))
      .pipe(gulp.dest(config.dest));
  };
};