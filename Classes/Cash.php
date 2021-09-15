<?php

class Cash extends PaymentMethods
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function enterCredentials(): void
    {
        $prompt = readline("Enter username: ");
        $prompt === $this->user->getUsername() ?: die("That's not your username");
    }
}