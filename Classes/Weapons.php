<?php

    class Weapons
    {
        protected string $name;
        protected string $license;
        protected int $price;

        public function __construct(string $name, string $licence, int $price)
        {
            $this->name = $name;
            $this->license = $licence;
            $this->price = $price;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getLicense(): string
        {
            return $this->license;
        }

        public function trajectory(): int
        {
            return 10 * 4 - 4;
        }

        public function getPrice(): int
        {
            return $this->price;
        }

    }