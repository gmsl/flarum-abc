<?php

namespace Gmsl\FlarumAbc\Listeners;

use Flarum\Discussion\Search\DiscussionSearch;
use Illuminate\Contracts\Events\Dispatcher;

class AddSorter
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(DiscussionSearch::class, [$this, 'addSorter']);
    }

    public function addSorter(DiscussionSearch $search)
    {
        // Add your custom sorter here.
        $search->getQuery()->orderBy('title', 'asc');
    }
}
