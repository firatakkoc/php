<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1 {
      font-family: sans-serif;
      color: crimson
    }
  </style>
</head>


<body>
  <center>
    <h3>Form Anwenden</h3>
    <hr>
    <form action="form.php" method="POST">
      <input type="text" name="name"> <br> <br>
      <input type="password" name="password"> <br> <br>
      <input class="btn" type="submit" name="button" value="go"> <br> <br>
      <input type="reset" name="reset" value="reset"> <br> <br>
      <h1><?php echo "username: ".$name = $_POST['name']; ?></h1>
      <h1><?php echo "password: ".$pass = $_POST['password'];?></h1>
    </form>
  </center>
</body>
</html>