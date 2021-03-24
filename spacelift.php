<?php

/**
 * @file
 * Contains a basic scaffolding script.
 */

if ($argc < 2 || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
  spacelift_drush_help('drush:spacelift');
  $command = spacelift_drush_command()['spacelift'];
  print(PHP_EOL . 'Arguments' . PHP_EOL);

  foreach ($command['arguments'] as $argument => $argument_description) {
    print("  $argument => $argument_description\n");
  }

  print(PHP_EOL . 'Options' . PHP_EOL);

  foreach ($command['options'] as $option => $option_description) {
    print("  $option  => $option_description\n");
  }

  print(PHP_EOL . 'Examples' . PHP_EOL);

  foreach ($command['examples'] as $example => $example_description) {
    print("  $example => $example_description\n");
  }

  exit;
}

drush_spacelift($argv[1]);

/**
 * Determine whether current OS is a Windows variant.
 *
 * @param string|null $os
 *   Operating system.
 *
 * @return bool
 *   Whether the current operating system is Windows.
 */
function drush_is_windows(string $os = NULL): bool {
  return strtoupper(substr($os ?: PHP_OS, 0, 3)) === 'WIN';
}

/**
 * Ensures the path has path separators native for the current operating system.
 *
 * @param string $path
 *   Raw file path.
 *
 * @return string
 *   Sanitized file path.
 */
function drush_normalize_path(string $path): string {
  if (drush_is_windows()) {
    $path = str_replace('/', '\\', strtolower($path));
  }
  else {
    $path = str_replace('\\', '/', $path);
  }

  return trim($path);
}

/**
 * Replacement for dt function.
 *
 * @param string $text
 *   Text to print after making replacements.
 * @param array $replacements
 *   Array of text replacements to make.
 */
function dt(string $text, array $replacements = []): void {
  if (!empty($replacements)) {
    foreach ($replacements as $find => $replace) {
      $text = str_replace($find, $replace, $text);
    }
  }

  print "$text\n";
}

/**
 * Create a drush_get_options function.
 */
function drush_get_options(): array {
  global $argv;
  $options = [];

  foreach ($argv as $key => $arg) {
    if (strpos($arg, '=') !== FALSE) {
      dt('Error: Please do not use equal signs in your options.');
      exit;
    }

    switch ($arg) {
      case '-machine-name':
      case '--machine-name':
        $options['machine-name'] = $argv[$key + 1];
        break;

      case '-description':
      case '--description':
        $options['description'] = $argv[$key + 1];
        break;

      case '-path':
      case '--path':
        $options['path'] = $argv[$key + 1];
        break;
    }
  }

  return $options;
}

/**
 * Replacement for drush_get_option().
 *
 * @param string $option
 *   The name of the option to retrieve.
 *
 * @return mixed
 *   Option value or FALSE if option doesn't exist.
 */
function drush_get_option(string $option): bool {
  $all_options_passed = drush_get_options();

  return (!empty($all_options_passed[$option])) ? $all_options_passed[$option] : FALSE;
}

/**
 * Internal function called by drush_copy_dir; do not use directly.
 *
 * @param string $src
 *   Source directory.
 * @param string $dest
 *   Destination directory.
 *
 * @return bool
 *   Returns whether the directory copy was successful.
 */
function _drush_recursive_copy(string $src, string $dest): bool {
  // All subdirectories and contents:
  if (is_dir($src)) {
    if (!drush_mkdir($dest, TRUE)) {
      return FALSE;
    }

    $dir_handle = opendir($src);

    while ($file = readdir($dir_handle)) {
      if ($file !== '.' && $file != '..') {
        if (_drush_recursive_copy("$src/$file", "$dest/$file") !== TRUE) {
          return FALSE;
        }
      }
    }

    closedir($dir_handle);
  }
  elseif (is_link($src)) {
    symlink(readlink($src), $dest);
  }
  elseif (!copy($src, $dest)) {
    return FALSE;
  }

  // Preserve file modification time.
  touch($dest, filemtime($src));

  // Preserve execute permission.
  if (!is_link($src) && !drush_is_windows()) {
    // Get execute bits of $src.
    $execperms = fileperms($src) & 0111;

    // Apply execute permissions if any.
    if ($execperms > 0) {
      $perms = fileperms($dest) | $execperms;
      chmod($dest, $perms);
    }
  }

  return TRUE;
}

