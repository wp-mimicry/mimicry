<?php
namespace App\Frontend;

use Mimicry\Foundation\Service;

final class Enqueue extends Service {

    static function optional()
    {
        return !\is_admin();
    }


    public function register()
    {
        return [
            ['wp_enqueue_scripts', 'enqueueStyles'],
            ['wp_enqueue_scripts', 'enqueueScripts'],
        ];
    }


    public function enqueueStyles()
    {
        \wp_enqueue_style('styles', theme_uri() . 'style.css', null, '1.0.0', 'all');
    }


    public function enqueueScripts()
    {
        \wp_enqueue_script('scripts', theme_uri() . 'script.js', null, '1.0.0', true);
    }

}