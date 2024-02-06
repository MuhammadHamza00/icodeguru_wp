<?php
/* 
Template Name: Services Page
*/
get_header(); ?>
<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Service</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <?php custom_breadcrumbs() ?>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>


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



<?php
get_footer();
?>