<?php
    // Header
    get_header();

    // Houses
    $houses = get_field('houses');

    // About us
    $about_us = get_field('about_us');
?>

<div class="home">
    <div class="discover">
        <h1>Un lieu, du lien...</h1>
        <button><a href="okpiojip">RESERVER</a></button>
    </div>
</div>
<div class="container-infos-gites">
<?php 
    foreach($houses as $house):
    $image = $house['image'];
?>

        <div class="info-gite">
            <img src="<?php echo($house['image']['url']); ?>" height="" width="" alt="<?php echo esc_attr($image['alt']);?>">
            <div class="text-info-gite">
                <h3><?php echo($house['title']) ?><span><?php echo($house['name']) ?></span></h3>
                <p><?php echo($house['text']) ?></p>
                <a href=""><?php echo($house['button'])?></a>
            </div>
        </div>
<?php endforeach; ?>
</div>
<div class="container-about_us">
    <h1 class="title-home">En <span>famille</span>, entre <span>amis</span> ou pour un événement <span>professionnel</span>, nous créons le fil de votre lien...</h1>
    <div class="container-video-about_us">
        <div class="text-info-video-about_us">
            <h3>DÉCOUVREZ <br>UN<span>Charme</span></h3>
            <p><?php the_field('description') ?></p>
        </div>
        <img src="http://127.0.0.1/leclosmontagny/wp-content/themes/leclosmontagny/assets/img/video-aboutus.png" alt="">
    </div>
    <div class="container-citation">
<?php 
    foreach($about_us as $about_me):
    $image_about_me = $house['image']['url'];
?>
        <div class="citation">
            <img src="<?php echo($about_me['image']['url']); ?>" alt="">
            <div class="text-citation">
                <h3><?php echo($about_me['name']);?></h3>
                <p><?php echo($about_me['description']);?></p>
            </div>
        </div>

<?php endforeach; ?>
        <!-- <div class="citation second-citation">
                <img src="http://127.0.0.1/leclosmontagny/wp-content/themes/leclosmontagny/assets/img/video-aboutus.png" alt="">
            <div class="text-citation">
                <h3>Benôit</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto rem adipisci animi doloribus possimus omnis vel quibusdam earum reiciendis suscipit?</p>
            </div>
        </div> -->
    </div>
    <div class="back-to-top"></div>
</div>
<?php
    // Footer
    get_footer();
?> 