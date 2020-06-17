<?php
/**
 * The template for displaying all single our team posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Our Team
 * Template Post Type: post
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header();
?>
<style>
    #top-menu > li > a {
        color: #000 !important;
    }
    .team_inner li a:link, a:visited {
        color: #000 !important;
    }
    .team_inner li a:hover {
        color: #555 !important;
    }
</style>
<div class="container margin_top_210 margin_bottom_50">
    <div class="row" style="padding-bottom: 40px;">
        <div class="col-md-12">
            <a href="<?= esc_url(get_page_link(13)) ?>" class="back_our_team">< Back</a>
        </div>
    </div>
    <div class="row team_inner">        
        <?php
        // Start the Loop.
        while (have_posts()) :
            the_post();
            ?>
            <div class="col-md-4">
                <?php echo types_render_field("picture", array("alt" => get_the_title(), "proportional" => "false", "class" => "content-image margin_bottom_20")); ?>
            </div>
            <div class="col-md-8">
                <h2 class="team_title"><?php echo get_the_title(); ?></h2>
                <h2 class="team_designation"><?php echo types_render_field("designation"); ?></h2>
                <div class="social_icon" style="display: none;">
                    <ul>
                        <li>
                            <a href="<?= types_render_field("facebook") ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= types_render_field("twitter") ?>" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= types_render_field("instagram") ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= types_render_field("email") ?>" target="_blank">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    </ul> 
                </div>
                <p><?php the_content('Read More'); ?></p>
            </div>
            <?php
        endwhile; // End the loop.
        ?>
    </div>
</div>
<div class="team_inner_container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home_header text-center margin_top_100 margin_bottom_50">
                    <div class="header_content text-center">YOU MAY ALSO LIKE</div>
                </div>
                <?php echo do_shortcode('[meet_our_team ppp=4]'); ?>
            </div>
        </div>
    </div>    
</div>
<div class="bottom_contact_container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode('[bottom_contact]'); ?>
            </div>
        </div>
    </div>    
</div>
<script>
    jQuery(document).ready(function () {
        jQuery('.custom-logo').attr('src', '<?= get_site_url() ?>/wp-content/uploads/2020/05/logo_black.png');
    });
</script>
<?php
get_footer();
