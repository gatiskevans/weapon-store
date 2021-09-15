<?php

class Visa extends PaymentMethods
{
    private Customer $user;

    public function __construct(Customer $user)
    {
        $this->user = $user;
    }

    public function enterCredentials(): void
    {
        $prompt = readline("Enter email: ");
        $prompt === $this->user->getEmail() ?: die("That's not your email");

        $prompt = readline("Enter username: ");
        $prompt === $this->user->getUsername() ?: die("That's not your username");

        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }
}