<?php
/**
 * Template Name: Blog Post
 * 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
get_header();
?>
<?php echo do_shortcode('[rev_slider alias="blog"][/rev_slider]'); ?>
<div class="container margin_top_105 margin_bottom_70">
    <div class="row">
        <div class="col-md-8 blog_container_inner">
            <div class="row list-blog-inner clearfix">
                <?php
                if (have_posts()) :
                    // Start the Loop.
                    while (have_posts()) :
                        the_post();
                        ?>
                        <div class="blog-box col-md-6 col-lg-6">
                            <div class="blog-inner">
                                <div class="blog-thumbnail">
                                    <?= the_post_thumbnail() ?>
                                </div>
                                <div class="blog-info clearfix">
                                    <div class="date-info"><?= get_the_date('j F y') ?></div>
                                    <div class="blog-name"><?php echo get_the_title(); ?></div>
                                    <div class="author-info"><i class="fa fa-user"></i> <?= get_the_author() ?> &nbsp;&nbsp; | &nbsp;&nbsp; <i class="fa fa-comments"></i> <?= get_comments_number() ?> &nbsp;&nbsp; | &nbsp;&nbsp; <i class="fa fa-thumbs-up"></i> 0 &nbsp;&nbsp; | &nbsp;&nbsp; <i class="fa fa-share-alt"></i></div>
                                    <div class="blog-subtitle">
                                        <?= wp_trim_words(get_the_content(), 15) ?>
                                    </div>
                                    <a class="blog_read_more" href="<?= the_permalink() ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    the_posts_pagination(
                            array(
                                'prev_text' => twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'twentyseventeen') . '</span>',
                                'next_text' => '<span class="screen-reader-text">' . __('Next page', 'twentyseventeen') . '</span>' . twentyseventeen_get_svg(array('icon' => 'arrow-right')),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyseventeen') . ' </span>',
                            )
                    );
                else :
                    get_template_part('template-parts/post/content', 'none');
                endif;
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>
</div>
<?php
get_footer();
