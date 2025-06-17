<?php snippet('header') ?>
<main id="content-start" class="main">
  <div class="main_inner layoutcontainer">

    <div class="blog-post main-content">
      <div class="post-meta">
        <time datetime="<?= $page->date()->toDate('%F') ?>"><?= $page->date()->toDate('%e. %B %G'); ?></time>
      </div>
      <div class="tag-container">
        <?php if ($page->tags() != ''): ?>
        <ul class="tags">
          <?php foreach($page->tags()->split() as $tag): ?>
          <li><a href="<?= url('/search?q=' . urlencode($tag)) ?>">#<?= $tag; ?></a></li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>
      </div>
      <h1><?= $page->title() ?></h1>
      <div class="post-text"><?= $page->text()->kirbytext() ?></div>
    </div>

    <nav class="pagination" role="navigation">
      <ul>
        <li class="previous"><?php if($prev = $page->prevListed()): ?><a href="<?= $prev->url() ?>">Vorheriger Beitrag</a><?php endif ?></li>
        <li class="next"><?php if($next = $page->nextListed()): ?><a href="<?= $next->url() ?>">Nächster Beitrag</a><?php endif ?></li>
      </ul>
    </nav>

  </div>
</main>
<?php snippet('footer') ?>