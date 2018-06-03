<?php
	/*
		Template Name: Página Inicial
	*/
	get_header();
?>
<section class="highlights owl-carousel">
	<?php
		$args = array(
			'post_type'              => array( 'highlights' ),
			'nopaging'               => true,
			'posts_per_page'         => '5',
			'order'                  => 'ASC',
			'orderby'                => 'modified',
		);
		$highlights_query = new WP_Query( $args );
		if ( $highlights_query->have_posts() ) { while ( $highlights_query->have_posts() ) { $highlights_query->the_post(); ?>
			<article class="item d-flex align-items-center">
				<div class="container">
					<h2><?php the_title(); ?></h2>
					<a href="<?php the_excerpt(); ?>" title="<?php the_title(); ?>" target="_blank"><?php _e('Saiba mais', 'mapa-educacao'); ?></a>
				</div>
				<figure><img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="<?php the_title(); ?>"/></figure>
			</article>
	<?php } } wp_reset_postdata(); ?>
</section>
lololol<br><br><br><br><br><br><br><br>lololol<br><br><br><br><br><br><br><br>lololol<br><br><br><br><br><br><br><br>lololol<br><br><br><br><br><br><br><br>
<?php get_footer(); ?>
