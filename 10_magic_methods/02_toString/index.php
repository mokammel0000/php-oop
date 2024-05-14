<?php

// __toString() method must return a string, otherwise PHP will throw an Error.

class BankAccount
{
    public function __construct(private int $accountNumber, public int $balance)
    {
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function __toString()
    {
        return "This is account number {$this->accountNumber}, it's balance = {$this->balance}";
    }
}


$ahmed_account = new BankAccount(accountNumber:1, balance: 3000);

$ahmed_account->deposit(1000);

echo $ahmed_account;   // Fatal error: Object of class BankAccount could not be converted to string
