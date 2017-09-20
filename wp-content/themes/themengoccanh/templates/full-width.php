<?php
/*
 Template Name: Full Width
 */
?>
<?php get_header(); ?>
 
<div id="content">
 
        <section id="main-content" class="full-width">
            <div class="contact-info">
                <h4>Địa chỉ liên lạc</h4>
                <p>Ghi địa chỉ vào đây</p>
                <p>090 456 765</p>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="1548" title="Contact form 1"]'); ?>
            </div>
        </section>
 
</div>
 
<?php get_footer(); ?>