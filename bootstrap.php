<?php

/*
 * This file is part of gmsl/flarum-abc.
 *
 * (c) G. Meisl
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Contracts\Events\Dispatcher;
use Gmsl\FlarumAbc\Listeners\AddClientAssets;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),

    (new Extend\Locales(__DIR__.'/resources/locale')),

    function (Dispatcher $events) {
        $events->subscribe(AddClientAssets::class);
    },
];
