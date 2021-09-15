<?php

class Customer
{
    private string $name;
    private int $cash;
    private string $username;
    private string $email;
    private array $licenses;

    public function __construct(string $name, int $cash, string $username, string $email, array $licenses)
    {
        $this->name = $name;
        $this->cash = $cash;
        $this->username = $username;
        $this->email = $email;
        $this->licenses = $licenses;
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

    public function getLicenses(): array
    {
        return $this->licenses;
    }

    public function listLicenses(): string
    {
        return join(", ", $this->licenses);
    }
}