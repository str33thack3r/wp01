<?php
get_header();
?>


<?php if (have_posts()) {

	// Start the loop.
	while (have_posts()) {
		the_post();
		the_content();
		// End the loop.
	}

	// Previous/next page navigation.
	/*
	  the_posts_pagination(array(
	  'prev_text' => __('Previous page', 'twentyfifteen'),
	  'next_text' => __('Next page', 'twentyfifteen'),
	  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
	  ));
	 */
}
?>

<section class="bg-primary" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">We've got what you need!</h2>
				<hr class="light">
				<p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
				<a href="#" class="btn btn-default btn-xl">Get Started!</a>
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">At Your Service</h2>
				<hr class="primary">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
					<h3>Sturdy Templates</h3>
					<p class="text-muted">Our templates are updated regularly so they don't break.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
					<h3>Ready to Ship</h3>
					<p class="text-muted">You can use this theme as is, or you can make changes!</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
					<h3>Up to Date</h3>
					<p class="text-muted">We update dependencies to keep things fresh.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
					<h3>Made with Love</h3>
					<p class="text-muted">You have to make your websites with love these days!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="no-padding" id="portfolio">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio/1.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Category
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio/2.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Category
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio/3.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Category
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio/4.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Category
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio/5.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Category
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio/6.jpg" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Category
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Let's Get In Touch!</h2>
				<hr class="primary">
				<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
			</div>
			<div class="col-lg-4 col-lg-offset-2 text-center">
				<i class="fa fa-phone fa-3x wow bounceIn"></i>
				<p>123-456-6789</p>
			</div>
			<div class="col-lg-4 text-center">
				<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
				<p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
			</div>
		</div>
	</div>
</section>

<!-- jQuery -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.fittext.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/creative.js"></script>

</body>

</html>
