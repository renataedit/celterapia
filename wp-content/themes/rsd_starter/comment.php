<div class="comments" id="comments">
	<h2 class="comments-title">Hozzászólások</h2>

	<?php if (get_comments_number() > 0) { ?>
		<ol class="comment-list">
			<?php
				wp_list_comments("callback=custom_comment_markup");
			?>
		</ol>
	<?php } else { ?>
		<p>Ehhez a cikkhez eddig nem érkezett hozzászólás.</p>
	<?php } ?>

	<div class="comment-form">
		<?php comment_form(['class_submit' => 'button']); ?>
	</div>
</div>
