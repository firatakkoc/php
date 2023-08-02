<?php

class BankAccount {
    public $iban;
    public $balance;

    function __construct($iban, $balance) {
        $this->iban = $iban;
        $this->balance = $balance;

    }
    function printBalance() {
        echo "Kontostand wird von <b>{$this->iban}</b>  ist: <u> {$this->balance}€ </u>.\n";
        
    }
}


$account1 = new BankAccount("DE1234567890000002",750);
$account1->printBalance();


?>