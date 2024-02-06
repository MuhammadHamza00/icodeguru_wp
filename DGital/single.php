<?php
get_header();

while (have_posts()) :
    the_post();
    get_template_part('template-parts/content', 'single');

?>
    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown"><?php the_title() ?></h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <?php custom_breadcrumbs() ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container upper-post">
        <div class="container-xxl single-post py-5">
            <h1 class="text animated slideInDown" style="text-align:center;  color:#6222CC;"><?php the_title() ?></h1>
            <?php
            the_content();
            ?>
            <div class="mb-3">
                <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> -->
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
                <!-- </textarea> -->
            </div>
            <!-- <img src="..." class="img-fluid" alt="..."> -->
        </div>
    </div>
<?php
endwhile; // End of the loop.
?>

<?php
get_footer();
?>