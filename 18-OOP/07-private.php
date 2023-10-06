<pre style="font-family: sans-serif;">
    <?php

    class BankKonto{

      function __construct(private string $iban, private float $balance) {}

      function get_iban() {
       return $this->iban;
      }

      function get_balance() {
        return $this->balance;
       }

      public function printBalance() {
        echo "Der Kontostand von {$this->iban} ist: {$this->balance}\n";
      }

      public function sepa(BankKonto $to, float $amount) {

        if ($this->balance < $amount) {
          echo "Die Überweisung von {$amount}€ konnte nicht durchgeführt werden!\n";
          return;
        }
        echo "Es wird überweisen von {$this->iban} auf {$to->iban} ";
        $this->balance -= $amount;
        $to->balance+= $amount;
      }
    }
    echo "<br>";

    $konto1 = new BankKonto('DE1234567890000001', 5750);
    $konto2 = new BankKonto('TR601234567890000001', 7650);
    echo "<br>";
    
    echo $konto1->get_balance();

    ?>
</pre>