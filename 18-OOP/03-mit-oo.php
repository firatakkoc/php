<pre>
    <?php

    class BankAccount
    {

        public $iban;
        public $name;
        public $balance;

        function printBalance() {
          echo "Der Kontostand von {$this->iban} ist: {$this->balance}\n";
        }
    }


    $ac00001 = new BankAccount();
    $ac00001->iban = 'DE2434235345345';
    $ac00001->name = 'Max Müller';
    $ac00001->balance = 2324;


    $ac00001->printBalance();


    ?>
</pre>