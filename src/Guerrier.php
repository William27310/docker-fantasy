<?php

class Guerrier extends Character{

    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    public function getWeapon() {
        return $this->weapon;
    }

    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }

    public function getWeaponDamage() {
        return $this->weaponDamage;
    }

    public function setWeaponDamage($weaponDamage) {
        $this->weaponDamage = $weaponDamage;
    }

    public function getShield() {
        return $this->shield;
    }

    public function setShield($shield) {
        $this->shield = $shield;
    }

    public function getShieldValue() {
        return $this->shieldValue;
    }

    public function setShieldValue($shieldValue) {
        $this->shieldValue = $shieldValue;
    }

    public function __construct($health,$mana,$weapon,$weaponDamage,$shield,$shieldValue)
    {
        parent::__construct($health,$mana);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
    }

    public function attack() {
        return $this->getWeaponDamage();
    }
}