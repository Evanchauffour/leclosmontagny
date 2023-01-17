<?php
    // Header
    get_header();

    //Template name: Gite 
?>

<div class="container-gite">
    <h1><?php the_field('title')?><span><?php the_field('name') ?></span></h1>
</div>

<?php
    get_footer();
?>