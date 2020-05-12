<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
?>

</div> <!-- end container -->
</div><!-- #content -->
<footer class="footer_content_top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 social-menu">
                <?php
                if (is_active_sidebar('contact-us')) {
                    dynamic_sidebar('contact-us');
                }
                ?>                
            </div>
            <div class="col-md-4">
                <div class="">
                    <?php
                    if (is_active_sidebar('working-time')) {
                        dynamic_sidebar('working-time');
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <?php
                    if (is_active_sidebar('instagram')) {
                        dynamic_sidebar('instagram');
                    }
                    ?> 
                </div>       
            </div>        
        </div>
    </div>
</footer>
<footer class="footer_content_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright_text">
                <?php
                if (is_active_sidebar('footer-1')) {
                    dynamic_sidebar('footer-1');
                }
                ?> 
            </div>
            <div class="col-md-6 footer-menu">
                <?php
                if (is_active_sidebar('footer-2')) {
                    dynamic_sidebar('footer-2');
                }
                ?> 
            </div><!-- .site-info -->
        </div>
    </div>
</footer>
</div><!-- .mainbg-wrapperd -->
<?php wp_footer(); ?>
</body>
</html>
