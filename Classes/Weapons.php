<?php

    class Weapons
    {
        protected string $name;
        protected array $license;
        protected int $price;

        public function __construct(string $name, string $licences, int $price)
        {
            $this->name = $name;
            $this->license[] = $licences;
            $this->price = $price;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getLicense(): array
        {
            return $this->license;
        }

        public function listLicenses(): string
        {
            return join(", ", $this->license);
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