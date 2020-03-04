<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

	<footer id="global_footer" class="site_footer full_width">
		<div class="container">
			<div class="columns_wrap full_width">
				<div class="column">
					<div class="column_header">
						<h3>Quick Links</h3>
					</div>
					<nav role="navigation">	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer_menu' ) ); // remember to assign a menu in the admin to remove the container div ?></nav>
				</div>
				<div class="column">
					<div class="column_header">
						<h3>Design Services</h3>
					</div>
					<ul>
						<li>Website Design</li>
						<li>Responsive Design</li>
						<li>Logo Design</li>
					</ul>
				</div>
				<div class="column">
					<div class="column_header">
						<h3>Development Services</h3>
					</div>
					<ul>
						<li>Backend/Front-End Development</li>
						<li>CMS Integration - Wordpress, Core PHP</li>
						<li>Responsive to all devices</li>
						<li>Website Maintenance</li>
						<li>Website Hosting</li>
					</ul>
				</div>
				<div class="column">
					<div class="column_header">
						<h3>Contact Me</h3>
					</div>
					<div class="contact_info">
						<a class="skype" href="skype:matteoc5?add">matteoc5</a>
						<a class="email"href="mailto:matteo@mscwebservices.net">matteo@mscwebservices.net</a>
					</div>
				</div>
			</div>
			<div class="copy full_width">
				<p>&copy; 2016-2017 <a href="htp://mscwebservices.net">mscwebservices.net</a>. All Rights Reserved.</p>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>