<?php

Kirby::plugin('jonasfeige/fcs-srcset', [
    'fileMethods' => [
        'fcsSrcset' => function ($params = []) {
            $defaults = [
                'width' => 500,
                'height' => 350,
                'quality' => 90,
                'breakpoints' => [
                    ['width' => 640, 'ratio' => 1],
                    ['width' => 768, 'ratio' => 1.2],
                    ['width' => 1024, 'ratio' => 1.6],
                    ['width' => 1280, 'ratio' => 2]
                ]
            ];
            $params = array_merge($defaults, $params);
            $set = [];
            for ($i = 0; $i < count($params['breakpoints']); $i++) {
                $image = $this->focusCrop($params['width'] * $params['breakpoints'][$i]['ratio'], $params['height'] * $params['breakpoints'][$i]['ratio'], ['quality' => $params['quality']]);
                $set[] = $image->url() . ' ' . $params['breakpoints'][$i]['width'] . 'w';
            }
            return implode(', ', $set);
        }
    ]
]);
