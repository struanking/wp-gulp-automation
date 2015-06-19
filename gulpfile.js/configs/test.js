var config = require('../config');

module.exports = {
  configFile: '../../../karma.conf.js',
  autoWatch: config.tests.autoWatch,
  singleRun: config.tests.singleRun
};