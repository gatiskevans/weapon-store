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
    }