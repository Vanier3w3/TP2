<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="galerie">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
				<div class="card">
					<div class="card-content">
						<div class="thumbnail">
						<?php the_post_thumbnail( 'medium' ); ?>
						</div>
						<a href="<?php echo get_permalink(); ?>" class="info">
							<h2><?php echo get_the_title(); ?></h2>
							<p><?php echo wp_trim_words(get_the_content(), 50) ?></p>
						</a>
					</div>
				</div>
			<?php endwhile;?>
			</section>
			
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
