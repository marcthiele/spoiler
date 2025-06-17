<?php

return function($site, $pages, $page) {

  $blogposts  = $page->children()->flip()->paginate(10);
  $pagination = $blogposts->pagination();

  return array(
    'blogposts'  => $blogposts,
    'pagination' => $pagination
  );

};