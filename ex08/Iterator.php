<?php
include_once 'RadioStation.php';

class StationList implements Countable, Iterator
{
       // Your code here
    protected $stations = [];
    protected $counter;



    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter($this->stations, function (RadioStation $station) use ($toRemoveFrequency) {
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function current(): RadioStation
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

    public function valid(): bool
    {
        return isset($this->stations[$this->counter]);
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    public function count(): int
    {
        return count($this->stations);
    }


}