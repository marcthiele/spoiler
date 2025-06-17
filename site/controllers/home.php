<?php

return function($site, $pages, $page) {

  $posts      = pages('podcast','blog')->children()->listed()->sortBy('date')->flip()->paginate(10);
  $pagination = $posts->pagination();

  return array(
    'posts'      => $posts,
    'pagination' => $pagination
  );

};