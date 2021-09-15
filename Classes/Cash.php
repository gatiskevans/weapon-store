<?php

class Cash extends PaymentMethods
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
    }
}