<?php
/*
Template Name: Testimonial Page
*/
get_header(); ?>

<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Testimonials</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <?php custom_breadcrumbs() ?>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>


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