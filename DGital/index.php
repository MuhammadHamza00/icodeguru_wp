<?php
get_header();
?>
<?php
$content = get_the_content();
echo apply_filters('the_content', $content);
?>

<div class="container-xxl bg-primary hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="mb-4 animated slideInDown" id="hero-title"><?php echo get_theme_mod('hero_title', "A Digital Agency Of Inteligents & Creative People") ?></h1>
                <p class="pb-3 animated slideInDown" id="hero-para"><?php echo get_theme_mod('hero_para', "Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem") ?></p>
                <a href="<?php echo get_theme_mod('hero_btn_1_link') ?>" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft"><?php echo get_theme_mod('hero_btn_1_text') ?></a>
                <a href="<?php echo get_theme_mod('hero_btn_2_link') ?>" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"><?php echo get_theme_mod('hero_btn_2_text') ?></a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <?php $hero_image = get_theme_mod('hero_image'); ?>
                <?php if ($hero_image) : ?>
                    <img class="img-fluid animated zoomIn" src="<?php echo esc_url($hero_image); ?>" alt="">
                <?php else : ?>
                    <img class="img-fluid animated zoomIn" src="<?php echo get_template_directory_uri(); ?>/img/hero.png" alt="">
                <?php endif; ?>
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


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span><?php echo get_field('services_Title'); ?><span></span></p>
            <h1 class="text-center mb-5"><?php echo get_field('services_heading'); ?></h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-search fa-2x"></i>
                    </div>
                    <h5 class="mb-3"><?php echo get_field('card_1_title'); ?></h5>
                    <p class="m-0"><?php echo get_field('card_1_content'); ?></p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3"><?php echo get_field('card_2_title'); ?></h5>
                    <p class="m-0"><?php echo get_field('card_2_content'); ?></p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </div>
                    <h5 class="mb-3"><?php echo get_field('card_3_title'); ?></h5>
                    <p class="m-0"><?php echo get_field('card_3_content'); ?></p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-mail-bulk fa-2x"></i>
                    </div>
                    <h5 class="mb-3"><?php echo get_field('card_4_title'); ?></h5>
                    <p class="m-0"><?php echo get_field('card_4_content'); ?></p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-thumbs-up fa-2x"></i>
                    </div>
                    <h5 class="mb-3"><?php echo get_field('card_5_title'); ?></h5>
                    <p class="m-0"><?php echo get_field('card_5_content'); ?></p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-android fa-2x"></i>
                    </div>
                    <h5 class="mb-3"><?php echo get_field('card_6_title'); ?></h5>
                    <p class="m-0"><?php echo get_field('card_6_content'); ?></p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <p class="section-title text-white justify-content-center"><span></span><?php echo get_field('news_title'); ?><span></span></p>
                <h1 class="text-center text-white mb-4"><?php echo get_field('news_headline'); ?></h1>
                <p class="text-white mb-4"><?php echo get_field('news_content'); ?></p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="<?php echo get_field('news_field_placeholder'); ?>" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span><?php echo get_field('project_title_'); ?><span></span></p>
            <h1 class="text-center mb-5"><?php echo get_field('project_headline'); ?></h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*"><?php echo get_field('row_filter_1'); ?></li>
                    <li class="mx-2" data-filter=".first"><?php echo get_field('row_filter_2'); ?></li>
                    <li class="mx-2" data-filter=".second"><?php echo get_field('row_filter_3'); ?></li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-1.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_template_directory_uri(); ?>/img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_field('project_1_link'); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2"><?php echo get_field('project_1_category'); ?></p>
                        <h5 class="lh-base mb-0"><?php echo get_field('project_1_title'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-2.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_field('project_2_link'); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2"><?php echo get_field('project_2_category'); ?></p>
                        <h5 class="lh-base mb-0"><?php echo get_field('project_2_title'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-3.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_field('project_3_link'); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2"><?php echo get_field('project_3_category'); ?></p>
                        <h5 class="lh-base mb-0"><?php echo get_field('project_3_title'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-4.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_field('project_4_link'); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2"><?php echo get_field('project_4_category'); ?></p>
                        <h5 class="lh-base mb-0"><?php echo get_field('project_4_title'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-5.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_field('project_5_link'); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2"><?php echo get_field('project_5_category'); ?></p>
                        <h5 class="lh-base mb-0"><?php echo get_field('project_5_title'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-6.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="<?php echo get_field('project_6_link'); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2"><?php echo get_field('project_6_category'); ?></p>
                        <h5 class="lh-base mb-0"><?php echo get_field('project_6_title'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <p class="section-title text-secondary justify-content-center"><span></span><?php echo get_field('testimonial_title'); ?><span></span></p>
        <h1 class="text-center mb-5"><?php echo get_field('testimonial_headline'); ?></h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i><?php echo get_field('client_1_comment'); ?></p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1"><?php echo get_field('client_1_name'); ?></h5>
                        <span><?php echo get_field('client_1_profession'); ?></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i><?php echo get_field('client_2_comment'); ?></p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1"><?php echo get_field('client_2_name'); ?></h5>
                        <span><?php echo get_field('client_2_profession'); ?></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i><?php echo get_field('client_2_comment'); ?></p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1"><?php echo get_field('client_2_name'); ?></h5>
                        <span><?php echo get_field('client_2_profession'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


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