<?php
/**
 * Template Name: Home Page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-wrapper wrapper" id="full-width-page-wrapper">
    <div class="slick-wrapper wrapper">
        <div class="social-link-side">
            <p class="text-uppercase">Follow us</p>
            <div class="social-link-side-container">
                <a href="#"><span class="iconify" data-inline="false" data-icon="fe:facebook"></span></a>
                <a href="#"><span class="iconify" data-inline="false" data-icon="fe:instagram"></span></a>
                <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:twitter-square-filled"></span></a>
                <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:linkedin-filled"></span></a>
                <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:behance-square-filled"></span></a>
            </div>
        </div>
        <div class="container">
            <div class="slick-home-slider">
                <div class="slick-slide-item slick-hero">
                    <div class="slide-item-desc">
                        <h2>We help brands make their customers<br> feel the calm.</h2>
                        <p>Calmness is defined as the state or quality of being free from agitation or strong emotion; a state of freedom; without rough motion; stillness; and tranquil. </p>
                        <div class="slide-item-btn">
                            <a href="" class="accent-btn-sec">GET A QUOTE</a>
                            <a href="<?php echo site_url('/portfolio'); ?>" class="accent-btn">VIEW OUR WORK </a>
                        </div>
                    </div>
                    <div class="slide-item-img">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                <hr>

                <section class="about-wrapper section-wrapper my-5">
                    <div class="about-img-container">
                        <div class="about-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/person1.png" alt="">
                        </div>
                        <div class="about-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/person2.png" alt="">
                        </div>
                        <div class="about-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/person3.png" alt="">
                        </div>
                    </div>
                    <div class="about-desc-container">
                        <span>ABOUT THE COMPANY</span>
                        <h3>We are a team of experts delivering beautiful digital products for you.</h3>
                        <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
                        <a href="" class="accent-btn" >OUR TEAM <span class="iconify" data-inline="false" data-icon="bytesize:arrow-right"></span></a>
                    </div>
                </section>

                <section class="about-services wrapper">
                    <h4>We are Experts in :</h4>
                    <div class="row wrapper">
                        <div class="col-md-4 services-block">
                            <div class="block-header">
                                <span class="iconify" data-inline="false" data-icon="carbon:development"></span>
                                <h5>Ideas. <br> Web Development.</h5>
                            </div>
                            <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="col-md-4 services-block">
                            <div class="block-header">
                                <span class="iconify" data-inline="false" data-icon="fluent:design-ideas-20-regular"></span>
                                <h5>Experience. <br> Creative Web Design.</h5>
                            </div>
                            <p>What is Lorem Ipsum is a dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="col-md-4 services-block">
                            <div class="block-header">
                                <span class="iconify" data-inline="false" data-icon="ic:baseline-branding-watermark"></span>
                                <h5>Branding. <br> Digital Marketing.</h5>
                            </div>
                            <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                </section>

                <hr>

                <section class="project-wrapper section-wrapper mt-5">
                    <div class="wrapper-title">
                        <span>LATEST PROJECTS</span>
                        <h3>We make awesome projects for our awesome clients.</h3>
                    </div>
                    <div class="project-container">
                        <?php 
                            $args = array (
                            'post_type' => 'project',
                            'posts_per_page' => 6,
                            );
                            $projectposts = new WP_Query($args);
                            while ($projectposts->have_posts()) {
                            $projectposts->the_post();
                        ?>
                            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <div class="project-content">
                                    <div class="project-img">
                                        <div class="project-img-overlay">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                        </div>
                                        <a href="<?php the_permalink(); ?>">VIEW CASE STUDY</a>
                                    </div>
                                    <div class="project-desc">
                                        <a class="project-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                                        <span><?php the_category(); ?></span>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 21); ?></p>
                                    </div>
                                </div>
                            </article>
                        <?php } wp_reset_query(); ?>
                    </div>
                    <div class="mt-5 text-right">
                        <a href="<?php echo site_url('/portfolio');?>" class="accent-btn float-right">PORTFOLIO <span class="iconify" data-inline="false" data-icon="bytesize:arrow-right"></span></a>
                    </div>
                </section>

                <hr>
                
                <section class="services-wrapper section-wrapper">
                    <div class="services-container">
                        <div class="services-img-container">
                            <?php echo do_shortcode('[video src="https://www.youtube.com/watch?v=uLkkNcAk6tE"]');?>
                        </div>
                        <div class="services-desc-container">
                            <span>SERVICES</span>
                            <h3>We craft awesome brands and ensures quality in our services.</h3>
                            <p><span> What is Lorem Ipsum Lorem Ipsum  simply dummy text of the printing and typesetting industry </span> <br>
                            What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
                            <div class="mt-5 text-right">
                                <a href="<?php echo site_url('/services');?>" class="accent-btn float-right">SERVICES <span class="iconify" data-inline="false" data-icon="bytesize:arrow-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="services-counter wrapper">
                        <div class="row number-counter">
                            <div class="col-md-3 counter-block">
                                <span class="counter">12</span>
                                <p>CREATIVE EXPERTS</p>
                            </div>
                            <div class="col-md-3 counter-block">
                                <span class="counter">10014</span>
                                <p>HOURS OF WORK</p>
                            </div>
                            <div class="col-md-3 counter-block">
                                <span class="counter">69</span>
                                <p>PROJECTS COMPLETED</p>
                            </div>
                            <div class="col-md-3 counter-block">
                                <span class="counter">4204</span>
                                <p>SATISFIED CLIENTS</p>
                            </div>
                        </div>
                    </div>
                </section>

                <hr>
                                
                <section class="blog-wrapper section-wrapper">
                    <div class="wrapper-title">
                        <span>LATEST ARTICLES</span>
                        <h3>Industry trends, tips and insights or just want to see latest news in our company it’s all here..</h3>
                    </div>
                    <div class="blogs-container row">
                        <?php 
                            $args = array (
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                            );
                            $blogposts = new WP_Query($args);
                            while ($blogposts->have_posts()) {
                                $blogposts->the_post();
                        ?>
                            <div class="col-md-4">
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="blog-header">
                                            <span class="day"><?php echo get_the_date('d'); ?></span>
                                            <div class="blog-title">
                                                <span><?php echo get_the_date('F Y'); ?></span>
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <p><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        <?php } wp_reset_query(); ?>
                    </div>
                    <div class="mt-5 text-right">
                        <a href="<?php echo site_url('/blog'); ?>" class="accent-btn float-right">VIEW BLOGS <span class="iconify" data-inline="false" data-icon="bytesize:arrow-right"></span></a>
                    </div>
                </section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div>

<?php
get_footer();
