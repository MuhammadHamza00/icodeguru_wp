<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Archives</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <?php custom_breadcrumbs() ?>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="container" class="upper-whole">
    <div class="side-bar">
        <?php get_sidebar(); ?>
    </div>
    <div id="content" class="archive-upper" role="main">
        <?php
        if (have_posts()) :
        ?>
            <h5 class="entry-title-below">Archive Results:</h4>
        <?php
            
            while (have_posts()) : the_post();
        ?>
        <ul>
            <li>
                <h6 class="entry-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                <p class="entry-title" style=""><small class=""><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>

            </li>
        </ul>
        <?php
            endwhile;
        endif;
        ?>

        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>

        <h2>Archives by Subject:</h2>
        <ul>
            <?php wp_list_categories(); ?>
        </ul>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>
