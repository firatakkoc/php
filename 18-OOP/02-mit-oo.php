<pre>
    <?php

    class BankAccount
    {

        function __construct($iban, $name, $balance) {
            $this->iban = $iban; 
            $this->name = $name; 
            $this->balance = $balance; 
        }

        public $iban;
        public $name;
        public $balance;
    }

    // andere Methoden

    /*
    $ac00001->iban = 'DE45345345345345';
    $ac00001->name = 'Moritz';
    $ac00001->balance = '850';
    */

    $ac00001 = new BankAccount('DE2434235345345', 'Max Müller', 2324);

    var_dump($ac00001);




    ?>
</pre>