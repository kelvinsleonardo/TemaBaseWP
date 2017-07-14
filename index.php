
<?php
/**
 * @category Base
 * @package  TemaBaseWP
 * @author   Tema Base Wordpress<kelvinsleonardo@gmail.com>
 * @license  GPL-2 http://www.gnu.org/licenses/gpl-2.0.html
 */


get_header();
?>

<div id="primary">
    <div id="content" role="main">

        <?php if (have_posts()) : ?>

            <?php /* Inicia o loop de posts */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('loop'); ?>

            <?php endwhile; ?>

        <?php else : ?>

            <?php get_template_part('not-found'); ?>

        <?php endif; ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>