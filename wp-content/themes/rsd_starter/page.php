<?php get_header(); ?>

	<div class="container">
		<div class="flex box justify-center">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="nine-xl ten-lg">
				<header class="page-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>
				<?php the_content(); ?>
			</article>
		<?php endwhile; else : ?>
			<h1>Nothing.</h1>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>
