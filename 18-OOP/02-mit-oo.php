<?php

class BankAccount
{
    public $name;
    public $iban;
    public $balance;
}

$account1 = new BankAccount();
$account1->name = 'Firat Akkoc';
$account1->iban = 'DE1234567893000000';
$account1->balance = '5650';

$account2 = new BankAccount();
$account2->name = 'Max Mustermann';
$account2->iban = 'DE1234567893000000';
$account2->balance = '3450';

$account3 = new BankAccount();
$account3->name = 'Nolan Jungermann';
$account3->iban = 'DE3DFDF893000000';
$account3->balance = '4250';

var_dump($account1);
?>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
    }

    th {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<table>
    <tr>
        <th>Name</th>
        <th>IBAN</th>
        <th>Balance</th>
    </tr>

    <tr>
        <td><?php echo $account1->name; ?></td>
        <td><?php echo $account1->iban; ?></td>
        <td><?php echo $account1->balance; ?>€</td>
    </tr>
    <tr>
        <td><?php echo $account2->name; ?></td>
        <td><?php echo $account2->iban; ?></td>
        <td><?php echo $account2->balance; ?>€</td>
    </tr>
    <tr>
        <td><?php echo $account3->name; ?></td>
        <td><?php echo $account3->iban; ?></td>
        <td><?php echo $account3->balance; ?>€</td>
    </tr>


</table>