<?php

class Cash
{

    public function enterAge(): void
    {
        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }

}