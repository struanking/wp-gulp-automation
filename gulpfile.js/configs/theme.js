var config = require('../config'),

cssFileName = require('../configs/sass').rename;

module.exports = {
  src: [config.src + '**/*.php'],
  dest: config.dest,
  minify: config.minify,
  cssFileName: 'css/' + cssFileName
};