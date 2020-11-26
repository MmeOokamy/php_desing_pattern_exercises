<?php

include_once('Filter.php');

interface Picture
{
  public function __construct(Filter $filter);
  public function getPicture();
}

class Portrait implements Picture
{

    protected $filter;

//  Your code here
    public function __construct(Filter $filter)
    {
        $this->filter = $filter;
    }

    public function getPicture()
    {
        echo 'Portrait ' . $this->filter->getFilter();

    }
}

class Landscape implements Picture
{
    protected $filter;
// Your code here
    public function __construct(Filter $filter)
    {
        $this->filter = $filter;
    }

    public function getPicture()
    {
        echo 'Landscape ' . $this->filter->getFilter();
    }
}