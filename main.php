<?php

require_once 'Classes/Weapons.php';
require_once 'Classes/Pistol.php';
require_once 'Classes/Shotgun.php';
require_once 'Classes/WeaponStore.php';
require_once 'Classes/Rifle.php';
require_once 'Classes/User.php';
require_once 'Classes/Paypal.php';
require_once 'Classes/Visa.php';
require_once 'Classes/Cash.php';

$user = new User("John Doe", 1000, "JohnDoe", "johndoe@gmail.com");

$weapons = [
    new Pistol("Beretta M9", "A"),
    new Pistol("2mm Kolibri", "C"),
    new Shotgun("Benelli M3", "Z"),
    new Rifle("AK47", "B", "Heavy Arms")
];

$store = new WeaponStore($weapons);


while (true) {
    echo "Hello {$user->getName()}. Your cash: \${$user->getCash()}\n";
    $store->displayWeapons();

    $selection = readline("Choose a weapon to buy (Q to exit): ");
    if (strtoupper($selection) === "Q") die("Bye!");
    if ($store->buyWeapon($selection) === null) continue;

    echo "0 | Paypal\n";
    echo "1 | Visa\n";
    echo "2 | Cash\n";

    $choosePayment = readline("Choose your payment method (0-2): ");
    $store->choosePayment($choosePayment, $user);

    $weapons = $store->buyWeapon((int)$selection);
    echo "Thank you for the purchase\n";

    if (empty($weapons)) die("Shop is empty!");
}
