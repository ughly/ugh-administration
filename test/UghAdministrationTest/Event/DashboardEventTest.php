<?php

namespace UghAdministrationTest\Event;

use PHPUnit_Framework_TestCase;
use UghAdministration\Event\DashboardEvent;
use Zend\View\Model\ViewModel;

class DashboardEventTest extends PHPUnit_Framework_TestCase
{

    public function testDashboardEvent()
    {
        $viewModel = new ViewModel();

        $dashboardEvent = new DashboardEvent();
        $dashboardEvent->setDashboardViewModel($viewModel);

        $this->assertSame($viewModel, $dashboardEvent->getDashboardViewModel());
    }
}
