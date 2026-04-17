<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
</head>
<body>
  <h1>Kalkulator (Switch naredba)</h1>
  <form action="" method="POST" id="kalkulator">
    <label for="a">Upiši prvi broj</label>
    <input type="number" name="a" id="a" required>
    <br><br>
    <label for="b">Upiši drugi broj</label>
    <input type="number" name="b" id="b" required>
    <br>
    <br>
    <button type="submit" name="operacija" value="+">+</button>
    <button type="submit" name="operacija" value="-">-</button>
    <button type="submit" name="operacija" value="*">*</button>
    <button type="submit" name="operacija" value="/">/</button>
    <br>
  </form>
    <p>Rezultat:</p>

   <?php
    if (isset($_POST['operacija'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['operacija'];
        switch ($op) {
            case '+':
                echo $a + $b;
                break;
            case '-':
                echo $a - $b;
                break;
            case '*':
                echo $a * $b;
                break;
            case '/':
                echo $a / $b;
                break;
            default:
                break;
        }
    }
   ?>
</body>
</html>