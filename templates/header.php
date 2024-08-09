<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cordar</title>
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a id="logo" href="<?php echo $BASE_URL; ?>" id="Logo">
            <img src="<?php echo $BASE_URL; ?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li>
                    <a class="nav-link" href="<?php echo $BASE_URL; ?>">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Categorias</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo $BASE_URL; ?>contato.php">Contato</a>
                </li>
            </ul>
        </nav>
    </header>