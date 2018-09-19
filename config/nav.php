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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'Library',
                    'route' => 'backend.media.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All shops',
                    'route' => 'backend.shops.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Categories',
                    'route' => 'backend.categories.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.tags.index',
                    'permissions'   => 'view-dashboard'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'user',
            'label'         => 'User',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.users.create',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All user',
                    'route' => 'backend.users.index',
                    'permissions'   => 'view-dashboard'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'permission',
            'label'         => 'Permission',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.permissions.create',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Permission',
                    'route' => 'backend.permissions.index',
                    'permissions'   => 'view-dashboard'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'role',
            'label'         => 'Role',
            'icon_class'    => 'fa fa-users',
            'permissions'   => 'view-dashboard',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.roles.create',
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All role',
                    'route' => 'backend.roles.index',
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All brand',
                    'route' => 'backend.brands.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All country',
                    'route' => 'backend.countries.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All division',
                    'route' => 'backend.divisions.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All district',
                    'route' => 'backend.districts.index',
                    'permissions'   => 'view-dashboard'
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
                    'permissions'   => 'view-dashboard'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All thana',
                    'route' => 'backend.thanas.index',
                    'permissions'   => 'view-dashboard'
                ]
            ]
        ]
    ]
];