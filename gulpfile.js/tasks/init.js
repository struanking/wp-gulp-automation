var config = require('../config'),

themeDir = '../' + config.themeName,

themeBoilerplate = 'theme-boilerplate'

module.exports = function (gulp, $) {
  return function () {
    console.log('Creating "' + config.themeName + '" theme');
    $.fs.mkdirSync(themeDir, 0765, true);
    $.fse.copy(themeBoilerplate, themeDir + '/', function (err) {
      if (err) return console.error('Error! ' + err)
      console.log('success!')
    });
  };
};
