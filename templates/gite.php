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
    </div>
    <div class="container-info">
        <h2><?php the_field('title_info'); ?></h2>
        <div><?php the_field('info_logistic') ?></div>
    </div>
    <div class="container-localisation">
        <div>
            <h2><?php the_field('title_location'); ?></h2> 
            <p><?php the_field('text_location'); ?></p> 
        </div>
    </div>
</div>

<?php
    get_footer();
?>