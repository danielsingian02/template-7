<?php
/**
 * Template Name: Template 7 About 
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
            <div class="about container">
                <h1 class="about__head"><?php getAcfValue("about_heading_title");?></h1>
                <hr class="ln-sm">
                <p class="about__desc"><?php getAcfValue("about_head_description");?></p>
                <?php $aboutimg = get_field('banner_image');?>
                <img src="<?php echo $aboutimg; ?>" class="hero__about-img">
            </div>

            <div class="team container">
                <h2 class="team__head"><?php getAcfValue("team_heading_title");?></h2>
                <p class="team__desc"><?php getAcfValue("team_description");?></p>
                <div class="card-container flex">
                    <div class="card-wrap">
                        <?php $fcardimg = get_field('team_image_1');?>
                        <img src="<?php echo $fcardimg; ?>" class="card__img">
                    </div>
                    <div class="card-wrap">
                        <?php $scardimg = get_field('team_image_2');?>
                        <img src="<?php echo $scardimg ?>" class="card__img">
                    </div>
                    <div class="card-wrap">
                        <?php $tcardimg = get_field('team_image_3');?>
                        <img src="<?php echo $tcardimg; ?>" class="card__img">
                    </div>
                </div>
            </div>

            <div class="quotes flex container">
                <div class="row-wrap pd-sm">
                    <img src="/assets/images/quoteopen.png" alt="">
                    <img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/quoteopen.png" class="quotes__icon-lt"/>
                    <h3 class="quotes__desc"><?php getAcfValue("testimonial");?></h3>
                    <img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/quoteclose.png" class="quotes__icon-rt"/>
                    <p class="quotes__name"><?php getAcfValue("testimonial_name");?></p>
                </div>
                <div class="row-wrap center-items">
                    <?php $ttsimg = get_field('testimonial_image');?>
                    <img src="<?php echo $ttsimg; ?>" class="testimonial__img">
                </div>
            </div>


            <div class="closing flex">
                <div class="row-wrap"></div>
                <div class="row-wrap col-center-items">
                    <div class="closing__contents">
                        <h3 class="closing__desc"><?php getAcfValue("closing_remarks");?></h3>
                    </div>
                </div>
            </div>
            <p class="footer__credits mb">© Copyright 2021 HOA Management Name Here</p>
        </div>
        <section id="footer">
            <div class="footer__container">
                <p class="footer__credits ">© Copyright 2021 HOA Management Name Here</p>
            </div>
        </section>
        
    </section>
</main><!-- #main -->


