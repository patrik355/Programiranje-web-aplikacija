<?php
$naslov = "PHP Dokument - vježba 1d";
$autor = "Patrik Poldrugač";
$opis = "Ova stranica nadograđuje vježbu 1c: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis";
$linkInfo = "https://hr.wikipedia.org/wiki/PHP";
$linkNatrag = "vjezba2-2.php";
$btnTekst = "Primijeni odabir";
$btnNatragTekst = "Natrag na vježba 1c";

$tema = $_GET['tema'] ?? 'dark';
$slika = $_GET['slika'] ?? 'php';
$opis1 = isset($_GET['opis']);

if ($tema === 'light') {
    $bg = "#ffffff";
    $text = "#000000";
    $card = "#f5f5f5";
} else {
    $bg = "#1e1f22";
    $text = "#ffffff";
    $card = "#2b2d31";
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dokument</title>
    <style>
        :root{
            --bg:  <?php echo $bg ?>;
            --card: <?php echo $card ?>;
            --text: <?php echo $text ?>; 
            --muted: #333845; 
            --accent: #0034b6; 
        }

        *{
            box-sizing: border-box;
        }

        body{
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            background: var(--bg);
            color: var(--text);
        }
        h1{
            font-size: 2rem;
            margin-top: 0;
            margin-bottom: 14px;            
        }
        p{
            margin-bottom: 14px;
            line-height: 1.6;
            color: var(--text);
        }

        footer{
            font-size: 0.9rem;
            color: var(--muted);
        }

        .wrap{
            width: 100%;
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }
        .btn{
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            background: #ffffff00;
            color: var(--accent);
        }
        
        .btn:hover{
            background: var(--accent);
            color: #fff;
        }

        .btn:focus-visible{
            outline: 3px solid var(--accent);
        }

        .btn:active{
            opacity: 0.5;
        }

        a{
            color: var(--text);
            text-decoration: none;
            
        }
        a:hover{
            text-decoration: underline;
        }

        img{
            max-width: 60%;
            height: auto;
            object-fit: cover;            
        }
        
    </style>
</head>
<body>
<div class="wrap">
    <h1><?php echo "$naslov" ?></h1>
    <p>Ovu stranicu izradio je <strong><?php echo "$autor" ?></strong></p>
    <img src="img/<?php echo $slika ?>.jpg" width="100%">
    <?php
        if($opis1){
            echo "<p>$opis</p>";
        }
    ?>
    <form method="get" class="formaTema">
        <fieldset>
            <legend>Odaberi temu</legend>
            <label>
                <input type="radio" name="tema" value="dark" <?php if($tema=='dark') echo 'checked'?>>
                Dark
            </label>
            <br>
            <label>
                <input type="radio" name="tema" value="light" <?php if($tema=='light') echo 'checked'?>>
                Light
            </label>
        </fieldset>
        <br>
        <fieldset>
            <legend>Odaberi sliku</legend>
            <label>
                Slika:
                <br>
                <select name="slika">
                    <option value="PHP" <?php if($slika == 'PHP') echo 'selected'; ?> >PHP</option>
                    <option value="server" <?php if($slika == 'server') echo 'selected'; ?> >Server</option>
                    <option value="code" <?php if($slika == 'code') echo 'selected'; ?> >Code</option>
                </select>
            </label>
        </fieldset>
        <label class="check">
            <input type="checkbox" name="opis" <?php if($opis1) echo 'checked'?> >
            Prikaži opis
        </label>    
        <br>
        <div class="gumbi">
            <button class="btn" type="submit"> <?php echo "$btnTekst" ?> </button>
            <a href="<?php echo "$linkNatrag"?>" >
                <button class="btn" type="button"> <?php echo "$btnNatragTekst" ?> </button>
            </a>
        </div>
    </form>
<footer>
    <p>@ 2026 - Demo za PHP</p>
</footer>
</div>
</body>
</html>