<?php snippet('header') ?>
<main id="content-start" class="main">
  <div class="main_inner layoutcontainer">

  <?php foreach($gigs as $gig): ?>
    <?php if ($gig->date()->toDate() >= date('Y-m-d')): ?>
      <h1>Was kommt … </h1>
      <div class="gig main-content">
        <div class="post-meta">
          <time datetime="<?= $gig->date()->toDate('%F') ?>"><?= $gig->date()->toDate('%e. %B %G'); ?></time>
        </div>
        <h2><a href="<?= $gig->url() ?>"><?= $gig->venue() ?> in <?= $gig->city() ?></a></h2>
        <p class="bands">with <?= $gig->bands()->kti() ?></p>
      </div>
    <?php elseif ($gig->date()->toDate() < date('Y-m-d')): ?>
      <h1>Was war … (Auszug)</h1>
      <div class="gig main-content">
        <div class="post-meta">
          <time datetime="<?= $gig->date()->toDate('%F') ?>"><?= $gig->date()->toDate('%e. %B %G'); ?></time>
        </div>
        <h2><a href="<?= $gig->url() ?>"><?= $gig->venue() ?> in <?= $gig->city() ?></a></h2>
        <p class="bands">with <?= $gig->bands()->kti() ?></p>
      </div>
    <?php endif ?>
  <?php endforeach ?>

  </div>
</main>
<?php snippet('footer') ?>