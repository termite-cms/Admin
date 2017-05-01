<?php

namespace Termite\Admin\Event;

final class Section
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var array
     */
    private $route;

    /**
     * @var Section[]
     */
    private $subSections = [];

    /**
     * Section constructor.
     * @param string $label
     * @param array $route
     * @param Section[] ...$subSections
     */
    public function __construct(string $label, array $route, Section ...$subSections)
    {
        $this->label = $label;
        $this->route = $route;
        $this->subSections = $subSections;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return array
     */
    public function getRoute(): array
    {
        return $this->route;
    }

    /**
     * @return array
     */
    public function getSubSections(): array
    {
        return $this->subSections;
    }
}
