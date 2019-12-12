<?php
/**
 * The Template for displaying all single posts
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php $temp_post = $post; ?>
    <div class="container">
        <div class="row">
            <div class="single-services-wrap clearfix">
                <div class="single-services-inner clearfix">
                    <div id="primary">
                        <div id="content" role="main">
                            <?php get_template_part( 'single-templates/single-services/content', get_post_format() ); ?>
                        </div><!-- #content -->
                    </div><!-- #primary -->
                </div>
            </div>
        </div>
    </div>
    <div class="cms-cta-wrapper cms-style-default style1 clearfix cta-right" id="cms-cta">
        <div class="container">
            <div class="row">
                <div class="cms-cta-inner">
                    <?php wp_experts_cta_service_post(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>