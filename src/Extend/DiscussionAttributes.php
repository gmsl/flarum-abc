<?php

namespace Gmsl\FlarumAbc\Extend;

use Flarum\Api\Controller\ShowDiscussionController;
use Flarum\Extend\ExtenderInterface;
use Flarum\Extension\Extension;
use Illuminate\Contracts\Container\Container;

class DiscussionAttributes implements ExtenderInterface
{
    public function extend(Container $container, Extension $extension)
    {
        $container->extend(ShowDiscussionController::class, function ($controller) {
            $controller->addSortField('title');
            return $controller;
        });
    }
}