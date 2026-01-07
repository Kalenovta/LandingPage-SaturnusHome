<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Saturnus Home',
    'siteDescription' => 'Wifinya orang keren',

    // Algolia DocSearch credentials
    'docsearchAppId' => env('DOCSEARCH_APP_ID'),
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },

    'collections' => [
        'packages' =>[
            'items' => function ($config){
                $url = 'http://127.0.0.1:8000/api/wifi-packages';

                $context = stream_context_create([
                    "http" => ["header" => "Accept: application/json"]
                ]);

                $response = @file_get_contents($url, false, $context);

                return collect(json_decode($response))->map(function ($item) {
                    return [
                        'name' => $item->name,
                        'speed' => $item->speed_mbps,
                        'price' => $item->price,
                        'description' => $item->description ?? '',
                    ];
                });
            }
        ]
    ]
];
