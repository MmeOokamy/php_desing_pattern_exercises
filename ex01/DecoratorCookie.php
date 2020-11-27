<?php
include_once('Cookie.php');
include_once ('SimpleCookie.php');

class CookieMacadamia implements Cookie
{
    //  Your code here
    protected Cookie $cookie;

    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    public function getType()
    {
        //return (new SimpleCookie)->getType() . ', ' . 'Macadamia Cookie';
        return $this->cookie->getType() . ', Macadamia Cookie!';

    }

    public function getCalories()
    {
        return $this->cookie->getCalories() + 10;
    }
}

class CookieWhiteChocolate implements Cookie
{
    Protected Cookie $cookie;

    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    //  Your code here
    public function getType()
    {
      return $this->cookie->getType() . ', White Chocolate Cookie';
        //  return (new CookieMacadamia())->getType() . ', ' . 'White Chocolate Cookie';
    }

    public function getCalories()
    {
        return$this->cookie->getCalories() + 20;
        //return (new CookieMacadamia)->getCalories() + 20;
    }
}
