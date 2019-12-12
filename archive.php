<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */

get_header(); 
?>
<div id="page-blog-archive" class="<?php wp_experts_blog_sidebar(); ?>">
    <div class="container">
        <div class="row">
            <?php wp_experts_blog_sidebar_left(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>