<?php

namespace ContainerE1CjLbE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SessionType' shared autowired service.
     *
     * @return \App\Form\SessionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SessionType'] = new \App\Form\SessionType();
    }
}
