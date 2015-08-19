<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="product-area">
    <main id="main" class="site-main" role="main">
        <nav id="product-navigation">
<!--            <h1>Linhas</h1>-->
<!--            <ul>-->
<!--                --><?php //wp_list_categories([
//                    'taxonomy'     => 'line',
//                    'hierarchical' => true,
//                    'title_li'     => '',
//                    'hide_empty'   => false
//                ]) ?>
<!--            </ul>-->
<!---->
<!--            <h1>Móveis</h1>-->
            <ul id="product-lines">
                <?php wp_list_categories([
                    'taxonomy'     => 'furniture',
                    'hierarchical' => true,
                    'title_li'     => '',
                    'hide_empty'   => false
                ]) ?>
            </ul>
        </nav>


        <div id="product-display">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <?php the_post_thumbnail([400, 400]) ?>
                    <h1><?php the_title() ?></h1>
                </article>
            <?php endwhile; ?>
        </div>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
