
/*
  Exports config settings for the environment e.g. dev or prod
  Specific task configs are set in the configs directory
*/

var pkg = require('../package.json'),

minimist = require('minimist'),

objectAssign = require('object-assign'),

paramSettings = {
  alias: {'env': 'e'},
  default: {'env': 'dev'}
},

// @example: gulp [task] --env=dev or gulp [task] -e dev
// will provide an "env" key with a value of "dev"
params = minimist(process.argv.slice(2), paramSettings),

settings = {

  defaults: {
    themeName: pkg.themeName,
    reports: './reports/',
    src: './src/'
  },

  dev: {
    lint: true,
    minify: false,
    dest: './build/',
    tests: {
      autoWatch: true,
      singleRun: false
    }
  },
  
  prod: {
    lint: true,
    minify: true,
    dest: './dist/',
    tests: {
      autoWatch: false,
      singleRun: true
    }
  }
};

module.exports = objectAssign(settings.defaults, settings[params.env]);