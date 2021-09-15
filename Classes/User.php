<?php

class User
{
    private string $name;
    private int $cash;
    private string $username;
    private string $email;

    public function __construct(string $name, int $cash, string $username, string $email)
    {
        $this->name = $name;
        $this->cash = $cash;
        $this->username = $username;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCash(): int
    {
        return $this->cash;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setCash(int $cash): void
    {
        $this->cash -= $cash;
    }
}