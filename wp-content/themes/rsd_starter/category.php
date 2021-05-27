<?php get_header(); ?>

	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php echo single_cat_title(); ?> Archívum</h1>
			<div class="page-description"><?php echo category_description(); ?></div>
		</header>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="article-card">
				<!-- <?php if (has_post_thumbnail()) { the_post_thumbnail('medium_large', array('class' => 'article-image')); } ?> -->
				<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
						<dd><a href="<?= get_the_permalink() . '#comments' ?>"><?php echo get_comments_number(); ?></a></dd>
					</div>
				</dl>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; else : ?>
			<h1 class="twelve">Nothing.</h1>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>
