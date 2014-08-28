<?php
namespace Facebook\Factory;

use Zend\Session\Container;

class AbstractFactory
{

    const SESSION_KEY = 'access_token';

    /**
     * Get Session Container
     *
     * @return \Zend\Session\Container
     */
    public function getContainer()
    {
        return new Container('Facebook');
    }

    /**
     * Get Access Token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->getContainer()->offsetGet(self::SESSION_KEY);
    }

    /**
     * Set Access Token
     *
     * @param mixed $value
     * @return \Facebook\Factory\AbstractFactory
     */
    public function setAccessToken($value)
    {
        $this->getContainer()->offsetSet(self::SESSION_KEY, $value);

        return $this;
    }
}
