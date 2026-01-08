<?php

return function($site, $pages, $page) {

  $gigs  = $page->children()->flip();

  return array(
    'gigs'  => $gigs
  );

};