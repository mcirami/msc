<?php
/**
 * Template Name: Contact
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */
 
get_header(); ?>

	<section class="contact">
		<div class="top_section inner_page_wrap">
			<div class="container">
				<h2><span class="underline">Contact</span> Me</h2>
				<div class="form_wrap full_width">
					<?php echo do_shortcode('[si-contact-form form="1"]'); ?>
				</div>
				<?php get_template_part( 'content', 'social-media' ); ?>
			</div><!-- .container -->
		</div>
	</section>

<?php get_footer(); ?>