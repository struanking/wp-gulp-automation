var config = require('../configs/browserSync');

module.exports = function (gulp, $) {
  return function () {
    $.browserSync.init(config);
  };
};