<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function getHeaderLogo()
    {
        return get_template_directory_uri() . '/assets/images/logo.svg';
    }

    public static function getLanguageOption()
    {
        if( !function_exists('pll_the_languages') ) return;

        return array(
            'language_menu' => pll_the_language( array ('raw' => 1 ) ),
            'current_language' => pll_current_language()
        );
    }
}
