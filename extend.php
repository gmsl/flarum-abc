<?php

use Flarum\Extend;
use Gmsl\FlarumAbc\Providers\SorterProvider;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),

    new Extend\Locales(__DIR__.'/resources/locale'),

    new SorterProvider(),
];
