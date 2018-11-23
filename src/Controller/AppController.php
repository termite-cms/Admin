<?php

namespace Termite\Admin\Controller;

use App\Controller\AppController as Controller;
use Cake\Event\Event;

abstract class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function beforeRender(Event $event): void
    {
        parent::beforeRender($event);
        $this->viewBuilder()->theme('Termite/Admin');
        /*$this->View->Form->templates([
            'button' => '<button{{attrs}}>{{text}}</button>',
        ]);*/
    }
}
