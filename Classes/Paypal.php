<?php

class Paypal extends PaymentMethods
{
    private Customer $user;

    public function __construct(Customer $user)
    {
        $this->user = $user;
    }

    public function enterCredentials(): void
    {
        $prompt = readline("Enter username: ");
        $prompt === $this->user->getUsername() ?: die("That's not your username");

        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }
}