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
            foreach($this->weapons as $index => $weapon)
            {
                echo "$index | " .
                     "{$weapon->getName()} - " .
                     "Licenses: [{$weapon->getLicense()}] " .
                     "Trajectory: {$weapon->trajectory()}\n";
            }
        }

        public function buyWeapon(int $selection): ?array
        {
            if(isset($this->weapons[$selection])){
                unset($this->weapons[$selection]);
                $this->weapons = array_values($this->weapons);
                return $this->weapons;
            }
            echo "Wrong input!\n";
            return null;
        }
    }