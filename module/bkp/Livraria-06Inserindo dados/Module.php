<?php

namespace Livraria;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Livraria\Service\Categoria as CategoriaService;

class Module
{
   

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__."Admin" => __DIR__ . '/src/' . __NAMESPACE__."Admin",
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,                ),
            ),
        );
    }
    public function getServiceConfig(){
        return array(
            'factories' =>array(
            'Livraria\Service\Categoria' => function($service){
            return new CategoriaService($service->get('Doctrine\ORM\EntityManager'));
            }
        )
       );
    }
}
