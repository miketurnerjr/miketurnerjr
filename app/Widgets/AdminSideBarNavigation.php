<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class AdminSideBarNavigation extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data = config('admin_menu_items');

        return view('widgets.admin_side_bar_navigation', [
            'config' => $this->config,
            'adminMenuTitle' => array_to_object($data['adminMenuSideBarTitle']),
            'menuItems' => array_to_object($data['adminMenuItems']),
            'menuItemIconClassName' => array_to_object($data['menuItemIconClassName'])
        ]);
    }
}
