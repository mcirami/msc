

	<div class="description full_width">
		<div class="container">
			<h3 data-aos="fade-down"><?php the_field('project_top_heading'); ?></h3>
			<p data-aos="fade-right"><?php the_field('project_top_description'); ?></p>
		</div>
	</div>

	<section class="full_width project_images">

		<div class="container">
			<div class="page_divider"></div>
			<?php if( have_rows('screenshots') ): ?>

				<?php
					while ( have_rows('screenshots') ) : the_row();
						$image = get_sub_field('image');
				?>
					<article class="full_width">
						<header class="full_width">
							<h3><?php the_sub_field('page_title'); ?></h3>
							<p><?php the_sub_field('page_description'); ?></p>
						</header>
						<img src="<?php echo $image['url'];  ?>" alt="">
					</article>
				<?php endwhile; ?>

			<?php endif; ?>
		</div>

	</section>


<section class="bottom_desc full_width">
	<div class="container">
		<h4><?php the_field('project_title'); ?></h4>
		<p><?php the_field('project_bottom_text'); ?></p>
		<?php
			$link = get_field('link');
			if ($link) :
				$link_url = $link['url'];
				$link_title = $link['title'];
		?>
			<a target="_blank" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html( $link_title ); ?></a>

			<?php endif; ?>

	</div>

</section>
<section class="contact_section full_width">
	<div class="container">
		<header>
			<h2>Let's Work Together</h2>
			<p>I am available for consulting, collaboration and contract work. Whether it's a small project or big project I'm confident I can get it done.</p>
		</header>
		<div class="form_wrap full_width">
			<?php echo do_shortcode('[wpforms id="312" title="false" description="false"]'); ?>
		</div>
	</div>

</section>

