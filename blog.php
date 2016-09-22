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
