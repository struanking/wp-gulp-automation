var config = require('../config');

module.exports = {
  src: config.src + 'scss/**/*.scss',
  dest: config.dest + 'css/',
  browserSupport: ['last 3 versions'], // https://github.com/ai/browserslist
  outputStyle: config.minify ? 'compress' : 'expanded',
  sourceMap: config.sourceMap || false,
  rename: [config.themeName, 'min', 'css'].join('.')
};