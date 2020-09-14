<?php
class Dog
{
    private $name;
    private $hunger_lvl;
    private $fatigue;
    private $strength;

    public function __construct(array $params)
    {
        $this->name = $params['name'];
        $this->hunger_lvl = $params['hunger_lvl'];
        $this->fatigue = $params['fatigue'];
        $this->strength = $params['strength'];
    }   

    public function poop()
    {
        $this->hunger_lvl += 10;
    }

}