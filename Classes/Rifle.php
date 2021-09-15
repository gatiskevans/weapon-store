<?php

    class Rifle extends Weapons
    {
        public function __construct(string $name, string $licenses, string $heavyArms, int $price)
        {
            parent::__construct($name, $licenses, $price);
            $this->license[] = $heavyArms;
        }

        public function trajectory(): int
        {
            return 100 - 33;
        }
    }