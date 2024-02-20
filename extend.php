<?php

use Flarum\Extend;
use Flarum\Post\Post;
use Illuminate\Database\Eloquent\Builder;

return [
    (new Extend\Model(Post::class))
        ->addGlobalScope('alphabetical', function (Builder $builder) {
            $builder->orderBy('content', 'asc');
        }),
];
