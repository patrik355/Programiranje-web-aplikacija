<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vježba 15</title>
</head>
<body>

<h2>Tražilica korisnika</h2>

<form method="POST">
    <input type="text" name="search" placeholder="Unesi ime ili prezime">
    <button type="submit">Pretraži</button>
</form>

<?php

$conn = mysqli_connect("localhost", "root", "", "vjezba15");

if (!$conn) {
    die("Greška kod spajanja na bazu!");
}

if (isset($_POST['search'])) {

    $search = $_POST['search'];

    $query = "
        SELECT * FROM users
        WHERE firstname LIKE '%$search%'
        OR lastname LIKE '%$search%'
    ";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        echo "<h3>Rezultati:</h3>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "ID: " . $row['id'] . "<br>";
            echo "Ime: " . $row['firstname'] . "<br>";
            echo "Prezime: " . $row['lastname'] . "<br><br>";
        }

    } else {

        echo "Korisnik nije pronađen.";
    }
}

mysqli_close($conn);

?>

</body>
</html>