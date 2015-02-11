<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '5.0');

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