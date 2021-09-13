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
    $store->displayWeapons();