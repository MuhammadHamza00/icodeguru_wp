<?php
/* 
Template Name: Team Page
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