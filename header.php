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
<body <?php body_class(); ?>>
<header>
        <a href="<?php echo get_home_url();?>"><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="logo"></a>
        <div class="burger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
<div class="container-header-responsive">
<?php
        wp_nav_menu(array(
            'menu' => 'main_menu'
        ));
    ?>
</div>

</header>
