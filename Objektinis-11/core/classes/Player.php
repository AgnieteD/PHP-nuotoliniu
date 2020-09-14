<?php

class Player
{
    public $health;

    public function __construct()
    {
        $this->health = 20;
    }

    public function heal()
    {
        $potion = new Potion($this);
        $potion->use();
    }
}