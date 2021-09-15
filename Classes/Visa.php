<?php

class Visa
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function enterEmail()
    {
        $prompt = readline("Enter email: ");
        $prompt === $this->user->getEmail() ?: die("That's not your email");
    }

    public function enterAge()
    {
        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }

}