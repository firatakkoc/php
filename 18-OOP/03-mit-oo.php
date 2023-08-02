<?php

class BankAccount {
    public $iban;
    public $balance;

    function printBalance() {
        echo "Kontostand wird von <b>{$this->iban}</b>  ist: <u> {$this->balance}€ </u>.\n";
        
    }
}

$account1 = new BankAccount();
$account1->iban = "DE1234567890000002";
$account1->balance = 750;
$account1->printBalance();




$account2 = new BankAccount();
$account2->iban = "DE1234567890000002";
$account2->balance = 500;



?>