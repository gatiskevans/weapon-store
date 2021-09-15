<?php

    class Weapons
    {
        protected string $name;
        protected string $license;

        public function __construct(string $name, string $licence)
        {
            $this->name = $name;
            $this->license = $licence;
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

    }