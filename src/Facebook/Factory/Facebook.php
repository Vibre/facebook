<?php
namespace Facebook\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Facebook implements FactoryInterface
{

    /**
     *
     * @return boolean
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return true;
    }
}