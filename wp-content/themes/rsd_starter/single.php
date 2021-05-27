<?php get_header(); ?>

	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<header class="page-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<dl class="post-meta">
						<div>
							<dt>Szerző:</dt>
							<dd><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></dd>
						</div>
						<?php $categories = get_the_category(); ?>
						<?php if (!empty($categories)) { ?>
						<div>
							<dt>Kategória:</dt>
							<dd><a href="/<?php echo $categories[0]->slug; ?>"><?php echo $categories[0]->name; ?></a></dd>
						</div>
						<?php } ?>
						<div>
							<dt>Dátum:</dt>
							<dd><time><?php echo get_the_date(); ?></time></dd>
						</div>
						<div>
							<dt>Vélemények:</dt>
							<dd><a href="#comments"><?php echo get_comments_number(); ?></a></dd>
						</div>
					</dl>
				</header>
				<?php the_content(); ?>
			</article>

			<?php comments_template('/comment.php'); ?>
		<?php endwhile; else : ?>
			<h1>Nothing.</h1>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>
