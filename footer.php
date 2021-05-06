<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					
					<div class="row">

						<div class="col-md-3">
							<div class="card-body">
								<h4>MONOCALM</h4>
								<p class="card-text card-desc">
								Monocalm is a Digital Agency Theme but also a flexible multi-purpose WordPress theme with a modern and calm monospace look.
								</p>
								<div class="footer-social-link">
									<a href="#"><span class="iconify" data-inline="false" data-icon="fe:facebook"></span></a>
									<a href="#"><span class="iconify" data-inline="false" data-icon="fe:instagram"></span></a>
									<a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:twitter-square-filled"></span></a>
									<a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:linkedin-filled"></span></a>
									<a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:behance-square-filled"></span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-body">
								<h6 class="card-title">Quick Links</h6>
								<?php
									wp_nav_menu(
										array(
											'menu' => '3',
											'menu_class' => 'p-0 m-0 list-unstyled',
										)
									)
									?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-body">
								<h6 class="card-title">Contact Info</h6>
								<div class="card-text contact-card">
									<div class="contact-location d-flex">
										<i><span class="iconify" data-inline="false" data-icon="fe:map"></span></i>
										<p class="mb-1">Monocalm Digital Agency 
											<br>P.O Box 283 8562 Fusche Rd.
											<br>Mankato Mississippi 96522
										</p>
									</div>			
									<div class="contact-mail d-flex align-items-center">
										<i><span class="iconify" data-inline="false" data-icon="feather:mail"></span></i>
										<a href="mailto:hello@monocalm.com">hello@monocalm.com</a>
									</div>			
									<div class="contact-tel d-flex mb-2 align-items-center">
										<i><span class="iconify" data-inline="false" data-icon="fe:phone"></span></i>
										<a href="tel: (123) 456-7890">+63 1234 567 890</a>
									</div>			
								</div>
								<a href="" class="card-link text-uppercase">View Direction <span class="iconify" data-inline="false" data-icon="fe:arrow-right"></span></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-body">
								<h6 class="card-title">Join Our Newsletter</h6>
								<?php echo do_shortcode( '[contact-form-7 id="22" title="Newsletter Form"]' ); ?>
								<p class="card-text card-desc">By subscribing to our newsletter you agree to receive email from us.</p>
							</div>
						</div>
					
					</div>
											
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

	<div class="footer-copy">
		<div class="container d-flex  justify-content-md-between align-items-center py-2 ">
			<p class="m-0"><span><?php echo date( 'Y' ); ?> </span> &copy; <a href="" class="text-uppercase">Monocalm</a>   <span>Created by</span> <a href="https://github.com/lewsea">Luis</a></p>
			<div class="terms-link">
			  <a href="#" class="mr-4">Terms & Services</a>                                 
			  <a href="<?php echo site_url( '/privacy-policy' ); ?>">Privacy Policy</a>                                  
			</div>
		</div>
	</div>
	
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

	<div id="full-page-search">
		<div class="full-page-search-overlay"></div>
		<div class="full-page-search-content">
			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" class="search-form my-5">
				<input name="s" type="text" id="modal-search-field" placeholder="Type something..." value="<?php the_search_query(); ?>">
				<label for="s">Hit <span>'Enter'</span> to search or <span>'ESC'</span> to close</label>
				<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
				value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">
			</form>
			<div class="search-footer d-flex justify-content">
				<div class="search-footer-block">
					<h4>What is calm ? </h4>
					<p>Calmness is defined as the state or quality of being free from agitation or strong emotion; a state of freedom; without rough motion; stillness; and tranquil. </p>
				</div>
				<div class="search-footer-block">
					<h4>Latest Blog </h4>
					<div class="blog-post-block">
						
					</div>
				</div>
				<div class="search-footer-block">
					<h4>Quick Links</h4>
					<?php
						wp_nav_menu(
							array(
								'menu' => '3',
								'menu_class' => 'p-0 m-0 list-unstyled',
							)
						)
						?>
				</div>
			</div>
		</div>
		<div class="search-close" id="search-close-btn"><span class="iconify" data-inline="false" data-icon="fe:close"></span></div>
	</div>

	<nav class="right-navbar-menu" id="navbar-offset-right">
		<div class="navbar-menu-close" id="nav-close-btn"><span class="iconify" data-inline="false" data-icon="fe:close"></span></div>

		<div class="nav-image-logo">
			<img src="" alt="">
			<h4>MONOCALM</h4>
		</div>
		<?php
			wp_nav_menu(
				array(
					'menu' => 'primary',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 3,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			)
			?>
		<div class="latest-project-block card-body mt-3">
			<h4>Latest Blog </h4>
			<div class="blog-post-block">
				<?php 
					$args = array(
						'post_type' => 'project',
						'posts_per_page' => 1,
					);
					$projectposts = new WP_Query( $args );
					while ( $projectposts->have_posts() ) {
						$projectposts->the_post();
						?>
					<a href="<?php the_permalink(); ?>">
					<span class="iconify" data-inline="false" data-icon="ant-design:arrow-right-outlined"></span>
						<?php the_title(); ?>
					</a>
				<?php } wp_reset_postdata(); ?>
			</div>
		</div>

		<div class="card-body mt-3">
			<h6 class="card-title">Join Our Newsletter</h6>
			<?php echo do_shortcode( '[contact-form-7 id="22" title="Newsletter Form"]' ); ?>
			<p class="card-text card-desc text-secondary">By subscribing to our newsletter you agree to receive email from us.</p>
		</div>
	</nav>

<?php wp_footer(); ?>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

</body>

</html>

