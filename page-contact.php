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
			<div class="container animatedParent animateOnce">
				<h2 class="animated bounceInDown"><span class="underline">Contact</span> Me</h2>
				<div class="form_wrap_contact full_width animated bounceInLeft">
					<?php echo do_shortcode('[wpforms id="445" title="false" description="false"]'); ?>
				</div>
				<?php get_template_part( 'content', 'social-media' ); ?>
			</div><!-- .container -->
		</div>
	</section>

<?php get_footer(); ?>