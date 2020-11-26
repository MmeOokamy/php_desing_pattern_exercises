<?php
include_once 'RadioStation.php';

class StationList implements Countable, Iterator
{
       // Your code here
    protected $stations = [];
    protected $counter;

    public function addStation($frequency)
    {
        $this->stations[] = (new RadioStation($frequency));
    }

    public function removeStation(RadioStation $param)
    {
        $this->stations = array_filter($this->stations, function (RadioStation $radioStation) use ($param){
            return $radioStation->$param;
        });
    }

    public function current(): int
    {
       return $this->stations[$this->counter];
    }

    public function next()
    {
        $this->counter++;
    }

    public function key()
    {
        return $this->counter;
    }

    public function valid()
    {
        return isset($this->stations[$this->counter]);
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    public function count()
    {
        return count($this->stations);
    }


}