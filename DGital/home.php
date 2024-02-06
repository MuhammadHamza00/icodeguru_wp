<?php
get_header(); ?>
<?php
// $content = get_the_content();
// echo apply_filters( 'the_content', $content );
?>

<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Blog</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <?php custom_breadcrumbs() ?>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-xxl blog-row py-5">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <div class="card mb-3 blog-card" style="width: 60%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div style="width: 100%; height: 100%; ">
                            <?php
                            if (has_post_thumbnail()) {
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                if ($thumbnail_url) {
                                    echo '<img src="' . esc_url($thumbnail_url) . '" class="img-fluid rounded-start" alt="' . esc_attr(get_the_title()) . '" style="width: 100%; height: auto;">';
                                } else {
                                    echo 'No thumbnail available';
                                }
                            } else {
                                echo 'No featured image set';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                            <h6 class="card-title">Authur:<a href="<?php get_the_author_link(); ?>"> <?php the_author(); ?></a></h6>

                        </div>
                        <p class="card-text" style="position: absolute; bottom: 0; right: 0;padding:10px;"><small class="text-muted">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</div>


<?php
get_footer();
?>