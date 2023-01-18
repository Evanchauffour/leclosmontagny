<?php
    // Header
    get_header();

    //Template name: Contact 
?>

<div class="container-contact">
    <h1>Nous Contacter</h1>
    <div class="container-form_info-contact_map">
        <div class="form_info-contact">
            <div class="container-form"><?php echo do_shortcode('[wpforms id="99" title="false"]'); ?></div>
            <div class="container-info-contact">
                <div>
                    <img src="<?php echo(get_template_directory_uri()); ?>/assets/img/phone.svg" alt="">
                    <p><?php the_field('phone') ?></p>
                </div>
                <div>
                    <img src="<?php echo(get_template_directory_uri()); ?>/assets/img/mail.svg" alt="">
                    <p><?php the_field('mail') ?></p>
                </div>
                <div>
                    <img src="<?php echo(get_template_directory_uri()); ?>/assets/img/location.svg" alt="">
                    <p><?php the_field('address') ?></p>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13117.643266095442!2d5.905073077127318!3d45.58614938534484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8650e22bd9b%3A0x831f0b1205ac0296!2sRue%20de%20Saint-Ombre%2C%2073000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1673969873827!5m2!1sfr!2sfr" width="666" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>