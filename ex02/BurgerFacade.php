<?php
class BurgerFacade
{
//   Your code here
    protected $burger;

    public function __construct(Burger $makeBurger)
    {
        $this->burger = $makeBurger;
    }

    /**
     * @return Burger
     */
    public function getBurger(): Burger
    {
        $this->burger->getBread();
        $this->burger->cookSteak();
        $this->burger->putTheVegetables();
        $this->burger->serve();
        return $this->burger;
    }


    public function eatBurger(): Burger
    {
        $this->burger->unpack();
        $this->burger->eat();
        $this->burger->clearTheTable();
        return $this->burger;
    }

}