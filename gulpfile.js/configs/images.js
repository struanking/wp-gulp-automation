var config = require('../config');

module.exports = {
  src: [config.src + '**/*(*.gif|*.jpg|*.jpeg|*.png|*.svg)'],
  dest: config.dest
};