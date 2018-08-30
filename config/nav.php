<?php

return [
    'main' => [
        [
            'type' => 'single',
            'slug' => 'dashboard',
            'label' => 'Dashboard',
            'route' => 'backend.dashboard',
            'icon_class'  => 'fa fa-dashboard',
        ],
        [
            'type' => 'single',
            'slug' => 'media',
            'label' => 'Media',
            'route' => 'backend.media',
            'icon_class'  => 'fa fa-folder',
        ],
        [
            'type' => 'menu',
            'slug' => 'product-category',
            'label' => 'Product Category',
            'icon_class'  => 'fa fa-list',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.categories.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All Categories',
                    'route' => 'backend.categories.index'
                ]
            ]
        ],
        [
            'type' => 'menu',
            'slug' => 'tag',
            'label' => 'Tag',
            'icon_class'  => 'fa fa-list',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.tags.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.tags.index'
                ]
            ]
        ]
    ]
];