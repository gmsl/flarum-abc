<?php

namespace Gmsl\FlarumAbc\Listener;

use Flarum\Api\Controller\ListDiscussionsController;
use Flarum\Event\ConfigureApiController;
use Illuminate\Contracts\Events\Dispatcher;

class AddDiscussionSorter
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureApiController::class, [$this, 'configureApiController']);
    }

    public function configureApiController(ConfigureApiController $event)
    {
        if ($event->isController(ListDiscussionsController::class)) {
            $event->addSortField('title');
        }
    }
}