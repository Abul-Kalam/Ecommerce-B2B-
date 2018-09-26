<?php

return [
    'main'                  => [
        [
            'type'          => 'single',
            'slug'          => 'dashboard',
            'label'         => 'Dashboard',
            'route'         => 'backend.dashboard',
            'icon_class'    => 'fa fa-tachometer-alt',
            'permissions'   => 'view-dashboard'
        ],
        [
            'type'          => 'menu',
            'slug'          => 'media',
            'label'         => 'Media',
            'icon_class'    => 'fa fa-folder',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.media.create',
                    'permissions'   => 'create-media'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'Library',
                    'route' => 'backend.media.index',
                    'permissions'   => 'read-media'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'shop',
            'label'         => 'Shop',
            'icon_class'    => 'fa fa-store',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.shops.create',
                    'permissions'   => 'create-shop'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All shops',
                    'route' => 'backend.shops.index',
                    'permissions'   => 'read-shop'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'taxonomy',
            'label'         => 'Taxonomy',
            'icon_class'    => 'fa fa-list',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create-categories',
                    'label' => 'Add New Product Category',
                    'route' => 'backend.categories.create',
                    'permissions'   => 'create-category'
                ],
                [
                    'slug'  => 'index-categories',
                    'label' => 'All Product Categories',
                    'route' => 'backend.categories.index',
                    'permissions'   => 'read-category'
                ],
                [
                    'slug'  => 'create-tag',
                    'label' => 'Add New Tag',
                    'route' => 'backend.tags.create',
                    'permissions'   => 'create-tag'
                ],
                [
                    'slug'  => 'index-tag',
                    'label' => 'All tag',
                    'route' => 'backend.tags.index',
                    'permissions'   => 'read-tag'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'user-management',
            'label'         => 'User Management',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create-users',
                    'label' => 'Add New User',
                    'route' => 'backend.users.create',
                    'permissions'   => 'create-user'
                ],
                [
                    'slug'  => 'index-users',
                    'label' => 'All Users',
                    'route' => 'backend.users.index',
                    'permissions'   => 'read-user'
                ],
                [
                    'slug'  => 'create-roles',
                    'label' => 'Add New Role',
                    'route' => 'backend.roles.create',
                    'permissions'   => 'create-role'
                ],
                [
                    'slug'  => 'index-roles',
                    'label' => 'All Roles',
                    'route' => 'backend.roles.index',
                    'permissions'   => 'read-role'
                ],
                [
                    'slug'  => 'create-permissions',
                    'label' => 'Add New Permission',
                    'route' => 'backend.permissions.create',
                    'permissions'   => 'create-permission'
                ],
                [
                    'slug'  => 'index-permissions',
                    'label' => 'All Permissions',
                    'route' => 'backend.permissions.index',
                    'permissions'   => 'read-permission'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'brand',
            'label'         => 'Brand',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.brands.create',
                    'permissions'   => 'create-brand'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Brands',
                    'route' => 'backend.brands.index',
                    'permissions'   => 'read-brand'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'place',
            'label'         => 'Place',
            'icon_class'    => 'fas fa-map-marked-alt',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create-country',
                    'label' => 'Add New Country',
                    'route' => 'backend.countries.create',
                    'permissions'   => 'create-country'
                ],
                [
                    'slug'  => 'index-country',
                    'label' => 'All Countries',
                    'route' => 'backend.countries.index',
                    'permissions'   => 'read-country'
                ],
                [
                    'slug'  => 'create-division',
                    'label' => 'Add New Division',
                    'route' => 'backend.divisions.create',
                    'permissions'   => 'create-division'
                ],
                [
                    'slug'  => 'index-division',
                    'label' => 'All Divisions',
                    'route' => 'backend.divisions.index',
                    'permissions'   => 'read-division'
                ],
                [
                    'slug'  => 'create-district',
                    'label' => 'Add New District',
                    'route' => 'backend.districts.create',
                    'permissions'   => 'create-district'
                ],
                [
                    'slug'  => 'index-district',
                    'label' => 'All Districts',
                    'route' => 'backend.districts.index',
                    'permissions'   => 'read-district'
                ],
                [
                    'slug'  => 'create-thana',
                    'label' => 'Add New Thana',
                    'route' => 'backend.thanas.create',
                    'permissions'   => 'create-thana'
                ],
                [
                    'slug'  => 'index-thana',
                    'label' => 'All Thanas',
                    'route' => 'backend.thanas.index',
                    'permissions'   => 'read-thana'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'setting',
            'label'         => 'Setting',
            'icon_class'    => 'fas fa-cogs',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'style',
                    'label' => 'Style',
                    'route' => 'backend.preferences.update',
                    'permissions'   => 'create-thana'
                ]
            ]
        ]
    ]
];
