<?php

return array(
    'router' => array(
        'routes' => array(
            'admin' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/admin',
                    'defaults' => array(
                        'controller' => 'UghAdministration\Controller\Dashboard',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'UghAdministration\Controller\Dashboard' => 'UghAdministration\Controller\DashboardController'
        )
    ),
    'view_manager' => array(
        'template_map' => array(
            'layout/admin' => __DIR__ . '/../view/layout/admin.phtml',
            'ugh-administration/dashboard/index' => __DIR__ . '/../view/ugh-administration/dashboard/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'ugh_administration' => array(
    )
);
