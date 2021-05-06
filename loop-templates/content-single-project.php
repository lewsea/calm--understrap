<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="post-categories"><?php the_category( ' . ' ); ?></div> 
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="single-project-description row">
			<div class="about-project col-md-6">
				<h5>ABOUT THE PROJECT</h5>
				<div class="about-content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="field-project col-md-6">
				<div class="field">
					<p>Client</p>
					<span><?php the_field( 'client_name' ); ?></span>
				</div>
				<div class="field">
					<p>Industry</p>
					<span><?php the_field( 'industry' ); ?></span>
				</div>
				<div class="field">
					<p>Services</p>
					<span class="field-cat"><?php the_category( ' / ' ); ?></span>
				</div>
				<div class="field">
					<p>Location</p>
					<span><?php the_field( 'location' ); ?></span>
				</div>
				<div class="field">
					<p>Date</p>
					<span><?php the_field( 'date' ); ?></span>
				</div>
				<div class="field">
					<p>Visit</p>
					<span><a href="<?php the_field( 'site_link' ); ?>"><?php the_field( 'site_link' ); ?></a> </span>
				</div>
			</div>
		</div>

		<hr class="hr-seperator">

		<div class="project-content">

			<div class="project-img">
				<img src="<?php the_field( 'project_image' ); ?>" alt="">
			</div>

			<div class="project-strat">
				<h5>Strategy</h5>
				<p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text.
				<br>
				What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text.</p>
			</div>

			<div class="project-mobile-view">
				<img src="<?php echo get_template_directory_uri(); ?>/img/device-1.png" alt=""> 
				<!-- yeah this one is hilarious af -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/device-2.png" alt=""> 
			</div>

			<div class="project-testimonials">
				<span>OUR CLIENT SAYS</span>
				<i class="fa fa-quote-left mt-2"></i>
				<p> I was amazed at the quality of Monocalm. This company is great. We're loving it. Monocalm has really helped our business.</p>
				<span class="blockquote-footer"> Gee G.</span>
				<!-- gee gee Baby baby baby -->
			</div>

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
