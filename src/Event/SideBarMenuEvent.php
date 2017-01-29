<?php

namespace Termite\Admin\Event;

use Cake\Event\Event;

final class SideBarMenuEvent extends Event
{
    const NAME = 'termite.admin.layout.sidebar.menu';

    private $sections = [];

    public static function create(): self
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
