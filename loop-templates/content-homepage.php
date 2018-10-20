<?php
/**
 * Partial template for content in home page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?> container">

	<div class="entry-content row home-intro">

        <div class="col-md-8 offset-md-1">

		    <?php the_content(); ?>

		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

    </footer><!-- .entry-footer -->
    
    <div class="row home-callout">

        <div class="col-xl-5 offset-xl-1 callout-text">

            <h2><?php the_field('callout_title'); ?></h2>
            
            <p class="lead"><?php the_field('callout_text'); ?></p>

            <p><a href="<?php the_field('callout_button_link'); ?>" class="btn btn-primary"><?php the_field('callout_button_text'); ?></a></p>

        </div>

        <div class="col-xl-6">

            <img src="../wp-content/themes/mitton-cavitation/img/cavitation-reactor.png" alt="Industrial-Scale Applied Cavitation Reactor" />

        </div>

    </div>

    

</article><!-- #post-## -->
