<?php

$conn = mysqli_connect("localhost", "root", "", "vjezba16");

if (!$conn) {
    die("Greška kod spajanja!");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vježba 17</title>

    <style>

        body{
            font-family:Arial;
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
            width:100%;
            padding:10px;
            margin-top:15px;
            background:green;
            color:white;
            border:none;
        }

        .user{
            margin-top:20px;
            padding:10px;
            border:1px solid gray;
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

    <select name="country_id" required>

        <option value="">Odaberi državu</option>

        <?php

        $countries = mysqli_query($conn, "SELECT * FROM countries");

        while($country = mysqli_fetch_assoc($countries)){

            echo "<option value='".$country['id']."'>".$country['country_name']."</option>";
        }

        ?>

    </select>

    <button type="submit">Registriraj se</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $country_id = $_POST['country_id'];

    $query = "
        INSERT INTO users(firstname, lastname, email, password, country_id)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$country_id')
    ";

    mysqli_query($conn, $query);

    echo "<p>Korisnik spremljen!</p>";
}

?>

<h2>Lista korisnika</h2>

<?php

$query = "
SELECT users.firstname,
       users.lastname,
       countries.country_name
FROM users
INNER JOIN countries
ON users.country_id = countries.id
";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

    echo "<div class='user'>";

    echo "<b>Ime:</b> " . $row['firstname'] . "<br>";

    echo "<b>Prezime:</b> " . $row['lastname'] . "<br>";

    echo "<b>Država:</b> " . $row['country_name'];

    echo "</div>";
}

mysqli_close($conn);

?>

</body>
</html>