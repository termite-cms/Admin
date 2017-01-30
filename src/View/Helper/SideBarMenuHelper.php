<?php

namespace Termite\Admin\View\Helper;

use Cake\Event\EventManager;
use Cake\Routing\Router;
use Cake\View\Helper;
use Termite\Admin\Event\Section;
use Termite\Admin\Event\SideBarMenuEvent;

final class SideBarMenuHelper extends Helper
{
    public function render(): string
    {
        $event = SideBarMenuEvent::create();
        EventManager::instance()->dispatch($event);

        $html = '<ul class="sidebar-menu">';
        $html .= '<li class="header">NAVIGATION</li>';

        $html .= $this->renderSections(...$event->getSections());

        $html .= '</ul>';

        return $html;
    }

    private function renderSections(Section ...$sections): string
    {
        $html = '';

        foreach ($sections as $section) {
            $html .= $this->renderSection($section);
        }

        return $html;
    }

    private function renderSection(Section $section): string
    {
        $subSections = $section->getSubSections();

        $html = '';
        if (count($subSections) > 0) {
            $html .= '<li class="treeview menu-open">';
            $html .= '<a href="#">';
            $html .= '<i class="fa fa-share"></i> <span>' . $section->getLabel() . '</span>';
            $html .= '<span class="pull-right-container">';
            $html .= '<i class="fa fa-angle-left pull-right"></i>';
            $html .= '</span>';
            $html .= '</a>';
            $html .= '<ul class="treeview-menu active" style="display: block;">';
            $html .= $this->renderSections(...$subSections);
            $html .= '</ul>';
            $html .= '</li>';
            return $html;
        }

        $html .= '<li>';
        $html .= '<a href="' . h(Router::url($section->getRoute())) . '">';
        $html .= '<i class="fa fa-calendar"></i> <span>' . $section->getLabel() . '</span>';
        $html .= '</a>';
        $html .= '</li>';
        return $html;
    }
}
