<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
	session_start();
	if (isset($_GET['delete_session'])) {
	unset($_SESSION['news_title_1']);
	unset($_SESSION['news_title_2']);
	unset($_SESSION['news_title_3']);

	header("Location: index.php");
	exit;
}
	
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
				
        <meta name="author" content="alen@tvz.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Example page - HTML5</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main' . (isset($_SESSION['news_title_1']) ? ' class="session"' : '') .'>';
		
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# News
	else if ($menu == 2) { include("news.php"); }
	
	# Contact
	else if ($menu == 3) { include("contact.php"); }
	
	# About us
	else if ($menu == 4) { include("about-us.php"); }
	
	
	print '
	</main>';
	if (!empty($_SESSION['news_title_1']) || !empty($_SESSION['news_title_2']) || !empty($_SESSION['news_title_3'])) {

    print '
    <aside>
        <h2 style="text-align:center">ZADNJE PREGLEDANO</h2>
        <ul>';

        if (!empty($_SESSION['news_title_1'])) {
            print '<li style="border-bottom:2px dotted white;width:100%;"><a href="index.php?menu=2&action=1">' . $_SESSION['news_title_1'] . '</a></li>';
        }

        if (!empty($_SESSION['news_title_2'])) {
            print '<li style="border-bottom:2px dotted white;width:100%;"><a href="index.php?menu=2&action=2">' . $_SESSION['news_title_2'] . '</a></li>';
        }

        if (!empty($_SESSION['news_title_3'])) {
            print '<li style="border-bottom:2px dotted white;width:100%;"><a href="index.php?menu=2&action=3">' . $_SESSION['news_title_3'] . '</a></li>';
        }

    print '
        </ul>
		<br>

        <a href="index.php?delete_session=1">
            <button style="width:100%;padding:10px;cursor:pointer;">
                Obriši zadnje pogledano
            </button>
        </a>

    </aside>';
}
	print '
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Alen Šimec</p>
	</footer>
</body>
</html>';
?>