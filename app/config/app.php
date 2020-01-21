<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    |
    | This services defined by this app.
    |
    */
    'services' => [
        'Enqueue' => \App\Frontend\Enqueue::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Providers
    |--------------------------------------------------------------------------
    |
    | The providers for this app.
    |
    */
    'providers' => [
        'ThemeProvider' => \App\Providers\ThemeProvider::class,
        'ThemeSupportProvider' => \Mimicry\Themesupport\ThemeSupportProvider::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Extra config files.
    |--------------------------------------------------------------------------
    */
    'config_files' => [
        'theme-support' => 'support.php'
    ],

    /*
    |--------------------------------------------------------------------------
    | Tags directory path.
    |--------------------------------------------------------------------------
    |
    | Path to the directory where your tags/theme functions are stored.
    | Must be relative the the themes root directory,
    */
    'tags_dir_path' => 'app/tags',

];
