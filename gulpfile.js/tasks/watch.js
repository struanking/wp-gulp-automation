var images = require('../configs/images').src,
  scripts = require('../configs/scripts').src,
  styles = require('../configs/styles').src,
  theme = require('../configs/theme').src;

module.exports = function (gulp, $) {
  return function () {
    gulp.watch(images, ['images']);
    gulp.watch(scripts, ['scripts']);
    gulp.watch(styles, ['styles']);
    gulp.watch(theme, ['theme']);
  };
};