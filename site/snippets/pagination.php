<?php if($pagination->hasPages()): ?>
  <nav class="pagination" role="navigation">
    <ul>
      <li class="previous"><?php if($pagination->hasPrevPage()): ?><a href="<?= $pagination->prevPageURL() ?>">&lsaquo; vorherige Seite</a><?php endif ?></li>
      <li class="next"><?php if($pagination->hasNextPage()): ?><a href="<?= $pagination->nextPageURL() ?>">nächste Seite &rsaquo;</a><?php endif ?></li>
    </ul>
  </nav>
<?php endif ?>