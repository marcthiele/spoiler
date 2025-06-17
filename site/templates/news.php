<?php snippet('header') ?>
<main id="content-start" class="main">
  <div class="main_inner layoutcontainer">

  <?php foreach($blogposts as $blogpost): ?>
    <div class="blog-post main-content">
      <div class="post-meta">
        <time datetime="<?= $blogpost->date()->toDate('%F') ?>"><?= $blogpost->date()->toDate('%e. %B %G'); ?></time>
      </div>
      <h1><a href="<?= $blogpost->url() ?>"><?= $blogpost->title() ?></a></h1>
      <p class="post-summary"><?= $blogpost->description() ?></p>
      <a class="read-on-link" href="<?= $blogpost->url() ?>">Weiterlesen</a>
    </div>
  <?php endforeach ?>

  <?php if($pagination->hasPages()): ?>
    <nav class="pagination" role="navigation">
      <ul>
        <li class="previous"><?php if($pagination->hasPrevPage()): ?><a href="<?= $pagination->prevPageURL() ?>">&lsaquo; vorherige Seite</a><?php endif ?></li>
        <li class="next"><?php if($pagination->hasNextPage()): ?><a href="<?= $pagination->nextPageURL() ?>">nächste Seite &rsaquo;</a><?php endif ?></li>
      </ul>
    </nav>
  <?php endif ?>

  </div>
</main>
<?php snippet('footer') ?>