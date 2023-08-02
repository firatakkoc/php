<?php

class BankAccount {
    function __construct(public string $iban, public float $balance) {
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
    
}


$account1 = new BankAccount("DE1234567890000002",750);
$account2 = new BankAccount("AT12345654634600340",2350);





$account1->sepa($account2, 4150);
echo "<br>";

$account1->printBalance();
echo "<br>";
$account2->printBalance();
echo "<br>";


?>