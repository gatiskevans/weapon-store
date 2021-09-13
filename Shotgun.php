<?php

    class Shotgun extends Weapons
    {
        public function trajectory(): int
        {
            return 90 / 30 + 2;
        }
    }