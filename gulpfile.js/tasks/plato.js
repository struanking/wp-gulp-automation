var plato = require('plato'),

config = require('../configs/scripts');

module.exports = function (gulp, $) {
  return function () {
    plato.inspect(config.src, config.reportOutput, {}, function callback() {
      console.log('JavaScript analysis report can be found here: ' + config.reportOutput);
    });
  };
};