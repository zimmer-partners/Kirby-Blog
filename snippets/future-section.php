<?php if ($page->hasFutureChildren()): ?>
    
  <section class="future-articles">
  
    <?php foreach($page->futureChildren() as $article): ?>
      <?php snippet('article-teaser', array('article' => $article)); ?>
    <?php endforeach ?>

  </section>
  
<?php endif; ?>