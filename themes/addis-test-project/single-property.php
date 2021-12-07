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
		<?php if (have_rows('product')) : ?>

			<?php while (have_rows('product')) : the_row();

				// vars
				$product_name = get_sub_field('product_name');
				$product_price = get_sub_field('product_price');
				$product_general_description = get_sub_field('product_general_description');
				$image = get_sub_field('product_image');
				$product_ = get_sub_field('product_')
			?>
				<div class="container bg-dark">
					<div class="card mb-3 product_section d-flex">
						<div class="card-body d-flex">
							<section class="wrapper w-100">
								<h1><?= $product_name ?></h1>
								<img class="img-thumbnail img-fluid w-50 ml-5" src="<?php echo $image['url']; ?>" />
							</section>
							<section class="details" style="width: 100%;">
								<h1>Price: <?= $product_price ?></h1>
								<p class="card-text"><?= $product_general_description ?></p>
							</section>
						</div>
					</div>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>


		<div id="primary">
			<div id="content" role="main">

				<?php while (have_posts()) : the_post(); ?>
					<?php
					$image = get_field('header_image');
					if (!empty($image)) : ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<h1><?php the_field('payment_plan'); ?></h1>
					<h1><?php the_field('facts'); ?></h1>

					<img src="<?php the_field('hero_image'); ?>" />

					<p><?php the_content(); ?></p>

				<?php endwhile; // end of the loop. 
				?>

			</div><!-- #content -->
		</div><!-- #primary -->


	</div><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
