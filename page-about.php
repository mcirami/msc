<?php
/**
 * Template Name: About
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */
 
get_header(); ?>

	<section class="about">
		<div class="top_section inner_page_wrap">
			<div class="container">
				<h2 data-aos="fade-down"><span class="underline">About</span> Me</h2>
				<img data-aos="flip-left" src="<?php echo bloginfo('template_url'); ?>/images/me.jpg" />

				<p data-aos="fade-left">Hello, thanks for checking out my site. My name is Matteo and I am a passionate freelance web developer. I have been developing for years now and it all started out of nowhere. I was always around it, being in internet marketing for 12+ years, but never actually dove into developing.</p>
				<p data-aos="fade-left">I was looking for a change of career when I cam across a computer science programming/development course. Along with that a local group called LaunchCode was going to be tutoring people who took the course. That changed everything for me. Less than a year later I had my first job as a web developer.</p>
				<p data-aos="fade-left">I have now started my own freelancer business and while also working with a small marketing company consistently.</p>
				<p data-aos="fade-left">If you have a certain design in mind I can make it come to life on the web. If you want to work with a designer and transform that to the web, I am a pro at that. I also have my own designer that can take your vision and turn it into a beautiful website. </p>
				<p data-aos="fade-left">I've also worked with Wordpress on many projects. If you don't know, Wordpress is a very powerful CMS(Content Management System). The backend is very user friendly and can be customized to your liking. Templates can be created and easily used throughout the site. When you add a page you can choose which layout you want that page to have. The security for your site is top notch and not to mention the endless amount of plugins that can be added to make it easier as a user and as developer.</p>
				<p data-aos="fade-left">No matter what your project may be, I guarantee to do great work at an affordable price. I'm happy to earn your business, no matter what your budget is.</p>
				<p data-aos="fade-left"">You can check out my past projects here: <a href="https://mscwebservices.net/#projects">My Work</a></p>
				<p data-aos="fade-left">Let me know if there is anything you need done that I could be a good fit for. No matter how big or small I am confident I can get it done.</p>

			</div>
		</div>
		<div class="middle_section full_width">
			<div class="container">
				<h2 data-aos="fade-down"><span class="underline">My</span> Expertise</h2>
				<div class="columns full_width">
					<ul>
						<li data-aos="fade-right"><p>Wordpress Development</p></li>
						<li data-aos="fade-right"><p>Responsive Website Design</p></li>
						<li data-aos="fade-right"><p>Plugin Customization</p></li>
					</ul>
					<ul>
						<li data-aos="fade-left"><p>Front-End & Back-End Development</p></li>
						<li data-aos="fade-left"><p>PHP & JQuery</p></li>
						<li data-aos="fade-left"><p>HTML/CSS</p></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_section full_width">
			<div class="container">
				<h2 data-aos="fade-down"><span class="underline">My</span> Hobbies</h2>
				<div class="full_width row">
					<h3 data-aos="fade-down">Guitar</h3>
					<p data-aos="fade-left">Along with developing, playing guitar is a huge passion for me. I've been playing for over 25 years and have been in a few different bands over the years. While having less time these days I still always make sure I pick up the guitar daily. I am always learning and work on improving my playing constantly. My style has definitely changed over the years as I get older. I'm more into the acoustic/folky type of music these days where in the past I was always about rock n roll.</p>
				</div>
				<div class="full_width row animatedParent animateOnce">
					<h3 data-aos="fade-down">Sports</h3>
					<p data-aos="fade-right">I'm not much of an athlete but I do try to play volleyball and tennis every now and then. I'm usually in some recreational leagues in the summer just to have a little fun, get social and get some exercise in.</p>
				</div>
				<?php get_template_part( 'content', 'social-media' ); ?>
			</div><!-- .container -->
		</div>
		
	</section>

<?php get_footer(); ?>