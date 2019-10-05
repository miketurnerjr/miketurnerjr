<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class TopBarMessages extends AbstractWidget
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
        $messages = [
            ['id' => 5, 'from' => 'Name Last', 'date' => '10/03/2019 9:33 am', 'preview' => 'lipsum lipsum'],
            ['id' => 4, 'from' => 'Name Last', 'date' => '10/03/2019 9:31 am', 'preview' => 'lipsum lipsum'],
            ['id' => 3, 'from' => 'Name Last', 'date' => '10/03/2019 9:30 am', 'preview' => 'lipsum lipsum'],
            ['id' => 2, 'from' => 'Name Last', 'date' => '10/03/2019 9:20 am', 'preview' => 'lipsum lipsum']
        ];

        $displayMessagesPreview = false;

        if($messages && count($messages) > 0) {
            $displayMessagesPreview = true;
        }

        return view('widgets.top_bar_messages', [
            'config' => $this->config,
            'messages' => $messages,
            'displayMessagesPreview' => $displayMessagesPreview
        ]);
    }
}
