<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prosjek ocjene</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        width: 500px;
        height: 700px;
        text-align: center;
    }
    h1 {
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }
    input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
    button {
        margin-top: 20px;
        width: 100%;
        background-color: #007bff;
        border: none;
        color: white;
        padding: 12px;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.2s;
    }
    button:hover {
        background-color: #0056b3;
    }
    .result {
        margin-top: 20px;
        padding: 15px;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
    }
    .prolaz {
        background: #d4edda;
        color: #155724;
    }
    .pad {
        background: #f8d7da;
        color: #721c24;
    }
  </style>
</head>
<body>
    <div class="card">
    <h1>Ocjene</h1>
    <form method="POST">
        <label>1. kolokvij</label>
        <input type="number" name="prvi" min="1" max="5" required>
        <label>2. kolokvij</label>
        <input type="number" name="drugi" min="1" max="5" required>
        <button type="submit" name="unos">Izračunaj</button>
    </form>

    <?php
    if(isset($_POST["unos"])){
        $prvi = (int)$_POST["prvi"];
        $drugi = (int)$_POST["drugi"];
        if($prvi == 1 || $drugi == 1){
            $prosjek = 1;
        } else {
            $prosjek = ($prvi + $drugi) / 2;
        }
        if($prosjek == 1){
            echo "<div class='result pad'>Krajnja ocjena: $prosjek</div>";
        } else {
            echo "<div class='result prolaz'>Krajnji prosjek: $prosjek</div>";
        }
    }
    ?>
    </div>
</body>
</html>