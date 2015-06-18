var config = require('../config');

module.exports = {
  src: [config.src + '**/*.js'],
  dest: config.dest,
  lint: config.lint,
  minify: config.minify,
  rename: [config.themeName, 'min', 'js'].join('.')
};