<article>
  <h1>
    <a href="<?= $article->url(); ?>">
      <?= $article->date_time(); ?> 
      <?= $article->title()->html() ?>
    </a>
  </h1>
  <?= $article->text()->excerpt(300, 'chars'); ?>
</article>
