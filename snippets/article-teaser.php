<article>
  <h1>
    <a href="<?= $article->url(); ?>">
      <time datetime="<?= $article->date('%Y-%m-%dT%H:%M:%S') ?>"><?= $article->date('%d.%m.%y') ?></time> 
      <?= $article->title()->html() ?>
    </a>
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
