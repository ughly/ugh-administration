<?php

namespace UghAdministration\Controller;

use UghAdministration\Event\DashboardEvent;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends AbstractActionController
{

    /**
     * 
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel();

        $event = $this->triggerDashboardRenderEvent($viewModel);

        return $event->getDashboardViewModel();
    }

    /**
     * 
     * @param ViewModel $viewModel
     * @return DashboardEvent
     */
    private function triggerDashboardRenderEvent(ViewModel $viewModel)
    {
        $event = new DashboardEvent();
        $event->setName(DashboardEvent::DASHBOARD_RENDER_EVENT);
        $event->setDashboardViewModel($viewModel);
        $event->setTarget($this);

        $this->getEventManager()->trigger($event);

        return $event;
    }
}
