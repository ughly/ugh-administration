<?php

namespace UghAdministrationTest\Controller;

use PHPUnit_Framework_TestCase;
use UghAdministration\Controller\DashboardController;
use UghAdministration\Event\DashboardEvent;
use Zend\EventManager\EventManager;

class DashboardControllerTest extends PHPUnit_Framework_TestCase
{

    public function testGetDashboard()
    {
        $eventManager = new EventManager();
        $eventManager->attach(DashboardEvent::DASHBOARD_RENDER_EVENT, function (DashboardEvent $event) {
            $viewModel = $event->getDashboardViewModel();
            $viewModel->setVariable('foo', 'bar');
        });

        $controller = new DashboardController();
        $controller->setEventManager($eventManager);

        $result = $controller->indexAction();

        $this->assertInstanceOf('Zend\View\Model\ModelInterface', $result);
        $this->assertEquals('bar', $result->getVariable('foo'));
    }
}
