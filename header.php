<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">

</script>
    <title>Le CLos Montagny</title>
    <?php wp_head();?>
</head>
<body>
<header>
        <a href=""><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="logo"></a>
    <!-- <nav>
        <ul class="ul-nav">
            <li><a href="">Accueil</a></li>
            <li class="li-gites">Nos gîtes
                <ul class="ul-gites">
                    <li>La maison de florence<a href=""></a></li>
                    <li>Le pavillon du nivolet<a href=""></a></li>
                    <li>Le pavillon du granier<a href=""></a></li>
                </ul>
            </li>
            <li><a href="">Activités</a></li>
            <li><a href="">Ateliers</a></li>
            <li><a href="Contact">Contact</a></li>
        </ul>
    </nav> -->
    <?php
        wp_nav_menu(array(
            'menu' => 'main_menu'
        ));
    ?>


</header>
<br>