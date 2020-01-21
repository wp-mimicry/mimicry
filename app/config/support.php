<?php
return [

    /*
     * Automativ feed links.
     */
    'automatic-feed-links' => true,

    /*
     * Title tag.
     */
    'title-tag' => true,

    /*
     * Post thumbnail.
     */
    'post-thumbnails' => true,

    /*
     * Html5.
     */
    'html5' => [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'scripts',
        'styles'
    ],

    /*
     * Custom background.
     */
    'custom-background', [
        'default-color' => 'ffffff',
        'default-image' => '',
    ],

    /*
     * Custom logo.
     */
    'custom-logo', [
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ],

    /*
     * Selective refresh widgets.
     */
    'customize-selective-refresh-widgets' => true,

    /*
     * Editor align wide
     */
    'align-wide' => true,

    /*
     * Editor color palette
     */
    'editor-color-palette', [
        [
            'name' => __('strong magenta', 'themeLangDomain'),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ],
        [
            'name' => __('light grayish magenta', 'themeLangDomain'),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ],
        [
            'name' => __('very light gray', 'themeLangDomain'),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ],
        [
            'name' => __('very dark gray', 'themeLangDomain'),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ],
    ]

    // Add more https://developer.wordpress.org/block-editor/developers/themes/theme-support/

];
