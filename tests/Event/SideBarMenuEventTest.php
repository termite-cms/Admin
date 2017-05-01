<?php

namespace Termite\Tests\Admin\Event;

use Termite\Admin\Event\SideBarMenuEvent;
use Termite\Tests\Admin\TestCase;

final class SideBarMenuEventTest extends TestCase
{
    public function testCreation()
    {
        self::assertInstanceOf(SideBarMenuEvent::class, SideBarMenuEvent::create());
    }
}
