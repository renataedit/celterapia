<?php

add_theme_support( 'post-thumbnails' );


add_action('init', 'register_menus');
function register_menus() {
	register_nav_menu('header_menu',__('Fejléc Menü'));
	register_nav_menu('footer_menu',__('Lábléc Menü'));
}


add_filter('wp_nav_menu','add_class_to_menu_links');
function add_class_to_menu_links($class) {
	return preg_replace('/<a /', '<a class="menu-link"', $class);
}


add_filter( 'comment_form_fields', 'reorder_comment_form_fields' );
function reorder_comment_form_fields( $fields ) {
	$comment_field = $fields['comment'];
	$cookies_field = $fields['cookies'];
	unset( $fields['comment'] );
	unset( $fields['url'] );
	unset( $fields['cookies'] );
	$fields['comment'] = $comment_field;
	$fields['cookies'] = $cookies_field;
	return $fields;
}


function custom_comment_markup($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<div class="comment-body">
			<header class="comment-header">
				<?= get_avatar($comment, $size = '64'); ?>
				<div>
					<p class="comment-author">
						<?= get_comment_author(); ?>
						<a class="comment-direct-link" href="<?= get_comment_link($comment->comment_ID); ?>">#</a>
						<?php comment_reply_link([
							'add_below' => $add_below,
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
						]); ?>
						<?= edit_comment_link(); ?>
					</p>
					<p class="comment-date"><?= get_comment_date() . ' ' . get_comment_time(); ?></p>
				</div>
			</header>
			<div class="comment-text">
				<?php if ($comment->comment_approved == '0') : ?>
					<p class="text-danger"><?= 'A hozzászólásod adminisztrátori elfogadásra vár.' ?></p>
				<?php endif; ?>
				<?= comment_text(); ?>
			</div>
		</div>
	<!-- No closing </li> tag, on purpose -->
<?php }

?>
