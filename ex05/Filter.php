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
        return 'Picture with Black And White Filter';

    }
}

class SepiaFilter implements Filter
{
//  Your code here
    public function getFilter()
    {
        return 'Picture with Sepia Filter';
    }
}