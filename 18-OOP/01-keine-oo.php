<?php

$account1 = [
    'iban' => 'DE247573485735873454',
    'name' => 'Firat Akkoc',
    'balance' => 750
];

$account2 = [
    'iban' => 'AT1312432342345234523',
    'name' => 'Monika Mustermann',
    'balance' => 1750
];

function print_balance($account) {
    echo "Der Kontostand der IBAN {$account['iban']} ist: {$account['balance']}";
}

// print_balance($account2);

function sepa(&$fromAccount, &$toAccount, $amount) {
    if ($fromAccount['balance'] > $amount) {
        $fromAccount['balance'] = $fromAccount['balance'] - $amount;
        $toAccount['balance'] = $toAccount['balance'] + $amount;
        print_r($fromAccount);
    }
}

sepa($account1, $account2, 150);

echo "<br>";

print_balance($account1);

// $p1 = [];
// $p2 = [];

// sepa($p1, $p2, 100);

?>