/**
 * Cross-platform helper function to recursively create a directory tree.
 *
 * If $required is FALSE, then a different location should be selected, and a
 * final error message should be displayed if no usable locations can be found.*
 * If $required is TRUE, then the execution of the current command should be
 * halted if the required directory cannot be created.
 *
 * @param string $path
 *   Path to directory to create.
 * @param bool $required
 *   If TRUE, then drush_mkdir will call drush_set_error on failure.
 *
 * @return bool|void
 *   Whether directory was created
 *
 * @see drush_directory_cache()
 */
function drush_mkdir(string $path, bool $required = TRUE): bool {
  if (!is_dir($path)) {
    if (drush_mkdir(dirname($path))) {
      if (@mkdir($path)) {
        return TRUE;
      }
      elseif (is_dir($path) && is_writable($path)) {
        // The directory was created by a concurrent process.
        return TRUE;
      }
      else {
        if (!$required) {
          return FALSE;
        }

        if (is_writable(dirname($path))) {
          dt('Unable to create !dir.', ['!dir' => preg_replace('/\w+\/\.\.\//', '', $path)]);
        }
        else {
          dt('Unable to create !newdir in !dir. Please check directory permissions.', [
            '!newdir' => basename($path),
            '!dir' => realpath(dirname($path)),
          ]);
        }
      }
    }

    return FALSE;
  }
  else {
    if (!is_writable($path)) {
      if (!$required) {
        return FALSE;
      }

      dt('Directory !dir exists, but is not writable. Please check directory permissions.', ['!dir' => realpath($path)]);
    }

    return TRUE;
  }
}

/**
 * Implements hook_drush_command().
 */
function spacelift_drush_command() {
  $items = [];

  $items['spacelift'] = [
    'description' => 'Create an Spacelift-based child theme.',
    'arguments' => [
      'human_readable_name' => 'The name of your theme.',
    ],
    'options' => [
      'machine-name' => 'The machine-readable name of your theme. This will be auto-generated from the human_readable_name if omitted.',
      'description' => 'The description of your theme',
      'path' => 'Supports three options contrib, custom, none.  Defaults to "custom".',
    ],
    'examples' => [
      'php spacelift.php "My Awesome Theme"' => 'Creates a Spacelift child theme called "My Awesome Theme", using the default options.',
      'php spacelift.php "My Awesome Theme" --machine-name mat' => 'Creates a Spacelift child theme called "My Awesome Theme" with the specific machine name "mat".',
    ],
  ];

  return $items;
}

/**
 * Implements hook_drush_help().
 */
function spacelift_drush_help($section) {
  switch ($section) {
    case 'drush:spacelift':
      dt('This command will create a Spacelift child theme. See examples to get started.');
  }
}

/**
 * Generates a child theme from Spacelift.
 *
 * @param string|null $human_readable_name
 *   The name of the child theme to create.
 */
function drush_spacelift($human_readable_name = NULL) {
  // If no $human_readable_name provided, abort.
  if (!$human_readable_name) {
    dt('Theme name missing. See help using \'drush help spacelift\'.');
    return;
  }

  // Determine the machine name.
  $machine_name = drush_get_option('machine-name');

  if (!$machine_name) {
    $machine_name = $human_readable_name;
  }

  $machine_name = str_replace(' ', '_', strtolower($machine_name));  $search = [
    // Remove characters not valid in function names.
    '/[^a-z0-9_]/',
    // Functions must begin with an alpha character.
    '/^[^a-z]+/',
  ];
  $machine_name = preg_replace($search, '', $machine_name);

  // Description of theme.
  $description = (drush_get_option('description')) ? trim(drush_get_option('description')) : 'A forward-thinking, developer-focused base theme for Drupal with functionality from <a href="https://emulsify.info">Emulsify</a>.';

  // Determine the path to the new theme.
  $theme_path = 'custom';

  if ($path = drush_get_option('path')) {
    switch (trim($path)) {
      case 'contrib':
        $theme_path = 'contrib';
        break;

      case 'none':
        $theme_path = '';
        break;

      case 'custom':
      default:
        $theme_path = 'custom';
        break;
    }

    $theme_path = trim($path);
  }

  // Create your new theme.
  $status = drush_spacelift_create($human_readable_name, $machine_name, $description, $theme_path);

  // Notify the user of failure.
  if ($status === FALSE) {
    print("Your theme was not successfully created.\n");
    exit(1);
  }
}

