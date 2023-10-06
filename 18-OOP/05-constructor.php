<pre>
    <?php

    class BankKonto{

      function __construct(public string $iban, public float $balance) {}

      public function printBalance() {
        echo "Der Kontostand von {$this->iban} ist: {$this->balance}\n";
      }
    }
    echo "<br>";

    $konto1 = new BankKonto('DE1234567890000001', 5750);
    $konto1->printBalance();
    echo "<br>";
    $konto2 = new BankKonto('TR601234567890000001', 7650);
    $konto2->printBalance();


    ?>
</pre>