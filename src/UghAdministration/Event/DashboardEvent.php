<?php

namespace UghAdministration\Event;

use Zend\EventManager\Event;
use Zend\View\Model\ViewModel;

class DashboardEvent extends Event
{

    const DASHBOARD_RENDER_EVENT = 'dashboard.render';

    /**
     *
     * @var ViewModel
     */
    private $dashboardViewModel;

    /**
     * 
     * @return ViewModel
     */
    public function getDashboardViewModel()
    {
        return $this->dashboardViewModel;
    }

    /**
     * 
     * @param ViewModel $dashboardViewModel
     */
    public function setDashboardViewModel(ViewModel $dashboardViewModel)
    {
        $this->dashboardViewModel = $dashboardViewModel;
    }
}
