<?php 
$ulaz = "";
$prikazi = false;
if(isset($_POST['submit'])){
    if(isset($_POST['ulazniTekst'])){
        $ulaz = $_POST['ulazniTekst'];
        $duljina = str_word_count($ulaz);
        $prikazi = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broj riječi</title>
</head>
<body>
    <h1>Zadatak str_word_count</h1>
    <p>U zadatku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu str_word_count</p>
    <form action="" method="POST">
        <p><strong>Ulazni niz:</strong></p>
        <input type="text" name="ulazniTekst" id="" value="">
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <?php
    if($prikazi){
        echo "Ulazni niz: " . "<span style='color: #ff4b4b; background-color: #ffe6e6'>" .htmlspecialchars($ulaz) . "</span>". " sadrži ". htmlspecialchars($duljina) . " riječi";
    }
    ?>
</body>
</html>