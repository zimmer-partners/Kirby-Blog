<?php snippet('header'); ?>

<section class="content blog">
  
  <header>
    <h1><?= $page->title()->html(); ?></h1>
    <?php if ($page->hasFutureChildren()): ?>
      <?= $page->future_introduction()->kirbytext(); ?>
    <?php else: ?>
      <?= $page->future_no_articles()->kirbytext(); ?>
    <?php endif; ?>
  </header>

  <main class="main" role="main">
  
    <?php snippet('future-section'); ?>
    
    <?php if ($page->past_enabled()->bool()): ?>
      <?php snippet('past-section'); ?>
    <?php endif ?>
    
  </main>
  
</section>

<?php snippet('footer'); ?>