/**
 * Create frontend theme.
 *
 * @param string $human_readable_name
 *   A string that will be used to represent the human readable name.
 * @param string $machine_name
 *   A string that will be used to name directories, files, and will be replaced
 *   in templates.
 * @param string $description
 *   A string that will be used as the theme description in the .info file.
 * @param string $theme_path_passed
 *   A string that will be translated into a base path for your new theme.
 *
 * @return bool
 *   A boolean representing the success or failure of the function.
 */
function drush_spacelift_create(string $human_readable_name, string $machine_name, string $description, string $theme_path_passed): bool {
  $theme_dir = substr(getcwd(), 0, strpos(getcwd(), 'themes') + 6);

  if (!empty($theme_path_passed)) {
    if ($theme_path_passed === 'none') {
      $theme_path = dirname(getcwd(), 1) . DIRECTORY_SEPARATOR . $machine_name;
    }
    else {
      $theme_path = $theme_dir . DIRECTORY_SEPARATOR . $theme_path_passed . DIRECTORY_SEPARATOR . $machine_name;

      // Phase: Validate theme dir with path is writeable.
      $theme_dir_status = _spacelift_validate_path($theme_dir . DIRECTORY_SEPARATOR . $theme_path_passed);

      if ($theme_dir_status !== TRUE) {
        return _spacelift_notify_fail('', 'Failed on Phase: Validate theme dir is writeable.');
      }
    }
  }
  else {
    $theme_path = $theme_dir . DIRECTORY_SEPARATOR . $machine_name;
  }

  // Phase: Validate theme path is writeable.
  $theme_path_status = _spacelift_validate_path($theme_path);

  if ($theme_path_status !== TRUE) {
    return _spacelift_notify_fail('', 'Failed on Phase: Validate theme path is writeable.');
  }

  // Phase: Verify there are not existing contents in the destination directory.
  $theme_path_empty_status = _spacelift_validate_path_is_empty($theme_path);

  if ($theme_path_empty_status !== TRUE) {
    return _spacelift_notify_fail('', 'Failed on Phase: Verify there are not existing contents in the destination directory.  Please either delete the contents or pick a different path by changing the machine name or using the \'--path\' option.  Use \'drush help spacelift\' for more information.');
  }

  // Phase: Make directories.
  $directories_to_make = _spacelift_get_directories_to_make();
  $directories_to_make_status = _spacelift_make_directories($directories_to_make, $theme_path);

  if ($directories_to_make_status !== TRUE) {
    return _spacelift_notify_fail('', 'Failed on Phase: Make directories.');
  }

  // Phase: Copy files.
  $files_to_copy = _spacelift_get_files_to_copy();
//  echo "Directories to make:\n";
//  print_r($files_to_copy);
  $files_to_copy_status = _spacelift_copy_files($files_to_copy, $theme_path);

  if ($files_to_copy_status !== TRUE) {
    return _spacelift_notify_fail('', 'Failed on Phase: Copy files.');
  }

  // Phase: Alter files.
  $alterations = _spacelift_get_alterations($human_readable_name, $machine_name, $description);
  $files_to_alter = _spacelift_get_files_to_alter();
  $files_to_alter_status = _spacelift_alter_files($theme_path, $files_to_alter, $alterations);

  if ($files_to_alter_status !== TRUE) {
    return _spacelift_notify_fail('', 'Failed on Phase: Alter files.');
  }

  // Phase: Rename files.
  $files_to_rename = _spacelift_get_files_to_rename();
  $files_to_rename_status = _spacelift_rename_files($theme_path, $machine_name, $files_to_rename);

  if ($files_to_rename_status !== TRUE) {
    return _spacelift_notify_fail('', 'Failed on Phase: Rename files.');
  }

  // Phase 7: Return success message to the user.
  return _spacelift_notify_success($human_readable_name, $theme_path);
}

