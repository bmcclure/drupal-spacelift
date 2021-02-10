<?php

/**
 * @file
 * Drush subtheme generation functionality for the Spacelift theme.
 *
 * Extends some entities user preprocess hooks and offers some helper functions.
 */

/**
 * Implements hook_drush_command().
 */
function spacelift_drush_command() {
  $items = array();

  $items['spacelift-generate'] = array(
    'description' => 'Create a spacelift sub-theme',
    'aliases' => array('sgt'),
    'arguments' => array(
      'name' => 'Your sub-theme name',
    ),
    'options' => array(
      'machine_name' => 'A machine-readable name for your theme, optional. Machine name must be lowercase only, with underscores instead of spaces.',
      'description' => 'Your sub-theme description',
    ),
    'examples' => array(
      'drush sgt "custom theme name"' => 'Create a sub-theme with the default options.',
      'drush sgt "foo bar" "foo_bar" --description="My custom spacelift theme."' => 'Create a sub-theme with additional options.',
    ),
  );

  return $items;
}

/**
 * Returns a valid machine name based on the inputs provided to Drush.
 *
 * @param string $name
 *   The name of the theme.
 * @param string $machine_name
 *   An optional machine name if already defined.
 *
 * @return string
 *   The machine name after all processing has been completed.
 */
function drush_spacelift_generate_machine_name($name, $machine_name = '') {
  if (empty($machine_name)) {
    $machine_name = $name;
  }

  $machine_name = strtolower($machine_name);
  $machine_name = preg_replace('/[^a-z0-9_-]+/', '', $machine_name);
  $machine_name = str_replace('-', '_', $machine_name);

  return $machine_name;
}

/**
 * Prints usage text about the "sgt" command.
 *
 * @return string
 *   The usage text string.
 */
function drush_spacelift_usage_text() {
  return 'USAGE:\tdrush sgt [name] --machine_name=[machine_name !OPTIONAL] --description=[description !OPTIONAL]';
}

/**
 * Create a spacelift sub-theme.
 *
 * @param string $name
 *   The name of the theme.
 */
function drush_spacelift_generate($name) {
  if (empty($name)) {
    drush_set_error(dt("Please provide a name for the sub-theme.\n" . drush_spacelift_usage_text() . "\n"));

    return;
  }

  $machine_name = drush_spacelift_generate_machine_name($name, drush_get_option('machine_name'));
  $description = drush_get_option('description');

  $spacelift_path = drush_get_context('DRUSH_DRUPAL_ROOT') . '/' . drupal_get_path('theme', 'spacelift');
  $subtheme_path = dirname($spacelift_path) . '/' . $machine_name;

  // Make a fresh copy of the subtheme.
  $s = drush_copy_dir("$spacelift_path/STARTER/", $subtheme_path);
  if (empty($s)) {
    return;
  }

  // Rename files and fill in the theme machine name.
  drush_op('rename', "$subtheme_path/STARTER.info.yml.txt", "$subtheme_path/$machine_name.info.yml");
  drush_op('rename', "$subtheme_path/STARTER.libraries.yml", "$subtheme_path/$machine_name.libraries.yml");
  drush_op('rename', "$subtheme_path/STARTER.theme", "$subtheme_path/$machine_name.theme");
  drush_op('rename', "$subtheme_path/config/install/STARTER.settings.yml", "$subtheme_path/config/install/$machine_name.settings.yml");
  drush_op('rename', "$subtheme_path/css/STARTER.css", "$subtheme_path/css/$machine_name.css");
  drush_op('rename', "$subtheme_path/src/scss/STARTER.scss", "$subtheme_path/src/scss/$machine_name.scss");

  // Update the settings.yml file.
  drush_op('spacelift_file_str_replace', "$subtheme_path/config/install/$machine_name.settings.yml", 'STARTER', "$machine_name");

  // Update the .info file.
  drush_op('spacelift_file_str_replace', "$subtheme_path/$machine_name.info.yml", 'Spacelift Starter', "$name");

  // Change the description of the theme.
  if (!empty($description)) {
    drush_op('spacelift_file_str_replace', "$subtheme_path/$machine_name.info.yml", 'Custom sub-theme based on the the Spacelift base theme.', "$description");
  }

  // Replace STARTER in info.yml.
  drush_op('spacelift_file_str_replace', "$subtheme_path/$machine_name.info.yml", 'STARTER', "$machine_name");

  // Rename functions in .theme.
  drush_op('spacelift_file_str_replace', "$subtheme_path/$machine_name.theme", 'STARTER', "$machine_name");

  // Replace STARTER in package.json.
  drush_op('spacelift_file_str_replace', "$subtheme_path/package.json", 'STARTER', "$machine_name");

  // Replace THEMENAME in STARTER.scss.
  drush_op('spacelift_file_str_replace', "$subtheme_path/src/scss/$machine_name.scss", 'THEMENAME', "$machine_name");

  // Replace STARTER in the libraries.yml.
  drush_op('spacelift_file_str_replace', "$subtheme_path/$machine_name.libraries.yml", 'STARTER', "$machine_name");

  // Notify user of the newly created theme.
  drush_print(dt("\n!name sub-theme was created in !path. \n",
    array(
      '!name' => $name,
      '!path' => $subtheme_path,
    )
  ));
}

/**
 * Internal helper: Replace strings in a file.
 *
 * @param string $file_path
 *   The path to the file to replace strings within.
 * @param string $find
 *   The text to find within the file.
 * @param string $replace
 *   The text to replace the $find string with in the file.
 */
function spacelift_file_str_replace($file_path, $find, $replace) {
  $file_contents = file_get_contents($file_path);
  $file_contents = str_replace($find, $replace, $file_contents);
  file_put_contents($file_path, $file_contents);
}

/**
 * Implements hook_drush_help().
 */
function spacelift_drush_help($section) {
  switch ($section) {
    case 'drush:spacelift-sub-theme':
      return dt("Create a sub-theme based on Spacelift.");
  }
}
