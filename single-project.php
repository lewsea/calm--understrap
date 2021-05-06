<?php
/**
 * The template for displaying project posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
		
			<main class="site-main" id="main">

				<div class="single-project-wrapper wrapper">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'single-project' );
					}
					?>

					<div class="related-project">
						<h3>Related Projects</h3>
						<div class="related-project-wrapper wrapper">
							<?php
								$customTaxonomyTerms = wp_get_object_terms( $post->ID, 'category', array( 'fields' => 'ids' ) );
								$args = array(
									'post_type' => 'project',
									'post_status' => 'publish',
									'posts_per_page' => 5,
									'post__not_in' => array( $post->ID ),
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'id',
											'terms' => $customTaxonomyTerms,
										),
									),
								);
								$relatedPosts = new WP_Query( $args );
								if ( $relatedPosts->have_posts() ) {
									while ( $relatedPosts->have_posts() ) { 
										$relatedPosts->the_post();
										?>
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
										<?php
									}
								} else {
									echo '<p>No Post Found</p>';
								}
								wp_reset_postdata();
								?>
						</div>
					</div>
				</div>
				
			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
