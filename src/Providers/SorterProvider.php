<?php

namespace Gmsl\FlarumAbc\Providers;

use Flarum\Foundation\AbstractServiceProvider;
use Gmsl\FlarumAbc\Listeners\AddSorter;
use Illuminate\Contracts\Events\Dispatcher;

class SorterProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->app->make(Dispatcher::class)->subscribe(AddSorter::class);
    }
}
