<?php

class Guerrier extends Character
{

    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }

    public function getShield()
    {
        return $this->shield;
    }

    public function setShield($shield)
    {
        $this->shield = $shield;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }

    public function __construct($health, $mana, $weapon, $weaponDamage, $shield, $shieldValue)
    {
        parent::__construct($health, $mana);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
        // echo '<div class="card" style="width: 18rem;">';
        // echo '<img src="assets/img/bryan.jpg" class="card-img-top" alt="..."> ';
        // echo '<div class="card-body">';
        // echo '<h5> Guerrier </h5>';
        // echo '<p class="card-text">' . "Health : " . $this->getHealth() . '<br>' . "Mana : " . $this->getMana() . '<br>' . '</p>';
        // echo '<p>' . "Weapon : " . $this->getWeapon() . '<br>' . "Weapon Damage : " . $this->getWeaponDamage() . '<br>' . '</p>';
        // echo '<p class="card-text">' . "Shield : " . $this->getShield() . '<br>' . "Shield Absorption : " . $this->getShieldValue() . '<br>' . '</p>';
        // echo '</div>';
        // echo '</div>';
    }

    public function attack()
    {
        return $this->getWeaponDamage();
    }

    public function getDamage($damage)
    {
        $counterdamage = $damage - $this->getShieldValue();
        if ($counterdamage > 0) {
            $this->setHealth($this->getHealth() - $counterdamage);
        }
    }
}
