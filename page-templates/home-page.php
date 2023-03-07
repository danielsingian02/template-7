<?php
/**
 * Template Name: Template 7 Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */
?>
<!-- hero banner -->
<main id="primary" class="site-main">
    <section class="site-container flex">
        <div class="side-navbar row-wrap-xsm">
            <?php get_header(); ?>
        </div>
        <div class="body-container row-wrap-l">
            <div class="about">
                <div class="about__container">
                    <h1 class="about__head"><?php getAcfValue("banner_hero_title");?></h1>
                    <hr class="ln-sm">
                    <?php $aboutimg = get_field('banner_image');?>
                    <img src="<?php echo $aboutimg; ?>" class="hero__about-img">
                    <p class="about__desc"><?php getAcfValue("about_head_description");?></p>
                </div>

                <div class="about__container">
                    <h3 class="about__subhead"><?php getAcfValue("about_description");?></h3>
                    <hr class="ln-sm">
                    <p class="about__subdesc"><?php getAcfValue("about_introduction");?></p>
                </div>
            </div>

            <div class="events">
                <h2 class="team__head"><?php getAcfValue("happening_heading");?></h2>
                <hr class="ln-sm">
                <div class="card-container flex">
                    <div class="card-wrap">
                        <?php $fcardimg = get_field('card_image_1');?>
                        <img src="<?php echo $fcardimg; ?>" class="card__img">
                        <h4 class="card__title"><?php getAcfValue("card_1_title");?></h4>
                        <p class="card__desc"><?php getAcfValue("card_1_description");?></p>
                    </div>
                    <div class="card-wrap">
                        <?php $scardimg = get_field('card_image_2');?>
                        <img src="<?php echo $scardimg ?>" class="card__img">
                        <h4 class="card__title"><?php getAcfValue("card_2_title");?></h4>
                        <p class="card__desc"><?php getAcfValue("card_2_description");?></p>
                    </div>
                    <div class="card-wrap">
                        <?php $tcardimg = get_field('card_image_3');?>
                        <img src="<?php echo $tcardimg; ?>" class="card__img">
                        <h4 class="card__title"><?php getAcfValue("card_3_title");?></h4>
                        <p class="card__desc"><?php getAcfValue("card_3_description");?></p>
                    </div>
                </div>
            </div>  

            <div class="closing-rem">
                <h2 class="closing__head"><?php getAcfValue("closing_heading_title");?></h2>
                <p class="closing__description"><?php getAcfValue("closing_heading_description");?></p>
            </div>
            <p class="footer__credits mb">© Copyright 2021 HOA Management Name Here</p>
        </div>
    <section id="footer">
            <div class="footer__container">
                <p class="footer__credits ">© Copyright 2021 HOA Management Name Here</p>
            </div>
    </section>
</section><!-- end of main -->

<?php
