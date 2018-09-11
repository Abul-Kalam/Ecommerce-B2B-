<?php

return [
    'main'                  => [
        [
            'type'          => 'single',
            'slug'          => 'dashboard',
            'label'         => 'Dashboard',
            'route'         => 'backend.dashboard',
            'icon_class'    => 'fa fa-tachometer-alt',
        ],
        [
            'type'          => 'menu',
            'slug'          => 'media',
            'label'         => 'Media',
            'icon_class'    => 'fa fa-folder',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.media.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'Library',
                    'route' => 'backend.media.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'shop',
            'label'         => 'Shop',
            'icon_class'    => 'fa fa-store',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.shops.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All shops',
                    'route' => 'backend.shops.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'product-category',
            'label'         => 'Product Category',
            'icon_class'    => 'fa fa-list',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.categories.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Categories',
                    'route' => 'backend.categories.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'tag',
            'label'         => 'Tag',
            'icon_class'    => 'fa fa-tags',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.tags.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All tag',
                    'route' => 'backend.tags.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'user',
            'label'         => 'User',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.users.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All user',
                    'route' => 'backend.users.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'permission',
            'label'         => 'Permission',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.permissions.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All Permission',
                    'route' => 'backend.permissions.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'role',
            'label'         => 'Role',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.roles.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All role',
                    'route' => 'backend.roles.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'brand',
            'label'         => 'Brand',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.brands.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All brand',
                    'route' => 'backend.brands.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'country',
            'label'         => 'Country',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.countries.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All country',
                    'route' => 'backend.countries.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'division',
            'label'         => 'Division',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.divisions.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All division',
                    'route' => 'backend.divisions.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'district',
            'label'         => 'District',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.districts.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All district',
                    'route' => 'backend.districts.index'
                ]
            ]
        ],
        [
            'type'          => 'menu',
            'slug'          => 'thana',
            'label'         => 'Thana',
            'icon_class'    => 'fa fa-users',
            'childs'        => [
                [
                    'slug'  => 'create',
                    'label' => 'Add New',
                    'route' => 'backend.thanas.create'
                ],
                [
                    'slug'  => 'index',
                    'label' => 'All thana',
                    'route' => 'backend.thanas.index'
                ]
            ]
        ]
    ]
];