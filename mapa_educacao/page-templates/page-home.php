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
			'posts_per_page'         => '5',
			'order'                  => 'ASC',
			'orderby'                => 'published',
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
<section class="about">
	<div class="container">
		<div class="row">
			<h2 class="col-12"><?php _e('Quem somos', 'mapa-educacao'); ?></h2>
			<div class="box col-12 col-lg-7">
				<p><?php _e('Somos um <strong>movimento</strong> para reforçar o direito de todos os brasileiros ao <strong>acesso a uma educação de qualidade</strong>, e acreditamos que o jovem deve ser o protagonista dessa mudança.', 'mapa-educacao'); ?></p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container blog-posts">
		<div class="row align-items-stretch">
			<h2 class="col-sm-12 col-lg-3"><?php _e('Blog', 'mapa-educacao'); ?></h2>
			<?php
				$args = array(
					'posts_per_page'         => '3',
					'order'                  => 'DSC',
					'orderby'                => 'published',
				);
				$news_query = new WP_Query( $args );
				if ( $news_query->have_posts() ) { while ( $news_query->have_posts() ) { $news_query->the_post(); ?>
					<article class="col-md-4 col-lg-3">
						<div class="box">
							<?php if ( has_post_thumbnail() ) { ?>
								<figure><?php the_post_thumbnail('medium'); ?></figure>
							<?php } else { ?>
								<figure><img src="<?php echo get_template_directory_uri(); ?>/img/img_placeholder.jpg" alt="<?php _e('Sem imagem', 'mapa-educacao'); ?>"/></figure>
							<?php } ?>
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('Leia mais', 'mapa-educacao'); ?></a>
						</div>
					</article>
			<?php } } wp_reset_postdata(); ?>
		</div>
		<a href="#" title="<?php _e('Ver mais posts', 'mapa-educacao'); ?>"><?php _e('Ver mais posts', 'mapa-educacao'); ?></a>
	</div>
</section>
<section>
	<div class="container video">
		<h2><?php _e('Você se interessa por educação?', 'mapa-educacao'); ?></h2>
		<p><?php _e('Sonha que cada criança e cada jovem do país tenham as mesmas oportunidades educacionais?', 'mapa-educacao'); ?></p>
		<a class="btn btn-ghost btn-block"><?php _e('Assine nossa newsletter', 'mapa-educacao'); ?></a>
		<a class="btn btn-primary btn-block"><?php _e('Faça parte', 'mapa-educacao'); ?></a>
	</div>
</section>
<section class="projects">
	<div class="container owl-carousel">
		<?php
			$args = array(
				'post_type'              => array( 'projects' ),
				'posts_per_page'         => '-1',
				'order'                  => 'ASC',
				'orderby'                => 'modified',
			);
			$highlights_query = new WP_Query( $args );
			if ( $highlights_query->have_posts() ) { while ( $highlights_query->have_posts() ) { $highlights_query->the_post(); ?>
				<article class="item">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure><?php the_post_thumbnail('projects-thumb'); ?></figure>
					<?php } ?>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php _e('Conheça todos os projetos', 'mapa-educacao'); ?></a>
				</article>
		<?php } } wp_reset_postdata(); ?>
	</div>
</section>
<section>
	<div class="container video">
		<h2><?php _e('Você se interessa por educação?', 'mapa-educacao'); ?></h2>
		<p><?php _e('Sonha que cada criança e cada jovem do país tenham as mesmas oportunidades educacionais?', 'mapa-educacao'); ?></p>
		<a class="btn btn-ghost btn-block"><?php _e('Assine nossa newsletter', 'mapa-educacao'); ?></a>
		<a class="btn btn-primary btn-block"><?php _e('Faça parte', 'mapa-educacao'); ?></a>
	</div>
</section>
<?php get_footer(); ?>
