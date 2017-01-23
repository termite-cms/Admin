<?php

namespace Projects\Event\Github\Repository;

use App\Event\Overlord\Host\Hosts\Xps420Listener;
use App\Model\Entity\Host;
use Cake\Event\Event;
use Cake\Event\EventListenerInterface;
use Interop\Container\ContainerInterface;
use PipingBag\Di\PipingBag;
use React\ChildProcess\Process;
use React\Promise\Deferred;
use React\Stomp\Client;
use React\Stomp\Protocol\Frame;
use WyriHaximus\React\Cake\Orm\AsyncTableRegistry;

final class SideBarMenuEvent extends Event
{
    const NAME = 'termite.admin.layout.sidebar.menu';

    private $sections = [];

    public static function create()
    {
        return new static(static::NAME);
    }

    public function addSection()
    {
        //
    }

    /**
     * @return array
     */
    public function getSections(): array
    {
        return $this->sections;
    }
}
