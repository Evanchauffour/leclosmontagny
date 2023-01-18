<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le CLos Montagny</title>
    <?php wp_head();?>
</head>
<body>
<header>
        <a href=""><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="logo"></a>
    <!-- <nav>
        <a href="contact">Accueil</a>
        <a href="">Nos Gites</a>
        <a href="">Activités</a>
        <a href="">Ateliers</a>
        <a href="">Contact</a>
    </nav> -->
    <nav>
        <ul class="ul-nav">
            <li>Accueil</li>
            <li class="li-gites"><a href="Contact">Nos gîtes</a>
                <ul class="ul-gites">
                    <li>La maison de florence</li>
                    <li>Le pavillon du nivolet</li>
                    <li>Le pavillon du granier</li>
                </ul>
            </li>
            <li>Activités</li>
            <li>Ateliers</li>
            <li>Contact</li>
        </ul>
    </nav>


</header>
<br>