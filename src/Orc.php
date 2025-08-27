<?php

class Orc extends Character
{

    private int $damagemin;
    private int $damagemax;

    public function getDamagemin()
    {
        return $this->damagemin;
    }

    public function setDamagemin($damagemin)
    {
        $this->damagemin = $damagemin;
    }

    public function getDamagemax()
    {
        return $this->damagemax;
    }

    public function setDamagemax($damagemax)
    {
        $this->damagemax = $damagemax;
    }

    public function __construct($health, $mana, $damagemin, $damagemax)
    {
        parent::__construct($health, $mana);
        $this->setDamagemin($damagemin);
        $this->setDamagemax($damagemax);
        // echo '<div class="card" style="width: 18rem;">';
        // echo '<img src="assets/img/Orc.jpg" class="card-img-top" alt="..."> ';
        // echo '<div class="card-body">';
        // echo '<h5> Orc </h5>';
        // echo '<p class="card-text">' . "Health : " . $this->getHealth() . '<br>' . "Mana : " . $this->getMana() . '<br>' . '</p>';
        // echo '<p>' . "Damage Min : " . $this->getDamagemin() . '<br>' . "Damage Max : " . $this->getDamagemax() . '<br>' . '</p>';
        // echo '</div>';
        // echo '</div>';
    }

    public function attack()
    {
        return rand($this->getDamagemin(), $this->getDamagemax());
    }
}
