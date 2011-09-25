<?php get_header(); ?>

	<div id="content">
	
		<div id="page_content" class="grid_9">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<div class="post">
					<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content('Читать дальше &raquo;'); ?>
				</div>

			<?php endwhile; ?>

		<?php else : ?>

			<h2 class="center">Здесь ничего нет</h2>
			<p class="center">Никакой информации здесь, приходите позже!</p>

		<?php endif; ?>
	
		</div>
	
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
