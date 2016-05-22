<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1>
        <time datetime="<?= $page->date('%Y-%m-%dT%H:%M:%S') ?>"><?= $page->date('%d.%m.%y') ?></time> 
        <?= $page->title()->html() ?>
      </h1>
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>