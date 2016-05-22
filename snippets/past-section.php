<hr />

<section class="past-articles">
  
  <header>
    <h1><?= $page->past_title()->html(); ?></h1>
    <?php if ($page->hasPastChildren()): ?>
      <?= $page->past_introduction()->kirbytext(); ?>
    <?php else: ?>
      <?= $page->past_no_articles()->kirbytext(); ?>
    <?php endif; ?>
  </header>
  
  <?php foreach($page->pastChildren() as $article): ?>
    <?php snippet('article-teaser', array('article' => $article)); ?>
  <?php endforeach ?>

</section>
