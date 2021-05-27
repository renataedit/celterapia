<?php get_header(); ?>
<section class="articles">
	<div class="container">
		<div class="flex box">
			<div class="six-sm card">
				<h2 class="h4">Legfrissebb hírek</h2>
				<ul class="articles__list">
					<?php 
						$args = array(
							'numberposts' => 10,
							'category'		=> 'erdekkepviselet'
						);

						$erdekkepviselet = get_posts( $args );
						if ( $erdekkepviselet ) {
							foreach ( $erdekkepviselet as $post ) :
								setup_postdata( $post );
					?>
					<li class="articles__item">
						<a href="<?= the_permalink(); ?>" class="articles__link"><?= the_title(); ?></a>
					</li>
					<?php
							endforeach;
							wp_reset_postdata();
						}
					?>
				</ul>
			</div>
			<div class="six-sm card">
				<h2 class="h4">Érdekképviselet</h2>
				<ul class="article-list">
					<?php 
						$args = array(
							'numberposts' => 10,
							'category'		=> 'erdekkepviselet'
						);

						$erdekkepviselet = get_posts( $args );
						if ( $erdekkepviselet ) {
							foreach ( $erdekkepviselet as $post ) :
								setup_postdata( $post );
					?>
					<li>
						<a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
					</li>
					<?php
							endforeach;
							wp_reset_postdata();
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="contact-us">
	<div class="container">
		<h2 class="h4 contact-us__title">Kapcsolat</h2>
		<div class="contact-us__form">
			<?= do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
		</div>
	</div>
</section>
<section class="social-icons">
	<div class="container">
		<div class="social-icons__list">
			<a href="#" aria-label="Link to Facebook" class="social-icons__link social-icons__link--facebook">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="social-icons__icon">
					<title>Facebook</title>
					<path d="M31.5 16c0-8.563-6.938-15.5-15.5-15.5s-15.5 6.938-15.5 15.5c0 7.736 5.668 14.149 13.078 15.313v-10.832h-3.938v-4.481h3.938v-3.415c0-3.884 2.313-6.030 5.854-6.030 1.696 0 3.47 0.303 3.47 0.303v3.813h-1.955c-1.925 0-2.526 1.195-2.526 2.421v2.909h4.299l-0.688 4.481h-3.611v10.832c7.41-1.164 13.078-7.576 13.078-15.313z"></path>
				</svg>
				Facebook
			</a>
			<a href="#" aria-label="Link to Twitter" class="social-icons__link social-icons__link--twitter">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="social-icons__icon">
					<title>Twitter</title>
					<path d="M28.711 9.482c0.020 0.284 0.020 0.569 0.020 0.853 0 8.67-6.599 18.66-18.66 18.66-3.716 0-7.168-1.076-10.071-2.944 0.528 0.061 1.036 0.081 1.584 0.081 3.066 0 5.888-1.035 8.142-2.802-2.883-0.061-5.3-1.949-6.132-4.548 0.406 0.061 0.812 0.102 1.239 0.102 0.589 0 1.178-0.081 1.726-0.223-3.005-0.609-5.259-3.249-5.259-6.437v-0.081c0.873 0.487 1.888 0.792 2.964 0.832-1.766-1.178-2.924-3.188-2.924-5.462 0-1.218 0.325-2.335 0.893-3.31 3.228 3.98 8.081 6.579 13.523 6.863-0.101-0.487-0.162-0.995-0.162-1.502 0-3.614 2.924-6.558 6.558-6.558 1.888 0 3.594 0.792 4.792 2.071 1.482-0.284 2.904-0.832 4.162-1.584-0.487 1.523-1.523 2.802-2.883 3.614 1.32-0.142 2.599-0.508 3.777-1.015-0.893 1.299-2.010 2.457-3.289 3.391z"></path>
				</svg>
				Twitter
			</a>
			<a href="#" aria-label="Link to Youtube" class="social-icons__link social-icons__link--youtube">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="36" height="32" viewBox="0 0 36 32" class="social-icons__icon">
					<title>Youtube</title>
					<path d="M34.353 7.755c-0.393-1.478-1.549-2.642-3.018-3.037-2.662-0.718-13.336-0.718-13.336-0.718s-10.674 0-13.336 0.718c-1.469 0.395-2.625 1.559-3.018 3.037-0.713 2.679-0.713 8.269-0.713 8.269s0 5.59 0.713 8.269c0.393 1.478 1.549 2.594 3.018 2.989 2.662 0.718 13.336 0.718 13.336 0.718s10.674 0 13.336-0.718c1.469-0.395 2.625-1.511 3.018-2.989 0.713-2.679 0.713-8.269 0.713-8.269s0-5.59-0.713-8.269zM14.509 21.099v-10.15l8.921 5.075-8.921 5.075z"></path>
				</svg>
				Youtube
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
