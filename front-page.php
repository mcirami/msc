<?php
/**
 * Template Name: Home
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header();

$args = array( 'post_type' => 'projects', 'posts_per_page' => - 1 );

$projects = new WP_Query( $args );

?>
	<section class="home">		
		<div class="top_section">
			<div class="top_wrap">
				<div class="container">
		          	<h3 class="top_fade_title slide_up_title">Hello, I'm Matteo</h3>
				  	<h2 class="top_fade_title_single slide_up_sub">UI&UX Developer</h2>
				  	<p class="top_fade_sub slide_down_sub">Committed to building your site the way you want it. Modern & responsive to fit all your needs.</p>
				  	<div class="icon_wrap full_width">
					  	<a class="top_fade_button slide_down" href="/contact"><img src="<?php echo bloginfo('template_url'); ?>/images/icon-mouse.png" /></a>
				  	</div>
					
				</div>
			</div>
		</div><!--  top section -->
		<div class="full_width column_section">
			<div class="container">
				<h2 data-aos="fade-down">
                    <span class="underline">My</span> Portfolio</h2>
				<h3 data-aos="fade-down">All projects are fully responsive and function across all devices.</h3>
				<p data-aos="fade-down">Click on the project to see more.</p>
				<section id="projects" class="projects">
					<div class="projects_section">

						<?php
						//$count = 0;
						//$gallery = 0;
						?>
						<div class="projects_wrap">
							<?php while( $projects->have_posts() ) : $projects->the_post(); ?>
								<?php //$count++; ?>

								<?php $image = get_field('project_thumb');
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size ];
								?>

								<div class="column_project">
									<div class="content" data-aos="flip-left">
										<?php
											$link = get_permalink();
										?>

										<a class="project_thumb" href="<?php echo $link; ?>">
											<img src="<?php echo $thumb; ?>" />
											<div class="text_wrap">
												<h4><?php the_field('project_title'); ?></h4>
												<p>Click To See More</p>
											</div>
										</a>
									</div>

								</div><!-- column -->

							<?php endwhile; ?>

							<?php wp_reset_query(); ?>
						</div> <!-- projects wrap -->

					</div><!-- projects section -->
				</section>
			</div><!-- .container -->
		</div>
		<div class="services_section full_width">
			<div class="container">
				<h2 data-aos="fade-down"><span class="underline">Services</span> Offered</h2>
				<div class="columns full_width">
					<ul>
						<li data-aos="fade-right"><p>Website Design & Development</p></li>
						<li data-aos="fade-right"><p>Custom Wordpress Theme</p></li>
						<li data-aos="fade-right"><p>Hosting</p></li>
						<li data-aos="fade-right"><p>Setup Email Services</p></li>
						<li data-aos="fade-right"><p>Social Media Setup/Integration</p></li>
					</ul>
					<ul>
						<li data-aos="fade-left"><p>Website Maintenance</p></li>
						<li data-aos="fade-left"><p>Newsletter Integration</p></li>
						<li data-aos="fade-left"><p>Training/Consulting</p></li>
						<li data-aos="fade-left"><p>Logo Design</p></li>
						<li data-aos="fade-left"><p>Business Card Design</p></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="skills_section">
			<div class="container">
				<h2 data-aos="fade-down">
					<span class="underline">Skills</span> <span class="red">&</span> Speciality
				</h2>
				<div class="two_column_section full_width">
					<div class="column">
						<div class="title full_width" data-aos="fade-down">
							<img src="<?php echo bloginfo('template_url'); ?>/images/icon-computer.png" />
							<h3>Website and Visual Design</h3>
						</div>
						<div class="column_content">
							<p data-aos="fade-right" data-aos-offset="-200">Fully responsive websites designed to look great and function properly on all devices and any screen size.</p>
                            <p data-aos="fade-right" data-aos-offset="-200">The importance of having a clean, easy to use interface that is effective in meeting the users needs and at the same time displaying their vision in a stand out way.</p>
                            <h4 data-aos="fade-down" data-aos-offset="-200">Simple, distinctive and effective.</h4>
                            <p data-aos="fade-right" data-aos-offset="-200">The interface design should be just that, a design, not decoration. It should enhance the content, not distract from it. Their should be a good balance between a users needs and business goals.</p>
                            <p data-aos="fade-right" data-aos-offset="-200">Following solid design principles and patterns while at the same time focusing on the most essential elements. Keeping decorations and ornaments to a minimum.</p>
                            <p data-aos="fade-right" data-aos-offset="-200">A design should be timeless, not too trendy. Simplicity is the absolute key to staying on trend and at the same time being timeless.</p>
                            <h4 data-aos="fade-down" data-aos-offset="-200">Common Design Principles</h4>
                            <ul>
                                <li data-aos="fade-right" data-aos-offset="-200">
                                    <h5>Pre-Design</h5>
                                    <p>Have a clear sense of your audience and goals. What kind of experience should be provided to your users. There should be a quick mock up or basic sketch layout to organize where certain elements of the site should be.</p>
                                </li>
                                <li data-aos="fade-right" data-aos-offset="-200">
                                    <h5>Site Layout</h5>
                                    <p>A website should be designed to have consistency throughout. It should have an identity so all pages have a common feel. Make backgrounds, color schemes, navigational tools all flow together on every page.</p>
                                    <p>There should be multiple ways for a user to navigate from page to page. A stand out 'home' link and easily accessible menu from all devices.</p>
                                    <p>Important information or most looked for information should be easily accessible upfront or able to be accessed from any page.</p>
                                </li>
                                <li data-aos="fade-right" data-aos-offset="-200">
                                    <h5>Web Medium</h5>
                                    <p>Interaction should be a top priority. Something that makes a website stand out from a traditional newspaper or magazine print out. Try to engage the reader to have an experience they can't have with other types of media.</p>
                                    <p>Text only pages should not exist! Simply, they just make a user uninterested, makes the page boring. Too simple and not effective.</p>
                                    <p>Keep it elegant. Unnecessary animations, images, and colors should be avoided. Just because it's possible to go a little over the top doesn't mean you should</p>
                                </li>
                                <li data-aos="fade-right" data-aos-offset="-200">
                                    <h5>Engage</h5>
                                    <p>The home page should pique the curiosity of the user right away. Make them want to interact and explore more pages of you site.</p>
                                    <p>The topic of the website should be clear right when the user lands. Having the user have to search for why they are there in the first place will just want to make them leave quickly.</p>
                                </li>
                                <li data-aos="fade-right" data-aos-offset="-200">
                                    <h5>Accessibility</h5>
                                    <p>Font type, size and color are very important to making the text legible.</p>
                                    <p>Dark or fancy backgrounds and fancy texts can make it hard to read.</p>
                                </li>

                            </ul>
							<a data-aos="fade-right" data-aos-offset="-200" href="/contact">Share your requirements</a>
						</div>
					</div><!-- column -->
					<div class="column">
						<div class="title full_width" data-aos="fade-down">
							<img src="<?php echo bloginfo('template_url'); ?>/images/icon-html.png" />
							<h3>Front & Back End Development</h3>
						</div>

						<div class="column_content">
                            <p data-aos="fade-left" data-aos-offset="-200">Web development is always evolving quickly. Keeping up with the latest technologies is and will always be a part of the job.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">Getting to know the newest methods and at the same time getting better at the ones that are already relevant is something a developer must learn how to balance. However while new technologies come and go, the essentials of web development will basically remain the same.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">I will mold your design into a functional website using the newest versions of HTML, CSS, Javascript, PHP and more. Depending on your needs, wants and desires there's no obstacle that can't be overcome when it comes to developing.</p>
                            <h4 data-aos="fade-down" data-aos-offset="-200">Front-End</h4>
                            <p data-aos="fade-left" data-aos-offset="-200">I have extensive experience with efficient, maintainable and scalable front-end architecture. This is achieved by using the latest version of HTML, CSS, Javascript and JQuery.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">To streamline my workflow I've used a few different frameworks and preprocessors.</p>
                            <ul>
                                <li data-aos="fade-left" data-aos-offset="-200">
                                    <p>A combination of SASS, Bourbon and Neat is one of my favorite workflow to use. This really speeds the process of creating a responsive website. The grid and variables that can be used makes customizing and updating simplified.</p>
                                </li data-aos="fade-left" data-aos-offset="-200">
                                <li data-aos="fade-left" data-aos-offset="-200">
                                    <p>SASS is a constant in my workflow, along with it I have also used the Bootstrap framework for fast pace responsive developing.</p>
                                    <p>While Bootstrap is one of the most popular grid frameworks that developers use currently. I go back and forth with which option I prefer. Depending on the project, I feel like I get more flexibility using Bourbon and Neat.</p>
                                </li>
                            </ul>
                            <h4 data-aos="fade-down" data-aos-offset="-200">Back-End</h4>
                            <p data-aos="fade-left" data-aos-offset="-200">As far as a back-end framework, Wordpress is my number one choice. I have the most experience with this CMS and it is very flexible and customizable.</p>
                            <ul>
                                <li data-aos="fade-left" data-aos-offset="-200">
                                    <p>The ability to create customized themes with custom post types while using plugins like Advanced Custom Fields makes Wordpress a top CMS.</p>
                                </li>
                                <li data-aos="fade-left" data-aos-offset="-200">
                                    <p>A client can have customizable templates where they themselves can go to the backend to update content and even add more pages that will match the layout of the rest of the website.</p>
                                </li>
                                <li data-aos="fade-left" data-aos-offset="-200">
                                    <p>Top notch security, easy accessible API's, and authentication protocols go hand in hand with Wordpress. So you can rest assure your site will not only look and perform great but you and your clients will be protected from all the malicious actions that arise on the internet today</p>
                                </li>
                            </ul>
                            <p data-aos="fade-left" data-aos-offset="-200">Most recently I have been learning and applying the Laravel framework. This is one of the newest technologies that has a good balance between between modern practices and simplicity.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">Again, depending on the project, I think Laravel will become the number one framework to integrate in my developing.</p>
                            <h4 data-aos="fade-down" data-aos-offset="-200">Hosting</h4>
                            <p data-aos="fade-left" data-aos-offset="-200">Along with getting your site designed and developed I will also handle the hosting if need be.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">In a hosting platform I always look for performance, reliability, security, flexibility and scalability, plus great support.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">When the site is live, my work is not nearly done. As long as the site lives on the internet I will make sure it is in top notch performing status and if anything goes wrong I'll make it a top priority to fix it.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">Maintaining the site along with any updates that are needed is ongoing work for a developer and I will always adhere to that.</p>
                            <p data-aos="fade-left" data-aos-offset="-200">I want my clients to rest assure that their site is always taken care of whether it's important to their business needs or pleasure.</p>
                            <a data-aos="fade-left" data-aos-offset="-200" href="/contact">Ask me for a free quote</a>
						</div>
					</div><!-- column -->
				</div>
				
			</div>
		</div><!-- skills section -->
		<div class="about_section full_width">
			<div class="column" data-aos="fade-right">
				<div class="container">
					<h2>About Me</h2>
					<h4>Hello, thanks for checking out my site. My name is Matteo and I am a 
	passionate freelance web developer. I have been developing for years now and it kind of all started from
	nowhere.</h4>
					<p>I was always around it, being in internet marketing for 12+ years, and took some programming classes in college but never decided to go that route till later.</p>
					<p>I was looking for a change of career and decided to go back and take some programming/development courses. With the help of LaunchCode (an organization that helped people pursue their coding career) everything changed for me. Less than a year later I had my first job as a web developer, and everything took off from their.</p>
					<div class="button_wrap">
						<a class="button" href="/about">Read More About Me</a>
					</div>
				</div><!-- .container -->
			</div>
			<div class="column" data-aos="fade-left">
				<div class="container">
					<h2>Let's Work</h2>
					<p>I am available for consulting, collaboration and contract work. Whether it's a small project or big project I'm confident I can get it done.</p>
					<div class="form_wrap full_width">
						<?php echo do_shortcode('[wpforms id="444" title="false" description="false"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section><!-- home -->

<?php get_footer(); ?>