<?php

class Paypal
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function enterUsername(): void
    {
        $prompt = readline("Enter username: ");
        $prompt === $this->user->getUsername() ?: die("That's not your username");
    }

    public function enterAge(): void
    {
        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }

}