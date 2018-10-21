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
            'slug'          => 'product',
            'label'         => 'Product',
            'icon_class'    => 'fa fa-store',
            'permissions'   => 'manage-product',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.products.create',
                    'permissions'   => 'manage-product'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All products',
                    'route' => 'backend.products.index',
                    'permissions'   => 'manage-product'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'media',
            'label'         => 'Media',
            'icon_class'    => 'fa fa-folder',
            'permissions'   => 'manage-media',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.media.create',
                    'permissions'   => 'manage-media'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'Library',
                    'route' => 'backend.media.index',
                    'permissions'   => 'manage-media'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'shop',
            'label'         => 'Shop',
            'icon_class'    => 'fa fa-store',
            'permissions'   => 'manage-shops',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.shops.create',
                    'permissions'   => 'manage-shops'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All shops',
                    'route' => 'backend.shops.index',
                    'permissions'   => 'manage-shops'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'taxonomy',
            'label'         => 'Taxonomy',
            'icon_class'    => 'fa fa-list',
            'permissions'   => 'manage-taxonomy',
            'childs'        => [
                [
                    'slug'  => 'create-categories',
                    'label' => 'Add New Product Category',
                    'route' => 'backend.categories.create',
                    'permissions'   => 'manage-taxonomy'
                ],
                [
                    'slug'  => 'index-categories',
                    'label' => 'All Product Categories',
                    'route' => 'backend.categories.index',
                    'permissions'   => 'manage-taxonomy'
                ],
                [
                    'slug'  => 'create-tag',
                    'label' => 'Add New Tag',
                    'route' => 'backend.tags.create',
                    'permissions'   => 'manage-taxonomy'
                ],
                [
                    'slug'  => 'index-tag',
                    'label' => 'All tag',
                    'route' => 'backend.tags.index',
                    'permissions'   => 'manage-taxonomy'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'user-management',
            'label'         => 'User Management',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'manage-users',
            'childs'        => [
                [
                    'slug'  => 'create-users',
                    'label' => 'Add New User',
                    'route' => 'backend.users.create',
                    'permissions'   => 'manage-users'
                ],
                [
                    'slug'  => 'index-users',
                    'label' => 'All Users',
                    'route' => 'backend.users.index',
                    'permissions'   => 'manage-users'
                ],
                [
                    'slug'  => 'create-roles',
                    'label' => 'Add New Role',
                    'route' => 'backend.roles.create',
                    'permissions'   => 'manage-users'
                ],
                [
                    'slug'  => 'index-roles',
                    'label' => 'All Roles',
                    'route' => 'backend.roles.index',
                    'permissions'   => 'manage-users'
                ],
                [
                    'slug'  => 'create-permissions',
                    'label' => 'Add New Permission',
                    'route' => 'backend.permissions.create',
                    'permissions'   => 'manage-users'
                ],
                [
                    'slug'  => 'index-permissions',
                    'label' => 'All Permissions',
                    'route' => 'backend.permissions.index',
                    'permissions'   => 'manage-users'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'brand',
            'label'         => 'Brand',
            'icon_class'    => 'fas fa-chess-king',
            'permissions'   => 'manage-brands',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.brands.create',
                    'permissions'   => 'manage-brands'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Brands',
                    'route' => 'backend.brands.index',
                    'permissions'   => 'manage-brands'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'place',
            'label'         => 'Place',
            'icon_class'    => 'fas fa-map-marked-alt',
            'permissions'   => 'manage-places',
            'childs'        => [
                [
                    'slug'  => 'create-country',
                    'label' => 'Add New Country',
                    'route' => 'backend.countries.create',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'index-country',
                    'label' => 'All Countries',
                    'route' => 'backend.countries.index',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'create-division',
                    'label' => 'Add New Division',
                    'route' => 'backend.divisions.create',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'index-division',
                    'label' => 'All Divisions',
                    'route' => 'backend.divisions.index',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'create-district',
                    'label' => 'Add New District',
                    'route' => 'backend.districts.create',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'index-district',
                    'label' => 'All Districts',
                    'route' => 'backend.districts.index',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'create-thana',
                    'label' => 'Add New Thana',
                    'route' => 'backend.thanas.create',
                    'permissions'   => 'manage-places'
                ],
                [
                    'slug'  => 'index-thana',
                    'label' => 'All Thanas',
                    'route' => 'backend.thanas.index',
                    'permissions'   => 'manage-places'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'setting',
            'label'         => 'Setting',
            'icon_class'    => 'fas fa-cogs',
            'permissions'   => 'manage-setting',
            'childs'        => [
                [
                    'slug'  => 'style',
                    'label' => 'Style',
                    'route' => 'backend.preferences.update',
                    'permissions'   => 'manage-setting'
                ]
            ]
        ]
    ]
];