<?php

namespace ContainerE1CjLbE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserEntityCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\UserEntityCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\UserEntityCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\UserEntityCrudController'] = $instance = new \App\Controller\Admin\UserEntityCrudController();

        $instance->setContainer(($container->privates['.service_locator.ipvtXDO'] ?? $container->load('get_ServiceLocator_IpvtXDOService'))->withContext('App\\Controller\\Admin\\UserEntityCrudController', $container));

        return $instance;
    }
}
