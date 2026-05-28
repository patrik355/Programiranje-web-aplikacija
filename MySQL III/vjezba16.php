<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vježba 16</title>

    <style>

        body{
            font-family: Arial;
            margin:40px;
        }

        form{
            width:300px;
        }

        input, select{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        button{
            margin-top:15px;
            padding:10px;
            width:100%;
            background:green;
            color:white;
            border:none;
        }

    </style>

</head>
<body>

<h2>Registracija korisnika</h2>

<form method="POST">

    <input type="text" name="firstname" placeholder="Ime" required>

    <input type="text" name="lastname" placeholder="Prezime" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Lozinka" required>

    <select name="country" required>
        <option value="">Odaberi državu</option>
        <option value="Hrvatska">Hrvatska</option>
        <option value="Njemačka">Njemačka</option>
        <option value="Austrija">Austrija</option>
        <option value="Italija">Italija</option>
    </select>

    <button type="submit">Registriraj se</button>

</form>

<?php

$conn = mysqli_connect("localhost", "root", "", "vjezba16");

if (!$conn) {
    die("Greška kod spajanja!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $country = $_POST['country'];

    $query = "
        INSERT INTO users(firstname, lastname, email, password, country)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$country')
    ";

    if(mysqli_query($conn, $query)){

        echo "<p>Korisnik uspješno registriran!</p>";

    } else {

        echo "<p>Greška!</p>";
    }
}

mysqli_close($conn);

?>

</body>
</html>