<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Spatie\Menu\Laravel\Facades\Menu;
use Spatie\Menu\Laravel\Link;

class AdminMenu extends AbstractWidget
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
        //

        return view('widgets.admin_menu', [
            'config' => $this->config,
            'menu' => $this->buildAdminMenu()
        ]);
    }

    private function buildAdminMenu() 
    {
        $menu = Menu::new([
            Link::toRoute('admin.dashboard', 'Dashboard')
        ]);

        return $menu;
    }


}

