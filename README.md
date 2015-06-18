# wp-gulp-automation
Starter Front-End Automation Workflow

## Pre-requisites
* Node installed (version >= 0.12.4)
* Gulp installed (local version >= 3.9.0 and CLI version >= 3.8.11)

## Install
* Clone the repo and use as a starting point for your project.
* Copy to your own project.
* Amend package.json for any plug-ins you don't want.
** At minimum change the `themeName` property to match the name of your theme.**
* Open a command line for your project root.
* Run `npm install`
* If using the accessibility plug-in "a11y" then also run `npm install -g a11y`

## Usage
* **Only edit files in `src` directory**

## WordPress Specific
* Name theme
* Run init?
* Create a symlink from `build` directory to the WordPress `wp-content/themes` directory.

`ln -s ~/projects/my-theme/build ~/projects/my-wordpress/wp-content/themes/my-theme`