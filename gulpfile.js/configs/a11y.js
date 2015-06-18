var config = require('../config');

module.exports = {
  //src: config.src + '**/*.html', // Can be a local file, url or remote url
  src: 'http://localhost:8888',
  output: config.reports + 'a11y-audit.txt'
};