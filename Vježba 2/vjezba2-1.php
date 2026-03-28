<?php
$naslov = "PHP Dokument";
$autor = "Patrik Poldrugač";
$text = "PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu";
$link = "https://hr.wikipedia.org/wiki/PHP";
$dugme = "Saznajte više o PHP-u";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dokument</title>
    <style>
        :root{
            
            --bg:  #313338;
            --card: #ffffff; 
            --text: #000000; 
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
        
    </style>
</head>
<body>
    <div class="wrap">
        <h1><?php echo "$naslov" ?></h1>
        <p>Ovu stranicu izradio je <strong><?php echo "$autor" ?></strong></p>
        <p><?php echo "$text" ?></p>
        <a href="<?php echo "$link"?>"target="_blank">
            <button class="btn"> <?php echo "$dugme" ?> </button>
        </a>
        <footer>
            <p>@ 2026 - Demo za PHP</p>
        </footer>
    </div>
</body>
</html>