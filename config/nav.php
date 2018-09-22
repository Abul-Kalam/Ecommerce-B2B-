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
            'slug'          => 'product-category',
            'label'         => 'Product Category',
            'icon_class'    => 'fa fa-list',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.categories.create',
                    'permissions'   => 'create-category'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Categories',
                    'route' => 'backend.categories.index',
                    'permissions'   => 'read-category'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'tag',
            'label'         => 'Tag',
            'icon_class'    => 'fa fa-tags',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.tags.create',
                    'permissions'   => 'create-tag'
                ],
                [
                    'slug'  => 'index',
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index-users',
                    'label' => 'All user',
                    'route' => 'backend.users.index',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'create-roles',
                    'label' => 'Add New Role',
                    'route' => 'backend.roles.create',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index-roles',
                    'label' => 'All role',
                    'route' => 'backend.roles.index',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'create-permissions',
                    'label' => 'Add New Permission',
                    'route' => 'backend.permissions.create',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index-permissions',
                    'label' => 'All Permission',
                    'route' => 'backend.permissions.index',
                    'permissions'   => 'view-dashboard'
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
                    'label' => 'All brand',
                    'route' => 'backend.brands.index',
                    'permissions'   => 'read-brand'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'country',
            'label'         => 'Country',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.countries.create',
                    'permissions'   => 'create-country'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All country',
                    'route' => 'backend.countries.index',
                    'permissions'   => 'read-country'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'division',
            'label'         => 'Division',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.divisions.create',
                    'permissions'   => 'create-division'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All division',
                    'route' => 'backend.divisions.index',
                    'permissions'   => 'read-division'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'district',
            'label'         => 'District',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.districts.create',
                    'permissions'   => 'create-district'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All district',
                    'route' => 'backend.districts.index',
                    'permissions'   => 'read-district'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'thana',
            'label'         => 'Thana',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.thanas.create',
                    'permissions'   => 'create-thana'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All thana',
                    'route' => 'backend.thanas.index',
                    'permissions'   => 'read-thana'
                ]
            ]
        ]
    ]
];