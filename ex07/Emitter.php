<?php

class Emitter
{
  // Your code here
    public static  $instance;
    private $listeners = [];

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __construct()
    {
    }

    public function emit(string $event, ...$args)
    {
        call_user_func_array($event);
    }

    public function on(string $event, callable $fct)
    {
        $fct = $this->listeners[];
    }
}