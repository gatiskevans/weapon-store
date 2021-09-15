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
                "Licenses: [{$weapon->getLicense()}] " .
                "Price: \${$weapon->getPrice()} " .
                "Trajectory: {$weapon->trajectory()}\n";
        }
    }

    public function buyWeapon(int $selection, User $user): ?array
    {
        if (isset($this->weapons[$selection])) {
            $user->setCash($this->weapons[$selection]->getPrice());
            unset($this->weapons[$selection]);
            $this->weapons = array_values($this->weapons);
            return $this->weapons;
        }
        echo "Wrong input!\n";
        return null;
    }

    public function choosePayment(string $selection, User $user): void
    {
        if(!class_exists($selection)) die("This method doesn't exist!");
        $selection = new $selection($user);
        $selection->enterCredentials();
    }
}