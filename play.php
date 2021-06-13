<?php

require_once __DIR__.'/lib/Ship.php';

/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship name: '.$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
    echo '<hr/>';
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

printShipSummary($myShip);

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

echo '<hr/>';
printShipSummary($otherShip);

if ($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name.' has more strength.';
} else {
    echo $myShip->name.' has more strength.';
}