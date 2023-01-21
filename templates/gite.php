<?php
    // Header
    get_header();

    //Template name: Gite 

    //Images

    $images = get_field('images');

    //Options

    $options = get_field('options');
    
    // Nombre images

    $count_img = count($images);

    // Links
    $links = get_field('links');
?>

<div class="container-gite">
    <h1><?php the_field('title');?><span><?php the_field('name'); ?></span></h1>
    <div class="container-img-gallery"> 
        <?php for($i = 0; $i <= 3; $i++): ?>
        <div class='minia'><img src="<?php echo($images[$i]['url']); ?>" alt=""></div>
        <?php endfor; ?>
        <?php if(count($images) > 3){
            echo('<button class="more-picture">Afficher les photos</button>');
        }
        ?>
    
    </div>
    <div class="container-carousel-background">
        <div class="container-carousel">
            <div class="carousel">
                <?php for($i = 0; $i <= $count_img -1; $i++): ?>
                    <div class="carousel-cell"><img src="<?php echo($images[$i]['url']); ?>" alt=""></div>
                <?php endfor; ?>
            </div> 
            <div class="close"><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/close.svg" alt=""></div>
        </div>
    </div>


    <div class="container-carousel-responsive">
        <div class="carousel-responsive">
            <?php for($i = 0; $i <= $count_img -1; $i++): ?>
                <div class="carousel-cell"><img src="<?php echo($images[$i]['url']); ?>" alt=""></div>
            <?php endfor; ?>
        </div> 
    </div>
    <div class="menu-responsive">
        <p class="items active" data-tab="1">Description</p>
        <p class="items" data-tab="2">Description technique</p>
        <p class="items" data-tab="3">Localisation</p>
    </div>
    <div class="container-info">
        <div class="text-info tab" data-tab="1">
            <h2><?php the_field('title_info'); ?></h2>
            <div class="list"><?php the_field('info_logistic') ?></div>
        </div>
        <div class="picto-reserver">
            <div class="picto tab" data-tab="2">
            <ul>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/bedroom.svg" alt=""><?php echo($options['rooms']); ?> Chambres</li>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/kitchen.svg" alt=""><?php echo($options['kitchen']); ?> Cuisines</li>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/<?php if($options['wifi']){echo('wifi');}else{echo('nowifi');}?>.svg" alt=""><?php if($options['wifi']){echo('Wifi');}else{echo('Pas de wifi');} ?></li>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/bathroom.svg" alt=""><?php echo($options['rooms']); ?> Salles de bain</li>
            </ul>
            <ul>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/wc.svg" alt=""><?php echo($options['wc']); ?> Wc</li>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/tv.svg" alt=""><?php echo($options['tv']); ?> Tv</li>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/<?php if($options['animals']){echo('animals');}else{echo('noanimals');}?>.svg" alt=""><?php if($options['animals']){echo('Animaux autorisés');}else{echo("Pas d'animaux");} ?></li>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/assets/img/<?php if($options['parties']){echo('fete');}else{echo('nofete');}?>.svg" alt=""><?php if($options['parties']){echo('fête autorisée');}else{echo('Pas de fête');} ?></li>
            </ul>
            </div>
            <div class="reserver">
            <h3>Réserver</h3>
                <div class="button">
                <?php 
                    foreach($links as $link): 
                    $link = $link['link'];
                ?>
                    <a href="<?php echo($link['url']) ?>"><?php echo($link['title']) ?></a>
                <?php endforeach ; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-localisation tab" data-tab="3">
        <div class="text">
            <h2><?php the_field('title_location'); ?></h2> 
            <p><?php the_field('text_location'); ?></p> 
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13117.643266095442!2d5.905073077127318!3d45.58614938534484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8650e22bd9b%3A0x831f0b1205ac0296!2sRue%20de%20Saint-Ombre%2C%2073000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1673969873827!5m2!1sfr!2sfr" width="666" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <script src="<?php echo(get_template_directory_uri()); ?>/assets/js/gite.js"></script>

</div>


<?php
    get_footer();
?>