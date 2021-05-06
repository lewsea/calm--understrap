<?php

add_action( 'wp_ajax_nopriv_filter', 'filter_ajax' );
add_action( 'wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {

	$category = $_POST['category'];

	$args = array(
		'post_type' => 'project',
		'post_per_page' => '-1',
		'order' => 'ASC',
	);

	if ( isset( $category ) ) {
		$args['category__in'] = array( $category );
	}
	
	$query = new WP_Query( $args );
	
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post(); ?>

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

		<?php endwhile;
	endif;

	
	wp_reset_postdata();

	die();
}

?>
