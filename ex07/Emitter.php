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
        if (array_key_exists($event, $this->listeners)){
            foreach ($this->listeners[$event] as $listener){
                call_user_func_array($listener, $args);
            }
        }
    }

    public function on(string $event, callable $fct)
    {
        if (!array_key_exists($event, $this->listeners)) {
            $this->listeners[$event] = [];
        }
        $this->listeners[$event][] = $fct;
    }
}