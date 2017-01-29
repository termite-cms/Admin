<?php

namespace Termite\Admin\View\Helper;

use Cake\Event\EventManager;
use Cake\View\Helper;
use Termite\Admin\Event\SideBarMenuEvent;

final class SideBarMenuHelper extends Helper
{
    public $helpers = [
        'Html',
    ];

    public function render($realm)
    {
        $event = SideBarMenuEvent::create();
        EventManager::instance()->dispatch($event);

        //
    }
}
