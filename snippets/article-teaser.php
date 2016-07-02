<article>
  <h1>
    <a href="<?= $article->url(); ?>">
      <time datetime="<?= $article->date('%Y-%m-%dT%H:%M:%S') ?>"><?= $article->date('%d.%m.%y') ?></time> 
      <?= $article->title()->html() ?>
    </a>
  </h1>
  <?= $article->text()->tidy(300, "<a class=\"more\" href=\"{$article->url()}\">Weiter lesen</a>"); ?>
</article>
