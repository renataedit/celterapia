<?php

get_header();

if ( have_posts() ) {
	?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header>

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div>
	<?php

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	}

	twenty_twenty_one_the_posts_navigation();

} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
