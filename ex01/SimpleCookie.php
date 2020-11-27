<?php

include_once('Cookie.php');

class SimpleCookie implements Cookie
{
    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getType(): string
  {
    return 'Simple Cookie';
  }

    /**
     * @return int
     */
  public function getCalories(): int
  {
    return 170;
  }
}