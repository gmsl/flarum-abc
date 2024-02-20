<?php

namespace Gmsl\FlarumAbc\Listeners;

use Flarum\Event\ConfigureWebApp;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);
    }

    public function addAssets(ConfigureWebApp $event)
    {
        if ($event->isForum()) {
            $event->addAssets([
                __DIR__.'/../../js/dist/forum.js',
                __DIR__.'/../../resources/less/forum.less'
            ]);
            $event->addBootstrapper('gmsl/flarum-abc/main');
        }
    }
}