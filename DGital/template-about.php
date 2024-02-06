<?php
/* 
Template Name: About Page
*/
get_header(); ?>
<div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">About Us</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                    <?php custom_breadcrumbs() ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
</div>

<!-- Feature Start -->
<div class="container-xxl bg-white py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h5 class="mb-3"><?php echo get_theme_mod('card_one_title') ?></h5>
                    <p class="m-0"><?php echo get_theme_mod('card_one_content') ?></p>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-search text-primary mb-4"></i>
                    <h5 class="mb-3"><?php echo get_theme_mod('card_two_title') ?></h5>
                    <p class="m-0"><?php echo get_theme_mod('card_two_content') ?></p>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                    <h5 class="mb-3"><?php echo get_theme_mod('card_three_title') ?></h5>
                    <p class="m-0"><?php echo get_theme_mod('card_three_content') ?></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Feature End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary"><?php echo get_theme_mod('about_title') ?><span></span></p>
                <h1 class="mb-5"><?php echo get_theme_mod('about_heading') ?></h1>
                <p class="mb-4"><?php echo get_theme_mod('about_paragraph') ?></p>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2"><?php echo get_theme_mod('skill_1_content') ?></p>
                        <p class="mb-2"><?php echo get_theme_mod('skill_1_percent') ?></p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2"><?php echo get_theme_mod('skill_2_content') ?></p>
                        <p class="mb-2"><?php echo get_theme_mod('skill_2_percent') ?></p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2"><?php echo get_theme_mod('skill_3_content') ?></p>
                        <p class="mb-2"><?php echo get_theme_mod('skill_3_percent') ?></p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="<?php echo get_theme_mod('about_btn_1_link') ?>" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3"><?php echo get_theme_mod('about_btn_1_text') ?></a>
            </div>
            <div class="col-lg-6">
                <?php $about_image = get_theme_mod('about_image'); ?>
                <?php if ($about_image) : ?>
                    <img class="img-fluid animated zoomIn" data-wow-delay="0.5s" src="<?php echo esc_url($about_image); ?>" alt="">
                <?php else : ?>
                    <img class="img-fluid animated zoomIn" data-wow-delay="0.5s" src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

     <!-- Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up"><?php echo get_field('year_experience'); ?></h1>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up"><?php echo get_field('team_members'); ?></h1>
                <p class="text-white mb-0">Team Members</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up"><?php echo get_field('satisfied_clients'); ?></h1>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up"><?php echo get_field('complete_projects'); ?></h1>
                <p class="text-white mb-0">Compleate Projects</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

      <!-- Team Start -->
<div class="container-xxl bg-white py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span><?php echo get_field('team_title'); ?><span></span></p>
            <h1 class="text-center mb-5"><?php echo get_field('team_headline'); ?></h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <?php $member_1_image = get_field('member_1_image'); ?>
                        <?php if ($member_1_image) : ?>
                            <img class="img-fluid rounded-circle mb-4" src="<?php echo $member_1_image; ?>" alt="">
                        <?php else : ?>
                            <img class="img-fluid rounded-circle mb-4" src="<?php echo get_template_directory_uri(); ?>/img/team-1.jpg" alt="">
                        <?php endif; ?>

                        <h5><?php echo get_field('member_1_name'); ?></h5>
                        <span><?php echo get_field('member_1_job'); ?></span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_fb'); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_X'); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_instagram'); ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <?php $member_2_image = get_field('member_2_image'); ?>
                        <?php if ($member_2_image) : ?>
                            <img class="img-fluid rounded-circle mb-4" src="<?php echo $member_2_image; ?>" alt="">
                        <?php else : ?>
                            <img class="img-fluid rounded-circle mb-4" src="<?php echo get_template_directory_uri(); ?>/img/team-2.jpg" alt="">
                        <?php endif; ?>
                        <h5><?php echo get_field('member_2_name'); ?></h5>
                        <span><?php echo get_field('member_2_job'); ?></span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_fb'); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_X'); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_instagram'); ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <?php $member_3_image = get_field('member_3_image'); ?>
                        <?php if ($member_3_image) : ?>
                            <img class="img-fluid rounded-circle mb-4" src="<?php echo $member_3_image; ?>" alt="">
                        <?php else : ?>
                            <img class="img-fluid rounded-circle mb-4" src="<?php echo get_template_directory_uri(); ?>/img/team-3.jpg" alt="">
                        <?php endif; ?>
                        <h5><?php echo get_field('member_3_name'); ?></h5>
                        <span><?php echo get_field('member_3_job'); ?></span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_fb'); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_X'); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_instagram'); ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href="<?php echo get_field('member_1_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<?php
get_footer();
?>