/**
 * Gets alterations (string replacements).
 *
 * This function supports both directories and individual files.  Alterations
 * happen in sequential order so you can replace something that was previously
 * replaced.
 *
 * @param string $human_readable_name
 *   A string representing the human readable name.
 * @param string $machine_name
 *   A string representing the machine name.
 * @param string $description
 *   A string representing the desired description.
 *
 * @return array
 *   An array with a key representing the string to be replaced and value
 *   representing the string to replace it with.
 */
function _spacelift_get_alterations($human_readable_name, $machine_name, $description) {
  return [
    '{{Starter}}' => $human_readable_name,
    '{{starter}}' => $machine_name,
    'hidden: true' => '',
  ];
}

/**
 * Returns an array of files and directories to make string replacements within.
 *
 * @return array
 *   A array representing files and directories to be altered.
 */
function _spacelift_get_files_to_alter() {
  // Slim files and directories declaration.
  $default_array = [
    '{{starter}}.breakpoints.yml',
    '{{starter}}.info.yml',
    '{{starter}}.theme',
    '{{starter}}.libraries.yml',
    '.storybook/manager.js',
    '.storybook/{{starter}}Theme.js',
    'config/install/{{starter}}.settings.yml',
    'package.json',
    'composer.json',
  ];

  // If we would like to have a bare copy we use the slim option.
  if (drush_get_option('slim') === TRUE) {
    return $default_array;
  }
  else {
    return array_merge($default_array, [
      'base-components',
      'templates',
    ]);
  }
}

/**
 * Get directories to make.
 *
 * @return array
 *   An array of directories to make.
 */
function _spacelift_get_directories_to_make() {
  // If we would like to have a bare copy we use the slim option.
  if (drush_get_option('slim') === TRUE) {
    return [
      'base-components',
      'base-components/00-base',
      'base-components/01-atoms',
      'base-components/02-molecules',
      'base-components/03-organisms',
      'base-components/04-templates',
      'base-components/05-pages',
      'images',
      'images/icons',
      'templates',
    ];
  }
  else {
    return [];
  }
}

/**
 * Gets files to copy.
 *
 * This function supports both directories and individual files.
 *
 * The following directories/files will never be copied:
 * dist/
 * node_modules/
 * github.com/
 * composer.json
 * LICENSE
 *
 * @return array
 *   An array of files to copy.
 */
function _spacelift_get_files_to_copy() {
  // Slim files and directories declaration.
  $default_array = [
    'fonts',
    'util',
    'webpack',
    '.editorconfig',
    '.eslintignore',
    '.eslintrc.yml',
    '.gitignore',
    '.npmrc',
    '.nvmrc',
    '.prettierignore',
    'babel.config.js',
    'composer.json',
    'default.aluminum.json',
    'package.json',
    'postcss.config.js',
    'prettier.config.js',
    'screenshot.png',
    '{{starter}}.breakpoints.yml',
    '{{starter}}.info.yml',
    '{{starter}}.libraries.yml',
    '{{starter}}.theme',
  ];

  // If we would like to have a bare copy we use is slim option.
  if (drush_get_option('slim') === TRUE) {
    return array_merge($default_array, [
      'base-components/style.scss',
    ]);
  }
  else {
    return array_merge($default_array, [
      '.storybook',
      'base-components',
      'config',
      'dist',
      'images',
      'src',
      'templates',
      'README.md',
      'screenshot.png',
      'webpack.dev.js',
      'webpack.prod.js',
    ]);
  }
}

/**
 * Get files to rename.
 *
 * @return array
 *   An array of files to rename.
 */
function _spacelift_get_files_to_rename() {
  // Slim files and directories declaration.
  $default_array = [
    '{{starter}}.breakpoints.yml',
    '{{starter}}.info.yml',
    '{{starter}}.libraries.yml',
    '{{starter}}.theme',
    '.storybook/{{starter}}Theme.js',
    'config/install/{{starter}}.settings.yml',
  ];

  // If we would like to have a bare copy we use the slim option.
  if (drush_get_option('slim') === TRUE) {
    return array_merge($default_array, []);
  }
  else {
    return array_merge($default_array, []);
  }
}

