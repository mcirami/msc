<?php
/**
 * Template Name: Projects
 *
 * The template for displaying the projects page.
 *
 *
 * @package boiler
 */

get_header(); ?>

	<?php
		$args = array ('post_type' => 'projects');
	
		$projects = new WP_Query($args);
	?>

	<section class="projects">
		<!--
		<div class="top_section projects">
			<div class="header_wrap">
				<div class="container">
	          		<h2 class="top_fade_title_single slide_up_title">Portfolio</h2>
				</div>
			</div>
		</div>
		-->
		<div class="projects_section inner_page_wrap">
			<div class="container">
				<h2><span class="underline">My</span> Portfolio</h2>
				
				<?php 
					$count = 0; 
					$gallery = 0;
				?>
				<div class="projects_wrap">
					<?php while( $projects->have_posts() ) : $projects->the_post(); ?>
						<?php $gallery++; ?>
						<?php //if ($count == 0) : ?>
							<!--<div class="row">-->
						<?php //endif; ?>
	
							<?php $image = get_field('project_thumb');
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size ];
							?>
							
								<div class="column_project">
									<div class="content">
										<a class="fancybox" rel="<?php echo 'gallery'.$gallery; ?>" href="<?php echo $image['url']; ?>" title="<?php the_field('project_title'); ?>">
											<img src="<?php echo $thumb; ?>" />
										</a>
							    		<div class="text_wrap">
											<h2><?php the_field('project_title'); ?></h2>
										</div>
									</div>
									 <!--
									<?php if (get_field('link')) : ?>
											<a class="text_link" target="_blank" href="<?php the_field('link'); ?>"><?php the_field('link_text'); ?></a>
									<?php else : ?>	
											<a class="text_link" href="#"><?php the_field('link_text'); ?></a>
									<?php endif; ?>-->
									<div class="popup">
									
										<?php if( have_rows('screenshots') ): ?>
										
											<?php while ( have_rows('screenshots') ) : the_row(); ?>
												
											<?php $image = get_sub_field('image'); ?>
										
										    	<a class="fancybox" rel="<?php echo 'gallery'.$gallery; ?>" href="<?php echo $image['url'];  ?>" title="<?php the_sub_field('slide_title'); ?>">
										</a>
										
										    <?php endwhile; ?>
										
										<?php endif; ?>
										
									</div><!-- popup -->
								</div><!-- column -->
							<?php //if ($count == 2) : ?>
							<!--	</div><!-- row -->	
							<?php //endif; ?>
							<?php //$count = ($count+1) % 3; ?>
					<?php endwhile; ?>
					
					<?php wp_reset_query(); ?>
				</div> <!-- projects wrap -->
				
				<?php get_template_part( 'content', 'social-media' ); ?>
				
				
			</div><!-- container -->
		</div><!-- projects section -->
	</section>


<?php get_footer(); ?>