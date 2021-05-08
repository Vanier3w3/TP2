<?php
/**
 * Template part l'affichage des blocs de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
global $tPropriete;
?>
  
<div class="card">
	<div class="card-content">
		<div class="thumbnail">
		<?php the_post_thumbnail( 'medium' ); ?>
		</div>
		<a href="<?php echo get_permalink(); ?>" class="info">
			<h3><?php echo get_the_title(); ?></h3>
			<p><?php echo wp_trim_words(get_the_content(), 50) ?></p>
		</a>
	</div>
</div>
