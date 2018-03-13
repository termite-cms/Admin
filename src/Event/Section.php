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
     * @var array
     */
    private $options;

    /**
     * @var Section[]
     */
    private $subSections = [];

    /**
     * Section constructor.
     * @param string $label
     * @param array $route
     * @param array $options
     * @param Section[] ...$subSections
     */
    public function __construct(string $label, array $route, array $options = [], Section ...$subSections)
    {
        $this->label = $label;
        $this->route = $route;
        $this->options = $options;
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
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @return array
     */
    public function getSubSections(): array
    {
        return $this->subSections;
    }
}
