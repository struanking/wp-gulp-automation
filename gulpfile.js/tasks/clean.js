var config = require('../config');

// TODO: clean out any .DS_Store files after build

/*module.exports = function (gulp, $) {
  return function () {
    $.del([config.dest], function (err, deletedFiles) {
      if (err) {
        console.log('Error!: ' + err);
      } else {
        console.log('Deleted:', deletedFiles.join(', '));
      }
    });
  };
};*/

module.exports = function (gulp, $) {
  return function () {
    return gulp.src(config.dest).pipe($.clean());
  };
};