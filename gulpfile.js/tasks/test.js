var config = require('../configs/test'),

karma = require('karma').server;

module.exports = function (gulp, $) {
  return function () {
    karma.start(config, function(exitCode) {
      if (exitCode) {
        console.log('Karma has exited with ' + exitCode);
      }
      process.exit(exitCode); 
    })
  };
};