/**
 * Alter strings within files.
 *
 * @param string $theme_path
 *   A string representing the destination theme path.
 * @param array $files_to_alter
 *   An array representing the files that will be altered.
 * @param array $alterations
 *   An array of alteration that will be processed in sequential order on all
 *   files, this means that you can replace previous replacements.
 * @param bool $absolute
 *   A boolean representing if the files to alter are represented as relative
 *   or absolute paths.
 * @param int $depth
 *   How many levels deep to go.
 *
 * @return bool
 *   A boolean representing the success or failure of the function.
 */
function _spacelift_alter_files(string $theme_path, array $files_to_alter = [], array $alterations = [], $absolute = FALSE, int $depth = 0): bool {
  if (empty($files_to_alter) || empty($alterations)) {
    return TRUE;
  }

  foreach ($files_to_alter as $file_to_replace) {
    if ($absolute === TRUE) {
      $file_type = filetype(realpath($file_to_replace));
      $file_path = $file_to_replace;
    }
    else {
      $file_type = filetype($theme_path . DIRECTORY_SEPARATOR . $file_to_replace);
      $file_path = $theme_path . DIRECTORY_SEPARATOR . $file_to_replace;
    }

    if ($file_type === 'dir') {
      $files = scandir($file_path);
      $files = array_splice($files, 2);

      foreach ($files as $file) {
        $processed_file = [$file_path . DIRECTORY_SEPARATOR . $file];
        $alter_status = _spacelift_alter_files($theme_path, $processed_file, $alterations, TRUE, $depth + 1);

        if ($alter_status === FALSE) {
          return FALSE;
        }
      }
    }
    elseif ($file_type === 'file') {
      $string_replace_status = _spacelift_file_str_replace($file_path, array_keys($alterations), $alterations);

      if ($string_replace_status === FALSE) {
        return FALSE;
      }
    }
  }

  // If we make it here return success.
  return TRUE;
}

/**
 * Make directories.
 *
 * @param array $directories
 *   An array of directories (strings) to make.
 * @param string $destination_path
 *   A string representing the destination path.
 *
 * @return bool
 *   A boolean representing the success or failure of the function.
 */
function _spacelift_make_directories(array $directories = [], string $destination_path = ''): bool {
  // Check for invalid settings and return an error.
  if (empty($destination_path)) {
    _spacelift_notify_fail('', "Invalid parameter passed to _spacelift_make_directories().");

    return FALSE;
  }

  // The $directories parameter can be empty and valid, return success.
  if (empty($directories)) {
    return TRUE;
  }

  // Copy desired files.
  foreach ($directories as $directory_to_make) {
    $directory_path = drush_normalize_path($destination_path . DIRECTORY_SEPARATOR . $directory_to_make);

    // Check if path is or can be writeable and exists, if not, return FALSE.
    if (!_spacelift_validate_path($directory_path)) {
      return FALSE;
    }
  }

  // If there were not issues return success.
  return TRUE;
}

/**
 * Copy files.
 *
 * @param array $files
 *   An array of files (strings) to copy.
 * @param string $destination_path
 *   A string representing the destination path.
 *
 * @return bool
 *   A boolean representing the success or failure of the function.
 */
function _spacelift_copy_files(array $files = [], string $destination_path = ''): bool {
  // Check for invalid settings and return an error.
  if (empty($destination_path)) {
    return _spacelift_notify_fail('', "Invalid parameter passed to _spacelift_copy_files().");
  }

  // The $files parameter can be empty and valid, return success.
  if (empty($files)) {
    return TRUE;
  }

  // Copy desired files.
  foreach ($files as $files_to_copy) {
    $status = _drush_recursive_copy(__DIR__ . DIRECTORY_SEPARATOR . 'STARTER' . DIRECTORY_SEPARATOR . $files_to_copy, $destination_path . DIRECTORY_SEPARATOR . $files_to_copy);

    // Check if copy succeeded, if not, return FALSE.
    if (!$status) {
      return FALSE;
    }
  }

  // Return success.
  return TRUE;
}

