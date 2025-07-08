<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="author" content="<?= $site->author()->html() ?>" />
  <meta name="description" content="<?= $page->description()->or($site->description()) ?>" />

  <!-- website analytics -->


  <?php snippet(['meta/' . $page->template(), 'meta/default']) ?>

  <link rel="icon" type="image/png" href="https://spoiler.band/assets/images/favicon.png">

  <!-- meta stuff for devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

  <!-- CSS -->
  <style type="text/css"><?= file_get_contents('assets/css/main-min.css') ?></style>

</head>

<body id="page-<?= $page->template() ?>">

  <header id="page-start" class="header" role="banner">
    <div class="header_inner layoutcontainer">
      <div class="logo">
        <a href="<?= url() ?>"><img class="header-logo" src="/assets/images/spoiler-s.png" alt="SPOILER Logo Signer S"></a>
      </div>
      <nav class="nav-main" role="navigation">
        <ul>
          <?php foreach($pages->find('news', 'gigs', 'media-and-merch', 'band', 'press') AS $page): ?>
          <li class="nav-item nav-<?= $page->uid() ?>"><a class="nav-link <?php if($page->isOpen()) echo 'active' ?>" href="<?= $page->url() ?>"><?= $page->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      </nav>
      <nav class="nav-social">
        <ul>
          <li class="nav-item"><a class="nav-link" href="https://instagram.com/spoiler.band"><?= svg('/assets/images/icon-instagram.svg') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="https://youtube.com/@spoiler-band"><?= svg('/assets/images/icon-youtube.svg') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="https://bsky.app/profile/spoiler.band"><?= svg('/assets/images/icon-bluesky.svg') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="https://tiktok.com/@spoiler.band"><?= svg('/assets/images/icon-tiktok.svg') ?></a></li>
        </ul>
      </nav>
    </div>
  </header>