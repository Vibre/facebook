<?php
namespace Facebook\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Facebook implements FactoryInterface
{

    /**
     * Config Key
     *
     * @var string
     */
    const CONFIG_KEY = 'facebook';

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Facebook
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');
        $config = $config[self::CONFIG_KEY];

        if (is_null($config))
            throw new \RuntimeException(_('Config could not be found!'));

        $facebook = new \Facebook($config);

        return $facebook;
    }
}
