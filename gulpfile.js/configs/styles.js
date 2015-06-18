var config = require('../config');

module.exports = {
  src: [config.src + '**/*.css'],
  dest: config.dest,
  rename: [config.themeName, 'min', 'css'].join('.')
};