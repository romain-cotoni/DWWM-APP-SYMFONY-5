<?php

namespace ContainerE1CjLbE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCcpRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CcpRepository' shared autowired service.
     *
     * @return \App\Repository\CcpRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CcpRepository'] = new \App\Repository\CcpRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
