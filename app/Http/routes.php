<?php

/**
 * Set the default documentation version...
 */
if (!defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', config('versions.latest'));
}

/**
 * Convert some Markdown to html...
 *
 * @param $text
 *
 * @return mixed|string
 */
if (!function_exists('markdown')) {
    function markdown($text) {
      return (new ParsedownExtra)->text($text);
    }
}

View::composer('partials.nav', function($view)
{
  $index = app('Collective\Documentation')->getIndex(DEFAULT_VERSION);
  $view->with('index', $index);
});
