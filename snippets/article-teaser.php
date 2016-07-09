<article>
  <h1>
    <a href="<?= $article->url(); ?>">
      <?= $article->date_time(); ?> 
      <?= $article->title()->html() ?>
    </a>
  </h1>
  <?= $article->text()->tidy(300, "<a class=\"more\" href=\"{$article->url()}\">Weiter lesen</a>"); ?>
</article>
