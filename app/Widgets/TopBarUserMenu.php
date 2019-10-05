<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Auth;

class TopBarUserMenu extends AbstractWidget
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
        $me = auth()->user();

        return view('widgets.top_bar_user_menu', [
            'config' => $this->config,
            'me' => $me
        ]);
    }
}
