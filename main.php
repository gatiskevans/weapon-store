<?php

require_once 'Classes/Weapons.php';
require_once 'Classes/Pistol.php';
require_once 'Classes/Shotgun.php';
require_once 'Classes/WeaponStore.php';
require_once 'Classes/Rifle.php';
require_once 'Classes/Customer.php';
require_once 'Classes/PaymentMethods.php';
require_once 'Classes/Paypal.php';
require_once 'Classes/Visa.php';
require_once 'Classes/Cash.php';

$user = new Customer("John Doe", 1000, "JohnDoe", "johndoe@gmail.com", ['A', 'C', 'Z']);

$weapons = [
    new Pistol("Beretta M9", "A", 200),
    new Pistol("2mm Kolibri", "C", 450),
    new Shotgun("Benelli M3", "Z", 700),
    new Rifle("AK47", "B", "Heavy Arms", 1000)
];

$store = new WeaponStore($weapons);


while (true) {
    echo "Hello {$user->getName()}. Licenses [{$user->listLicenses()}] Your cash: \${$user->getCash()}\n";
    $store->displayWeapons();

    $selection = readline("Choose a weapon to buy (Q to exit): ");
    if (strtoupper($selection) === "Q") die("Bye!");

    echo "Paypal\n";
    echo "Visa\n";
    echo "Cash\n";

    $choosePayment = readline("Choose your payment method: ");
    $store->choosePayment($choosePayment, $user);

    if ($store->buyWeapon($selection, $user) === null) continue;
    echo "Thank you for the purchase\n";

    if (empty($weapons)) die("Shop is empty!");
}
