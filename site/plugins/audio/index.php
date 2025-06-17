<?php

Kirby::plugin('marc/audio', [
    'tags' => [
        'audio' => [
            'html' => function ($tag) {
                return '<audio src="' . $tag->file($tag->value)->url() . '" controls></audio>';
            }
        ]
    ]
]);
