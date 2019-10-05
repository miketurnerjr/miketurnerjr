<?php

return [
    'adminMenuSideBarTitle' => 'Navigation',
    'menuItemIconClassName' => 'menu-arrow',
    'adminMenuItems' => [
        'dashboard' => [
            'name' => 'Dashboard',
            'slug' => 'dashboard',
            'icon' => '',
            'route' => 'admin.dashboard.index',
            'menu_arrow' => 'menu-arrow',
            'has_children' => false,
            'children' => []
        ],
        'blog' => [
            'name' => 'Blog',
            'slug' => 'blog',
            'icon' => '',
            'route' => 'admin.blog.index',
            'menu_arrow' => 'menu-arrow',
            'has_children' => true,
            'children' => [
                'create' => [
                    'name' => 'Add New Entry',
                    'slug' => 'add-new-blog-entry',
                    'icon' => 'fa fa-plus',
                    'route' => 'admin.blog.create',
                    'has_children' => false,
                    'children' => []

                ]
            ]
        ],
        'portfolio' => [
            'name' => 'Portfolio',
            'slug' => 'portfolio',
            'icon' => '',
            'route' => 'admin.portfolio.index',
            'has_children' => false,
            'children' => []
        ]
    ]
];

/*
'dashboard' => [
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'icon' => '',
                'route' => route('admin.dashboard.index'),
                'has_children' => false,
                'children' => []*/