<?php
/* 
Template Name: Projects Page
*/
get_header(); ?>

<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Project</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <?php custom_breadcrumbs() ?>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>

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
<?php
get_footer();
?>