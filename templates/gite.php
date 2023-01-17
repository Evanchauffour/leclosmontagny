<?php
    // Header
    get_header();

    //Template name: Gite 

    //Images

    $images = get_field('images');
?>

<div class="container-gite">
    <h1><?php the_field('title');?><span><?php the_field('name'); ?></span></h1>
    <div class="container-img-gallery"> 
        <?php for($i = 0; $i <=3; $i++): ?>
        <div><img src="<?php echo($images[$i]['url']); ?>" alt=""></div>
        <?php endfor; ?>
        <?php if(count($images) > 4){
            echo('<button>Afficher les photos</button>');
        }
        ?>
    </div>
    <div class="container-info">
        <div class="text-info">
            <h2><?php the_field('title_info'); ?></h2>
            <div class="list"><?php the_field('info_logistic') ?></div>
        </div>
        <div class="picto-reserver">
            <div class="picto">
            <?php echo(count($images));?>
            </div>
            <div class="reserver">
            <h3>Réserver</h3>
                <div class="button">
                    <a href="">Sur AirBnb</a>
                    <a href="">Sur Gîtes de France</a>
                    <a href="">Nous contacter </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-localisation">
        <div>
            <h2><?php the_field('title_location'); ?></h2> 
            <p><?php the_field('text_location'); ?></p> 
        </div>
        <!-- <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13117.643266095442!2d5.905073077127318!3d45.58614938534484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8650e22bd9b%3A0x831f0b1205ac0296!2sRue%20de%20Saint-Ombre%2C%2073000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1673969873827!5m2!1sfr!2sfr" width="666" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
    </div>
</div>

<?php
    get_footer();
?>