var config = require('../config');

module.exports = {
  src: [config.src + '**/*(*.js|*.html|*.php)', './gulpfile.js/**/*.js'],
  dest: './'
};