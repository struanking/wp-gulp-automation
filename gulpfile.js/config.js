var pkg = require('../package.json'),

json = require('json-file'),

themeName = json.read('package.json').get('themeName'),

config = {
  themeName: themeName
};

module.exports = config;