<?php get_header(); ?>

	<div id="content">
	
		<div id="page_content" class="grid_9">

		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>

				<div class="post">
					<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(''); ?>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>
		
		</div>
	
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
