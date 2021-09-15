<?php

class Paypal
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function enterUsername()
    {
        $prompt = readline("Enter username: ");
        $prompt === $this->user->getUsername() ?: die("That's not your username");
    }

    public function enterAge()
    {
        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }

    private function makeTransaction()
    {

    }

}