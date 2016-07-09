<?php 

// =======================
// = Component Registery =
// =======================

$kirby->set('template', 'blog', __DIR__ . '/templates/blog.php');
$kirby->set('template', 'article', __DIR__ . '/templates/article.php');
$kirby->set('blueprint', 'blog', __DIR__ . '/blueprints/blog.php');
$kirby->set('blueprint', 'article', __DIR__ . '/blueprints/article.php');
$kirby->set('snippet', 'future-section', __DIR__ . '/snippets/future-section.php');
$kirby->set('snippet', 'past-section', __DIR__ . '/snippets/past-section.php');
$kirby->set('snippet', 'article-teaser', __DIR__ . '/snippets/article-teaser.php');

// ===================
// = Model Registery =
// ===================

require_once(__DIR__ . '/models/BlogPage.php');
$kirby->set('page::model', 'blog', 'BlogPage');
require_once(__DIR__ . '/models/ArticlePage.php');
$kirby->set('page::model', 'article', 'ArticlePage');


field::$methods['tidy'] = function($field, $length = 140, $mode = 'chars', $ellipsis = '…') {
  // Defaults
  $tidy_defaults = array(
    'indent' => TRUE,
    'output-xhtml' => FALSE,
    'show-body-only' => TRUE,
    'clean' => FALSE,
    'tab-size' => 2,
    'new-blocklevel-tags' => 'a',
    'wrap' => 0
  );
  // Read configuration entry
  if (c::get('tidy')) {
    $text = $field;
    // Mode algorith taken from Kirby core
    if(strtolower($mode) == 'words') {
      $text = str::excerpt(kirbytext($text), 0, false, $ellipsis);
      if(str_word_count($text, 0) > $length) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = str::substr($text, 0, $pos[$length]);
      }
    } else {
      $text = str::excerpt(kirbytext($text), $length, false, $ellipsis);
    }
    // Tidy up potentially broken HTML
    $tidy = tidy_parse_string(
      $text, 
      $tidy_defaults, 
      'UTF8'
    );
    $tidy->cleanRepair();
    return ($tidy . "\n");
  } else {
    // Ususal method
    return excerpt($field, $length, $mode);
  }
};
