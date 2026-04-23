<?php 
$auto = '';
if(isset($_POST['Submit'])){
    if(isset($_POST['auto'])){
        $auto = $_POST['auto'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobili</title>
</head>
<body>
    <form action="" method="POST">
        <label for="vozila">Odaberi vozila:</label>
        <br>
            <input type="radio" name="auto" id="audi" value="Audi">
            <label for="audi">Audi</label>
            <br>
            <input type="radio" name="auto" id="bmw" value="BMW">
            <label for="bmw">BMW</label>
            <br>
            <input type="radio" name="auto" id="renault" value="Renault">
            <label for="renault">Renault</label>
            <br>
            <input type="radio" name="auto" id="citroen" value="Citroen">
            <label for="citroen">Citroen</label>
            <br>
            <input type="submit" value="Send" name="Submit">
    </form>
    <?php 
        echo $auto;
    ?>
</body>
</html>