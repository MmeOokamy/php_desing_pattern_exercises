<?php
class Security
{
    // Your code here
    protected $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if($this->authenticate($password)){
            $this->door->open();
        } else {
            echo 'ALERTE ALERTE!!!' . PHP_EOL;
        }

    }

    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }

    public function close()
    {
        $this->door->close();
    }
}