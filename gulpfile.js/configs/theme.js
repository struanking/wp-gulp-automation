var config = require('../config');

module.exports = {
  src: [config.src + '**/*.php'],
  dest: config.dest
};