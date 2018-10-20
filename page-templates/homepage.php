<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the home page. No sidebar.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'homepage' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

	<div class="row home-benefits">

        <div class="col">

            <div class="container">

                <h2>Benefits of the Mitton Cavitation Reactor</h2>

				<div class="row">

					<div class="col-md-4">

						<div class="card text-center">
							
							<div class="card-body">

								<img src="wp-content/themes/mitton-cavitation/img/icon-1.png" alt="Card image cap">

								<p class="card-text"><?php the_field('benefit_1'); ?></p>
							
							</div>
						
						</div>

					</div>

					<div class="col-md-4">

						<div class="card text-center">

							<div class="card-body">

								<img src="wp-content/themes/mitton-cavitation/img/icon-2.png" alt="Card image cap">

								<p class="card-text"><?php the_field('benefit_2'); ?></p>
							
							</div>
						
						</div>
					
					</div>

					<div class="col-md-4">

						<div class="card text-center">

							<div class="card-body">

								<img src="wp-content/themes/mitton-cavitation/img/icon-3.png" alt="Card image cap">

								<p class="card-text"><?php the_field('benefit_3'); ?></p>
							
							</div>
						
						</div>
					
					</div>
				
				</div>

            </div>

        </div>

    </div>

	<div class="row">

		<div class="col">

			<div class="container">

				<div class="row testimonial">


					<div class="col-sm-12 col-lg-1 t-icon">

						<img src="wp-content/themes/mitton-cavitation/img/icon-water.png" alt="water drop" />

					</div>

					<div class="col-sm-12 col-lg-5 testimonial-text">

						<p><q><?php the_field('testimonial_1_content'); ?></q></p>

						<p class="name"><?php the_field('testimonial_1_source_name'); ?></p>


					</div>

				

					<div class="col-sm-12 col-lg-1 t-icon">

					<img src="wp-content/themes/mitton-cavitation/img/icon-oil.png" alt="oil drop" />

					</div>

					<div class="col-sm-12 col-lg-5 testimonial-text">

						<p><q><?php the_field('testimonial_2_content'); ?></q></p>

						<p class="name"><?php the_field('testimonial_2_source_name'); ?></p>


					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="row section-oil">

		<div class="col-md-12">
		
		<div class="container">

<div class="row">

	<div class="col-xl-8 offset-xl-1 callout">

		<div class="container">
			<?php 
			
				$footer_callout_title = get_field( "footer_callout_title" );
				$footer_callout_text = get_field( "footer_callout_text" );
				$footer_callout_link = get_field( "footer_callout_link" );

			?>


				

				<h2><?php if( $footer_callout_title ) {

					echo $footer_callout_title;

					} else {

						the_field('footer_callout_title, 34');

					}
					?></h2>

				<p><?php the_field('footer_callout_text'); ?></p>
		
				<p><a href="<?php the_field('footer_callout_link'); ?>" class="btn btn-primary" role="button" aria-pressed="true">Learn More</a></p>

			</div>

		</div>

	</div>

</div>       
			
		</div>

	</div>

	

</div><!-- Wrapper end -->

<?php get_footer(); ?>
