<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

<div class="row section-oil">

    <div class="col-md-12">
	 
	<div class="container">

		<div class="row">

			<div class="col-md-8 offset-md-1 callout">

				<div class="container">

					<?php 
					global $post;
					
						$footer_callout_title = get_field( "footer_callout_title" );
						$footer_callout_text = get_field( "footer_callout_text" );
						$footer_callout_link = get_field( "footer_callout_link" );
						$footer_callout_title_default = get_field( "footer_callout_title", 34 );
						$footer_callout_text_default = get_field( "footer_callout_text", 34 );
						$footer_callout_link_default = get_field( "footer_callout_link", 34 );

					?>


					<h2>
						<?php

							echo $footer_callout_title;
									
						?>
						
					</h2>

					<p>
						<?php
							
							echo $footer_callout_text;

									
						?>
									
					</p>
			
					<p><?php if (is_page( array (17, 19))) {
										echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]');
										
										}  
										else { ?>

										<a href="<?php echo $footer_callout_link; ?>" class="btn btn-primary" role="button" aria-pressed="true">Learn More</a></p>

									<?php }
									 ?></p>
									

				</div>

			</div>

		</div>

	</div>  
        
    </div>

</div>

                 

</div><!-- Wrapper end -->

<?php get_footer(); ?>
