<?php

$ac00001 = [
  'iban' => 'DE1234000000001234',
  'name' => 'Max Müller',
  'balance' => 1150
];
$ac00002 = [
  'iban' => 'DE1234000000001234',
  'name' => 'Moritz Mars',
  'balance' => 1585
];


function print_balance($account) {
  echo "Der Kontostand der IBAN {$account['iban']} ist: {$account['balance']}";
} 


function sepa(&$fromAccount, &$toAccount, $amount) {
  if($fromAccount['balance'] > $amount) {
    $fromAccount['balance'] = $fromAccount['balance'] - $amount;
    $toAccount['balance'] = $toAccount['balance'] + $amount;
  }
}

sepa($ac00001, $ac00002, 150);

print_balance($ac00001);

