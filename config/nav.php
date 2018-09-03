<?php

return [
    'main' => [
        [
            'type' => 'single',
            'slug' => 'dashboard',
            'label' => 'Dashboard',
            'route' => 'backend.dashboard',
            'icon_class'  => 'fa fa-tachometer-alt',
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
            'slug' => 'shop',
            'label' => 'Shop',
            'icon_class'  => 'fa fa-store',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.shops.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All shops',
                    'route' => 'backend.shops.index'
                ]
            ]
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
            'icon_class'  => 'fa fa-tags',
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
        ],
        [
            'type' => 'menu',
            'slug' => 'user',
            'label' => 'User',
            'icon_class'  => 'fa fa-users',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.users.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.users.index'
                ]
            ]
        ],
        [
            'type' => 'menu',
            'slug' => 'permission',
            'label' => 'Permission',
            'icon_class'  => 'fa fa-users',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.permissions.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.permissions.index'
                ]
            ]
        ],
        [
            'type' => 'menu',
            'slug' => 'role',
            'label' => 'Role',
            'icon_class'  => 'fa fa-users',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.roles.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.roles.index'
                ]
            ]
        ],
        [
            'type' => 'menu',
            'slug' => 'shop',
            'label' => 'Shop',
            'icon_class'  => 'fa fa-users',
            'childs' => [
                [
                    'slug' => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.shops.create'
                ],
                [
                    'slug' => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.shops.index'
                ]
            ]
        ]
    ]
];