<?php

return [
    'main' => [
        [
            'type' => 'single',
            'active' => true,
            'label' => 'Dashboard',
            'route' => 'backend.dashboard',
            'icon_class'  => 'fa fa-dashboard',
        ],
        [
            'type' => 'menu',
            'active' => false,
            'label' => 'Product Category',
            'icon_class'  => 'fa fa-dashboard',
            'childs' => [
                [
                    'label' => 'Add New',
                    'route' => 'backend.categories.create'
                ],
                [
                    'label' => 'All Categories',
                    'route' => 'backend.categories.index'
                ]
            ]
        ]
    ]
];