<?php 

$account1 = [
  'iban' => 'DE123400000123123',
  'name' => 'Max Müller',
  'balance' => 750
];
$account2 = [
  'iban' => 'AT123400000123123',
  'name' => 'Jow Reihe',
  'balance' => 350
];

function print_balance($account) {
  $hmtl = '<td>' . $account['iban'] . '</td>';
  $hmtl .= '<td>' . $account['name'] . '</td>';
  $hmtl .= '<td>' . $account['balance'] . '</td>';

  return $hmtl;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bankkonto</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<p class="h1 text-center m-5">Bankkonto Information</p>
  <h1></h1>
  <div class="container">
  <table class="table ">
  <thead>
    <tr>
      <th scope="col">IBAN</th>
      <th scope="col">NAME</th>
      <th scope="col">BALANCE</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <?php echo print_balance($account1); ?>
  </tr>
  <tbody>
  <tr>
    <?php echo print_balance($account2); ?>
  </tr>
  </tbody>

</table>
</div>
</body>
</html>
