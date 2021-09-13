<?php

    require_once 'Weapons.php';
    require_once 'Pistol.php';
    require_once 'Shotgun.php';
    require_once 'WeaponStore.php';
    require_once 'Rifle.php';

    $weapons = [
        new Pistol("Beretta M9", "A"),
        new Pistol("2mm Kolibri", "C"),
        new Shotgun("Benelli M3", "Z"),
        new Rifle("AK47","B", "Heavy Arms")
    ];

    $store = new WeaponStore($weapons);

    while(true){
        $store->displayWeapons();

        $selection = readline("Choose a weapon to buy (Q to exit): ");
        if(strtoupper($selection) === "Q") die("Bye!");

        $weapons = $store->buyWeapon((int) $selection);
        echo "Thank you for the purchase\n";

        if(empty($weapons)) die("Shop is empty!");
    }
