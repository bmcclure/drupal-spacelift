SUMMARY
-------

Spacelift is a forward-thinking, developer-focused base theme for Drupal 8 
providing a minimalistic, standards-based framework to ease headaches, 
encourage component-based code reuse, and help you take your 
next Drupal project to new heights.

Some of the features provided by this theme are:

* Encourages the use of the Neat grid framework and Bourbon library for SASS.
* Loosely utilizes SUIT CSS's class naming conventions and encourages breaking 
down site into reusable components using SASS and Eyeglass.
* Very lightweight and highly modular (There are no styles in the base theme 
itself, and the theme uses Eyeglass with Gulp to easily include SCSS from Node 
modules).
* Offers an optional full front-end workflow (Utilizes the `aluminum-capsule` 
node module to give you a full front-end build environment for things such as 
SASS, Javascript, Modernizr, custom icon fonts, BrowserSync support, Drush 
integration, and much more).

For a full description of the theme, visit the project page:
  https://www.drupal.org/sandbox/bmcclure/2834174

To submit bug reports and feature suggestions, or to track changes:
  https://www.drupal.org/project/issues/2834174


REQUIREMENTS
------------

None.

Recommended:

* NodeJS 6+
* `gulp-cli` node module installed globally


INSTALLATION
------------

1. Install Spacelift as usual, see https://www.drupal.org/node/2804903 for 
further information.
2. Install NodeJS on your development machine and ensure you can run the 
`npm` command.
3. Install the Gulp CLI globally with `npm install --global gulp-cli`
4. Create a subtheme from Spacelift. See the BUILD A THEME WITH DRUSH section 
below for more information.
5. In your new subtheme directory, copy 'default.aluminum.json' to 
'aluminum.json' and configure the theme compilation settings there.
6. From within your subtheme directory, run 'npm install' on the command line.
7. From within your subtheme directory, run 'gulp' to start the default watch 
task, or 'gulp --tasks' to see a list of all possible tasks.

When the 'watch' task is running, saving any watched files (such as 
src/scss/*.scss or src/js/*.js) will trigger a re-compile and clear the cache 
if you have Drush integration enabled.

You can also run the 'build' task to trigger a rebuild of all assets 
immediately.

CONFIGURATION
-------------

You may customize aluminum.json to support a wide array of front-end build 
requirements.

Additional front-end build needs can be handled by directly adding tasks to 
Gulpfile.js.

Once your subtheme is installed, it can be configured like normal under the 
Appearance settings of your site.


BUILD A THEME WITH DRUSH
------------------------

It is highly encouraged to use Drush to generate a sub theme for editing. Do 
not edit the parent 'spacelift' theme directly, so that you can continue to 
receive updates for the base theme without losing your work.

1. Enable the Spacelift theme and set as default. You can unset it as default 
after you are done with step 2.
2. Enter the drush command: `drush sgt [THEMENAME] [Description !Optional]`
3. Drush will generate your brand new theme in a directory under `/themes`.
4. You may not enable your new theme and make it the default if you wish.


**CONTACT**

Current maintainers:
* [bmcclure](https://www.drupal.org/user/278485)

---

<p align="center"><img src="https://raw.githubusercontent.com/emulsify-ds/documentation/master/.gitbook/assets/logo.png" width="400"/></p>

Emulsify is an open-source tool for creating design systems with reusable components and clear guidelines for teams. Emulsify helps organizations scale their design while reducing cost, streamlining workflows, and improving accessibility.

# Emulsify Drupal

### Storybook development, Webpack build, and Drupal 8 theme

**Emulsify Drupal** provides a [Storybook](https://storybook.js.org/) component library, a [Webpack](https://webpack.js.org/) development environment, and a Drupal 8 starterkit theme. It can be used as a standalone prototyping tool or inside a Drupal installation. It supports both Twig and React components!

## Documentation

[docs.emulsify.info](https://docs.emulsify.info/)

### Quick Links

1. [Installation](https://docs.emulsify.info/installation/design-system)
2. [Usage](https://docs.emulsify.info/usage/commands)

## Demo

1. [Storybook](http://storybook.emulsify.info/)

## Contributing

### [Code of Conduct](https://github.com/emulsify-ds/emulsify-drupal/blob/master/CODE_OF_CONDUCT.md)

The project maintainers have adopted a Code of Conduct that we expect project participants to adhere to. Please read the full text so that you can understand what actions will and will not be tolerated.

### Contribution Guide

Please also follow the issue template and pull request templates provided. See below for the correct places to post issues:

1. [Emulsify Drupal](https://github.com/emulsify-ds/emulsify-drupal/issues)
2. [Emulsify Twig Extensions](https://github.com/emulsify-ds/emulsify-twig-extensions/issues)
3. [Emulsify Twig Drupal Module](https://www.drupal.org/project/issues/emulsify_twig)

### Committing Changes

To facilitate automatic semantic release versioning, we utilize the [Conventional Changelog](https://github.com/conventional-changelog/conventional-changelog) standard through Commitizen. Follow these steps when commiting your work to ensure semantic release can version correctly.

1. Stage your changes, ensuring they encompass exactly what you wish to change, no more.
2. Run the `commit` script via `yarn commit` or `npm run commit` and follow the prompts to craft the perfect commit message.
3. _Rejoice!_ For now your commit message will be used to create the changelog for the next version that includes that commit.

## Author

Emulsify&reg; is a product of [Four Kitchens &mdash; We make BIG websites](https://fourkitchens.com).
