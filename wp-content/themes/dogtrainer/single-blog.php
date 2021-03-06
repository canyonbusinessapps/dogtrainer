<?php
/**
 * The template for displaying all single blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Blog Post 
 * Template Post Type: post
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header();
?>
<?php echo do_shortcode('[rev_slider alias="blog"][/rev_slider]'); ?>
<div class="container margin_top_105 margin_bottom_105">
    <div class="row">
        <div class="col-md-12">
            <?php
            // Start the Loop.
            while (have_posts()) :
                the_post();
                ?>
                <h2 class="blog_single_title"><?php echo get_the_title(); ?></h2>
                <div class="blog_single_info">By <?= get_the_author() ?> at <?= get_the_date('j F y') ?></div>
                <div style="float: left; padding: 0px 20px 20px 0px"><?php the_post_thumbnail('twentyseventeen-featured-image'); ?></div>
                <p>
                    <?php
                    the_content(
                            sprintf(
                                    /* translators: %s: Post title. */
                                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'),
                                    get_the_title()
                            )
                    );
                    ?>
                </p>
                <?php
//                get_template_part('template-parts/post/content', get_post_format());
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                the_post_navigation(
                        array(
                            'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'twentyseventeen') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '</span>%title</span>',
                            'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'twentyseventeen') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-right')) . '</span></span>',
                        )
                );
            endwhile; // End the loop.
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