/**
 * Rename files.
 *
 * @param string $theme_path
 *   A string representing the destination theme path.
 * @param string $machine_name
 *   A string that will be used in file names.
 * @param array $files_to_rename
 *   An array that represents the files to be processed.  The array is expected
 *   to be provided as an indexed array of relative files paths.
 *
 * @return bool
 *   A boolean representing success or failure of the rename.
 */
function _spacelift_rename_files(string $theme_path, string $machine_name, array $files_to_rename = []): bool {
  foreach ($files_to_rename as $file_to_rename_path) {
    $file_original_path = $theme_path . DIRECTORY_SEPARATOR . $file_to_rename_path;
    $file_new_path = $theme_path . DIRECTORY_SEPARATOR . str_replace('{{starter}}', $machine_name, $file_to_rename_path);

    if (strpos($file_new_path, '.yml.txt')) {
      $file_new_path = substr($file_new_path, 0, strpos($file_new_path, '.txt'));
    }

    rename($file_original_path, drush_normalize_path($file_new_path));
  }

  return TRUE;
}

/**
 * Replace strings in a file.
 *
 * @param string $file_path
 *   A string representing the original file path to have replacements
 *   performed on.
 * @param array $find
 *   An array representing the search for values in the replacement process.
 * @param array $replace
 *   An array that will replace the $find strings.
 *
 * @return bool
 *   A boolean representing success or failure of the replacement.
 */
function _spacelift_file_str_replace(string $file_path, array $find, array $replace): bool {
  $file_path = drush_normalize_path($file_path);
  $file_contents = file_get_contents($file_path);
  $file_contents = str_replace($find, $replace, $file_contents);
  file_put_contents($file_path, $file_contents);

  return TRUE;
}

/**
 * Validate that a path is writeable, creating the directory if necessary.
 *
 * @param string $path
 *   A string representing the path to verify exists and is writeable.
 *
 * @return bool
 *   A boolean representing success or failure.
 */
function _spacelift_validate_path(string $path): bool {
  // Check for success, if not, log the error and return FALSE.
  if (file_exists($path) === FALSE) {
    $return = mkdir($path);
  }
  else {
    $return = TRUE;
  }

  if ($return === FALSE) {
    _spacelift_notify_fail($path);
  }

  return $return;
}

/**
 * Validate that a path is empty.
 *
 * @param string $path
 *   A string representing the path to verify is empty.
 *
 * @return bool
 *   A boolean representing if the path is empty or not.
 */
function _spacelift_validate_path_is_empty(string $path): bool {
  if (!is_readable($path)) {
    return FALSE;
  }

  return (count(scandir($path)) === 2);
}

/**
 * Notifies the user of failure.
 *
 * @param string $path
 *   An optional string representing the path that failed. This function can
 *   be used to just send a message to the user without path replacements.
 * @param string $message
 *   An optional string to replace the default message.
 *
 * @return bool
 *   Always return false in the case we use this function as a return value.
 */
function _spacelift_notify_fail($path = '', $message = ''): bool {
  // Set a default message for the most common error.
  if (empty($message)) {
    // Notify user of the path write error.
    $message = 'There was an error writing to "!path".  This is normally due to permissions on one of the base directories or "!path" directory not allowing the web server to write data.  You can use the "chmod" command to implement either a temporary or permanent fix for this.';
  }

  // Set the path if one was passed.
  if (!empty($path) && is_string($path)) {
    dt($message, ['!path' => $path]);
  }

  // We return false here to represent failure.
  return FALSE;
}

/**
 * Notifies the user of success.
 *
 * @param string $human_readable_name
 *   A string that will be returned to the user as their theme name.
 * @param string $theme_path
 *   A string that will show where to find their new theme.
 *
 * @return bool
 *   Always TRUE in the case we want to use this function as a return value.
 */
function _spacelift_notify_success(string $human_readable_name, string $theme_path): bool {
  // Notify user of the newly created theme.
  $message = 'Successfully created the Spacelift child theme "!name" created in: !path, you can now run \'yarn\' or \'npm install\' to install.';
  dt($message, [
    '!name' => $human_readable_name,
    '!path' => $theme_path,
  ]);

  // We return true here to represent success.
  return TRUE;
}
