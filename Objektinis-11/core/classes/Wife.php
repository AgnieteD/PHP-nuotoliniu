<?php

class Wife 
{
    public $health;

    public function __construct()
    {
        $this->health = 50;
    }

    public function heal()
    {
        $aspirine = new Aspirine($this);
        $aspirine->use();
    }
}