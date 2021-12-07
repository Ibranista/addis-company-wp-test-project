<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<section id="primary" class="content-area col-sm-12 col-lg-12">
	<div id="main" class="site-main" role="main">
		
		<div id="primary">
			<div id="content" role="main">

				<?php while (have_posts()) : the_post(); ?>
					<?php
					$image = get_field('header_image');
					if (!empty($image)) : ?>
                    <div class="text-center">

                        <img class="img-thumbnail" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
					<?php endif; ?>
                    <h1> Payment Plan</h1><hr>
					<article class="payment_plan">
                        <?php the_field('payment_plan'); ?>
                    </article >
                    <h1>Facts</h1><hr>
					<article class="facts"><?php the_field('facts'); ?></article>

 

				<?php endwhile; // end of the loop. 
				?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<?php
		while (have_posts()) : the_post();

			get_template_part('template-parts/content', get_post_format());

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
