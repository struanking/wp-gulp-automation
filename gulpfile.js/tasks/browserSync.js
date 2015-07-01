var config = require('../configs/browserSync'),

browserSync = require('browser-sync').create();

module.exports = function (gulp, $) {
  return function () {
    browserSync.init(config);
  };
};