<section id="comments" class="inner-bottom-xs">
    <h3><?php comments_popup_link('No comments','1 Comment', '% Comments'); ?></h3>
	<?php wp_list_comments([
		'callback'	=> 'comment_replay'
	]); ?>
</section>

<section id="reply-block" class="leave-reply">
	<?php 
		
		comment_form();

	?>

</section>