<?php

class BankAccount {


    function __construct(public string $iban, public float $balance) {


    }

    function printBalance() {
        echo "Kontostand wird von <b>{$this->iban}</b>  ist: <u> {$this->balance}€ </u> \n";
        
    }
}


$account1 = new BankAccount("DE1234567890000002",750);
$account1->printBalance();

echo "<br>";

$account2 = new BankAccount("AT12345654634600340",2350);
$account2->printBalance();


?>