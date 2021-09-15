<?php

    abstract class PaymentMethods
    {
        abstract public function enterCredentials(): void;
    }