<?php

interface Filter 
{
  public function getFilter();
}

class BAndWFilter implements Filter
{
//  Your code here
    public function getFilter()
    {
        echo 'Picture with Black And White Filter' . PHP_EOL;

    }
}

class SepiaFilter implements Filter
{
//  Your code here
    public function getFilter()
    {
        echo 'Picture with Sepia Filter' . PHP_EOL;
    }
}