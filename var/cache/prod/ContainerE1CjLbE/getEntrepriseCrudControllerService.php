<?php

namespace ContainerE1CjLbE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntrepriseCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\EntrepriseCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\EntrepriseCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\EntrepriseCrudController'] = $instance = new \App\Controller\Admin\EntrepriseCrudController();

        $instance->setContainer(($container->privates['.service_locator.ipvtXDO'] ?? $container->load('get_ServiceLocator_IpvtXDOService'))->withContext('App\\Controller\\Admin\\EntrepriseCrudController', $container));

        return $instance;
    }
}
