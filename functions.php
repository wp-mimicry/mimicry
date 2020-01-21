<?php
/*
 * Check if WordOress is loaded.
 */
if (!defined('ABSPATH'))
    die();

/*
 * Load the composer autoload file.
 */
require_once __DIR__ . '/vendor/autoload.php';

/*
 * Initialize Mimicry.
 */
(new \Mimicry\Mimicry())->init(array(
    'app_path' => 'app',
    'config_dir_path' => 'app/config',
    'config_file' => 'app.php'
));

/*
 * It's recommended to add your theme functions in the app/tags folder.
 * See: __link to tags documentation here__
 */

?>
