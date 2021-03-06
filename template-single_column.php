<?php /* Template Name: Single Column */ get_header(); ?>

	<main class="main-primary">
		<?php custom_breadcrumbs(); ?>

		<!-- section -->
		<section>

		<h1><span class="ca-gov-icon-arrow-down"></span> <?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		<p class="modify">Last modified: <?php the_modified_date(); ?></p>
	</main>

<?php get_footer(); ?>
