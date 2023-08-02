<?php

class BankAccount {
    function __construct(private string $iban, private float $balance) {
    }
    function printBalance() {
        echo "Kontostand wird von <b>{$this->iban}</b>  ist: <u> {$this->balance}€ </u> \n";
    }

    function sepa(BankAccount $toAccount, float $amount) {
        echo "Es wird überwiesen von <b>{$this->iban}</b> auf <b>{$toAccount->iban}</b>";
    
        if ($amount > $this->balance) {
            echo "Kein ausreichendes Geld auf dem Konto.";
        } else {
            $this->balance -= $amount;
            $toAccount->balance += $amount;
            echo " Überweisung erfolgreich."."<br>";
        }
    }
    

    function getIban() {
        return $this->iban;
    }

    function getBalance(){
        return $this->balance;
    }

    function atmPayIn($amount) {
        if($this->balance < $amount) {
            echo "Kein ausreichendes Geld auf dem Konto.";
        }
        else {
            $this->balance-=$amount;
        }
        
    }
}


$account1 = new BankAccount("DE1234567890000002",750);
$account2 = new BankAccount("AT12345654634600340",2350);



$account1->atmPayIn(50);
echo "<br>";
var_dump($account1->getIban());
echo "<br>";
var_dump($account1->getBalance());


// $account1->sepa($account2, 150);
// echo "<br>";

// $account1->printBalance();
// echo "<br>";
// $account2->printBalance();
// echo "<br>";


?>