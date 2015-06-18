var config = require('../config');

/*server: {
    baseDir: config.root
  },
  browser: ["google chrome", "firefox"]
}*/

module.exports = {
  browser: ['google chrome', 'firefox'],
  files: [config.dest + '/**', '!' + config.dest + '/**.map'], // Exclude map files
  notify: false, // In-line notifications (the blocks of text saying whether you are connected to the BrowserSync server or not)
  open: true, // Set to false if you don't like the browser window opening automatically
  port: 3000, // Port number for the live version of the site; default: 3000
  proxy: 'localhost:8888', // Using a proxy instead of the built-in server as we have server-side rendering to do via WordPress
  watchOptions: {
      debounceDelay: 2000 // Delay for events called in succession for the same file/event
    }
};
