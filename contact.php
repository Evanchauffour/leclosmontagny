<?php
    // Header
    get_header();

    //Template name: Contact 
?>

<div class="container-contact">
    <h1>Nous Contacter</h1>
    <div class="contact">
        <div class="info-contact">
            <p><?php the_field('phone') ?></p>
            <p><?php the_field('mail') ?></p>
            <p><?php the_field('address') ?></p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44678.61798312899!2d5.871332959652343!3d45.58222920009457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba85708695f63%3A0xd5c21acfa63d899c!2s73000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1673899798134!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php
    get_footer();
?>