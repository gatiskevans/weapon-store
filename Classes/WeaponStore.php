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

    public function choosePayment(int $selection, User $user): void
    {
        switch ($selection) {
            case 0:
                $paypal = new Paypal($user);
                $paypal->enterAge();
                $paypal->enterUsername();
                break;
            case 1:
                $visa = new Visa($user);
                $visa->enterEmail();
                $visa->enterAge();
                break;
            case 2:
                $cash = new Cash($user);
                $cash->enterAge();
                break;
            default:
                echo "Something's Wrong!\n";
                break;
        }
    }
}