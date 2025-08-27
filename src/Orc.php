<?php

class Orc extends Character{

    private int $damagemin;
    private int $damagemax;

    public function getDamagemin(){
        return $this->damagemin;
    }

    public function setDamagemin($damagemin){
        $this->damagemin = $damagemin;
    }

    public function getDamagemax(){
        return $this->damagemax;
    }

    public function setDamagemax($damagemax){
        $this->damagemax = $damagemax;
    }

    public function __construct($health,$mana,$damagemin,$damagemax)
    {
        parent::__construct($health,$mana);
        $this->setDamagemin($damagemin);
        $this->setDamagemax($damagemax);
    }
}
