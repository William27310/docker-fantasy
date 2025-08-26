<?php 

class Character{

    private int $health;
    private int $mana;

    public function getHealth() {
        return $this->health;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function getMana() {
        return $this->mana;
    }

    public function setMana($mana) {
        $this->mana = $mana;
    }

    public function __construct($health,$mana)
    {
        $this->setHealth($health);
        $this->setMana($mana);
    }
}