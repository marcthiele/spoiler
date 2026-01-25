<?php

date_default_timezone_set('Europe/Berlin');

return [
  'debug' => false,
  'locale' => 'de_DE.UTF-8',
  'date.handler' => 'strftime',
  'markdown' => [
      'breaks' => true
  ],
  'panel' => [
    'slug' => 'spoiler-admin',
    'install' => true
  ]
];