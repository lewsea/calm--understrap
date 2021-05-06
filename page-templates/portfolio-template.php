<?php
/**
 * Template Name: Project Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
				
					<div class="site-header">

						<h1 class="site-title my-5">PORTFOLIO</h1>
						<div class="site-desc">
							<p class="mb-3">Collection of our awesome projects carefully crafted by our team of experts.</p>
							<span>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
						</div>

						<div class="filter-projects-wrapper">
							<ul class="filter-project">
								<li>
									<a class="filter-project-item" href="">All</a>
								</li>
							<?php
								$cat_args = array(
									'exclude' => array( 1 ),
									'option_all' => 'All', 
								);

								$categories = get_categories( $cat_args );

								foreach ( $categories as $cat ) : 
									?>
									<li>
										<a class="filter-project-item" data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>

						<div class="project-container filter-projects masonry-grid">
							<?php 
								$args = array(
									'post_type' => 'project',
									'posts_per_page' => 0,
									'order' => 'ASC',
								);

								$projectposts = new WP_Query( $args );
								
								while ( $projectposts->have_posts() ) {
									$projectposts->the_post();
									?>
								<div class="masonry-grid-block">
									<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
										<div class="project-content">
											<div class="project-img">
												<div class="project-img-overlay">
													<img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
												</div>
												<a href="<?php the_permalink(); ?>">VIEW CASE STUDY</a>
											</div>
											<div class="project-desc">
												<a class="project-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
												<span><?php the_category(); ?></span>
												<p><?php echo wp_trim_words( get_the_excerpt(), 21 ); ?></p>
											</div>
										</div>
									</article>
								</div>
							<?php } wp_reset_postdata(); ?>
						</div>    
					</div>
					

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div>

<?php
get_footer( 'project' );
