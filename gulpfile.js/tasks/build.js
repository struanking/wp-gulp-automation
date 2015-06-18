module.exports = function (gulp, $) {
  return function () {
    return $.runSequence('clean', ['images', 'scripts', 'styles', 'theme']);
  };
};