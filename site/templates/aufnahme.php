<?php snippet('header') ?>
<main id="content-start" class="main">
  <div class="main_inner layoutcontainer">
    <h1>Dateien aktueller Aufnahmen</h1>
    <p>Hier findest du aktuelle Dateien.</p>
    <ul>
      <?php foreach($page->files() as $file): ?>
      <li>
        <a href="<?= $file->url() ?>">
        <?= $file->filename() ?></a>
        (<?= $file->niceSize() ?>)
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</main>
<?php snippet('footer') ?>