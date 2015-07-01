var config = require('../config');

module.exports = {
  src: [config.src + '**/*(*.js|*.html|*.php)'],
  dest: './'
};