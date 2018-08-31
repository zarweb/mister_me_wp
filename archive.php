<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clean Business
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8 <?php echo clean_business_get_theme_layout(); ?>">
		<main id="main" class="site-main post-wrap" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h3 class="archive-title">', '</h3>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>

			<div class="posts-layout">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
			</div>

			<?php clean_business_the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
