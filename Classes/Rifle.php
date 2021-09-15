<?php

    class Rifle extends Weapons
    {

        private string $heavyArms;

        public function __construct(string $name, string $licence, string $heavyArms)
        {
            parent::__construct($name, $licence);
            $this->heavyArms = $heavyArms;
        }

        public function getLicense(): string
        {
            return $this->license . ", " . $this->heavyArms;
        }

        public function trajectory(): int
        {
            return 100 - 33;
        }
    }