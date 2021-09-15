<?php

class WeaponStore
{
    private array $weapons;

    public function __construct(array $weapons)
    {
        $this->weapons = $weapons;
    }

    public function displayWeapons(): void
    {
        /** @var  $weapon Weapons */
        foreach ($this->weapons as $index => $weapon) {
            echo "$index | " .
                "{$weapon->getName()} - " .
                "Licenses: [{$weapon->listLicenses()}] " .
                "Price: \${$weapon->getPrice()} " .
                "Trajectory: {$weapon->trajectory()}\n";
        }
    }

    public function buyWeapon(int $selection, Customer $user): ?array
    {
        $count = 0;
        foreach($user->getLicenses() as $license){
            if(in_array($license, $this->weapons[$selection]->getLicense())) $count++;
        }

        if($count !== count($this->weapons[$selection]->getLicense())) die("You don't have the license!");

        if (isset($this->weapons[$selection])) {
            if($this->weapons[$selection]->getPrice() <= $user->getCash()){
                $user->setCash($this->weapons[$selection]->getPrice());
            } else {
                echo "Not enough money!\n";
                return null;
            }
            unset($this->weapons[$selection]);
            $this->weapons = array_values($this->weapons);
            return $this->weapons;
        }
        echo "Wrong input!\n";
        return null;
    }

    public function choosePayment(string $selection, Customer $user): void
    {
        if(!class_exists($selection)) die("This method doesn't exist!");
        $selection = new $selection($user);
        $selection->enterCredentials();
    }
}