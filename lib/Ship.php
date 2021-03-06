<?php

class Ship
{
    private $id;

    private $name;

    private $weaponPower = 0;

    private $jediFactor = 0;

    private $strength = 0;

    private $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function sayHello()
    {
        echo 'Hi there!';
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }
    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    public function setStrength($number)
    {
        if (!is_numeric($number)) {
            throw new \Exception('Strength must be a number, duh!');
            // Exceptions: are a special internal object to php. It stops the flow and shows an error.
        }
        $this->strength = $number;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s', //Format (it can be stored in a $var).
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s w:%s, j:%s, s:%s', //Format (it can be stored in a $var).
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}
