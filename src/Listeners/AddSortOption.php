<?php

namespace Gmsl\FlarumAbc\Listeners;

use Flarum\Event\ConfigurePostsQuery;
use Illuminate\Contracts\Events\Dispatcher;

class AddSortOption
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigurePostsQuery::class, [$this, 'addSort']);
    }

    public function addSort(ConfigurePostsQuery $event)
    {
        if ($event->sort === 'alphabetical') {
            $event->query->orderBy('content', 'asc');
        }
    }
}
