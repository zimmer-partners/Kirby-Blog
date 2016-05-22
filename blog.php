<?php 

// =======================
// = Component Registery =
// =======================

$kirby->set('template', 'blog', __DIR__ . '/templates/blog.php');
$kirby->set('template', 'article', __DIR__ . '/templates/article.php');
$kirby->set('blueprint', 'blog', __DIR__ . '/blueprints/blog.php');
$kirby->set('blueprint', 'article', __DIR__ . '/blueprints/article.php');

