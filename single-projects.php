<?php
/**
 * The Template for displaying all single Project Posts.
 *
 * @package boiler
 */

get_header();

$args = array(
		'post_type' => 'projects',
		'posts_per_page' => 1,
		'post_name_in'  => ['post-slug']
	);

$projects = new WP_Query( $args );


?>

	<main class="single_project inner_page_wrap full_width">

		<?php while( $projects->have_posts() ) : $projects->the_post(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="full_width">
					<h2><span class="underline"><?php the_field('project_title'); ?></span></h2>
				</header>

				<?php get_template_part( 'content', 'single-project' ); ?>

			<?php endwhile; // end of the loop. ?>

			<div class="full_width">
				<div class="container">
					<?php boiler_content_nav( 'nav-below' ); ?>
				</div>
			</div>

		<?php endwhile; ?>

		<?php wp_reset_query(); ?>

	</main>


<?php get_footer(); ?>

