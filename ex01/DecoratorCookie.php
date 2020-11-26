<?php
include_once('Cookie.php');
include_once ('SimpleCookie.php');

class CookieMacadamia implements Cookie
{
    //  Your code here

    public function getType()
    {
        return (new SimpleCookie)->getType() . ', ' . 'Macadamia Cookie';
    }

    public function getCalories()
    {
        return (new SimpleCookie)->getCalories() + 10;
    }
}

class CookieWhiteChocolate implements Cookie
{
    //  Your code here
    public function getType()
    {
        return (new CookieMacadamia())->getType() . ', ' . 'White Chocolate Cookie';
    }

    public function getCalories()
    {
        return (new CookieMacadamia)->getCalories() + 20;
    }
}
