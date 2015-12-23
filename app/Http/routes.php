<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '5.2');

/**
 * Convert some Markdown to html...
 *
 * @param $text
 *
 * @return mixed|string
 */
function markdown($text) {
  return (new ParsedownExtra)->text($text);
}

View::composer('partials.nav', function($view)
{
  $index = app('Collective\Documentation')->getIndex(DEFAULT_VERSION);
  $view->with('index', $index);
});