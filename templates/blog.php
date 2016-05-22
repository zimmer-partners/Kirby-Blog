<?php snippet('header'); ?>

<section class="content blog">
  
  <header>
    <h1><?= $page->title()->html(); ?></h1>
    <?= $page->text()->kirbytext(); ?>
  </header>
  
  <main class="main" role="main">

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article>
    <h1>
      <time datetime="<?= $article->date('%Y-%m-%dT%H:%M:%S') ?>"><?= $article->date('%d.%m.%y') ?></time>: 
      <?= $article->title()->html() ?>
    </h1>
    <p>
      <?php if (str::length(strip_tags($article->text()->kirbytext())) > 300): ?>
        <?= $article->text()->excerpt(300); ?>&nbsp;
        <a class="more" href="<?= $article->url(); ?>">Weiter lesen</a>
      <?php else: ?>
        <?= $article->text()->excerpt(300); ?>
      <?php endif; ?>
    </p>
  </article>
  
  <?php endforeach ?>
  
  </main>
  
</section>

<?php snippet('footer'); ?>