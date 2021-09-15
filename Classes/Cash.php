<?php

class Cash
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function enterAge()
    {
        $prompt = (int)readline("Enter your age: ");
        $prompt >= 18 ?: die("You're too young to buy guns!");
    }

}