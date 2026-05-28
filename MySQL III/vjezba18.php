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
    <title>Vježba 18</title>

    <style>

        body{
            font-family:Arial;
            margin:40px;
        }

        form{
            width:350px;
            margin-bottom:30px;
        }

        input, select{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        button{
            width:100%;
            padding:10px;
            margin-top:10px;
            background:green;
            color:white;
            border:none;
        }

        .user{
            border:1px solid gray;
            padding:15px;
            margin-top:15px;
        }

    </style>

</head>
<body>

<h1>Vježba 18</h1>

<?php

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country_id = $_POST['country_id'];

    $update = "
        UPDATE users
        SET firstname = '$firstname',
            lastname = '$lastname',
            country_id = '$country_id'
        WHERE id = '$id'
    ";

    mysqli_query($conn, $update);

    echo "<p>Korisnik ažuriran!</p>";
}

?>

<h2>Lista korisnika</h2>

<?php

$query = "
SELECT users.id,
       users.firstname,
       users.lastname,
       countries.country_name
FROM users
INNER JOIN countries
ON users.country_id = countries.id
";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

?>

<div class="user">

<form method="POST">

    <input type="hidden" name="id"
           value="<?php echo $row['id']; ?>">

    <label>Ime</label>

    <input type="text"
           name="firstname"
           value="<?php echo $row['firstname']; ?>">

    <label>Prezime</label>

    <input type="text"
           name="lastname"
           value="<?php echo $row['lastname']; ?>">

    <label>Država</label>

    <select name="country_id">

        <?php

        $countries = mysqli_query($conn, "SELECT * FROM countries");

        while($country = mysqli_fetch_assoc($countries)){

            $selected = "";

            if($country['country_name'] == $row['country_name']){
                $selected = "selected";
            }

            echo "
            <option value='".$country['id']."' $selected>
                ".$country['country_name']."
            </option>
            ";
        }

        ?>

    </select>

    <button type="submit" name="update">
        Spremi promjene
    </button>

</form>

</div>

<?php

}

mysqli_close($conn);

?>

</body>
</html>