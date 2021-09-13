<?php

    class Pistol extends Weapons
    {
        public function trajectory(): int
        {
            return 100 / 5 + 3;
        }
    }