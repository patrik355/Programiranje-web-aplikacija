<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random broj</title>
  <style>
    button{
        border: none;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
  </style>
</head>
<body>
  <h1>Pogodi broj</h1>
  <form action="" method="POST" id="randomBrojIgra">
    <label for="broj">Probajte pogoditi jedan broj od 1 do 9</label>
    <input type="number" name="broj" id="broj" required>
  </form>

  <?php
    $randomNumber = rand(1, 9);
    if (isset($_POST["broj"])) {
      if ($_POST["broj"] == $randomNumber ) {
        print '<button style="color:white; background-color: green;">Pogodak, probaj ponovno!</button>';
      } else {
        print '<button style="color:white; background-color: red;">Krivo, probaj ponovno!</button>';
      }
      print '<h3>Zamišljeni broj je bio '.$randomNumber.'</h3>';
    }
  ?>
</body>
</html>