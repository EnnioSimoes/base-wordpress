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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                    <div class="container">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php
                                        // Post thumbnail.
                                        //twentyfifteen_post_thumbnail();
                                ?>

                                <header class="entry-header">
                                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                        <?php the_content(); ?>
                                        <?php
                                                wp_link_pages( array(
                                                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                                                        'after'       => '</div>',
                                                        'link_before' => '<span>',
                                                        'link_after'  => '</span>',
                                                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                                                        'separator'   => '<span class="screen-reader-text">, </span>',
                                                ) );
                                        ?>
                                </div><!-- .entry-content -->

                                <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

                        </article><!-- #post-## -->
                    </div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
