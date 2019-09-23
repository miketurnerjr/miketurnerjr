<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class AdminSeoTools extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        // 'meta' => [
        //     'title' => config('seotools.meta.defaults.title'),
        //     'titleBefore' => config('seotools.meta.defaults.titleBefore'),
        //     'description' => config('seotools.meta.defaults.description'),
        //     'separator' => config('seotools.meta.defaults.separator'),
        //     'keywords' => config('seotools.meta.defaults.keywords'),
        //     'url' => config('seotools.meta.defaults.canonical'),
        //     'robots' => config('seotools.meta.defaults.robots')
        // ],
        // 'twitter' => [
        //     'card' => config('seotools.twitter.defaults.card'),
        //     'title' => config('seotools.twitter.defaults.title'),
        //     'url' => config('seotools.twitter.defaults.site')
        // ],

        // 'opengraph' => [
        //     'title' => config('seotools.opengraph.defaults.title'),
        //     'description' => config('seotools.opengraph.defaults.description'),
        //     'url' => config('seotools.opengraph.defaults.url'),
        //     'type' => config('seotools.opengraph.defaults.type'),
        //     'site_name' => config('seotools.opengraph.defaults.site_name'),
        //     'images' => config('seotools.opengraph.defaults.images')
        // ]
    ];
  

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.admin_seo_tools', [
            'config' => $this->config,
        ]);
    }
}
