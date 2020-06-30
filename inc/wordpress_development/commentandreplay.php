<?php 
add_filter('comment_form_default_fields', function($data){
	$data['url']	= '';
	$data['author']	= '<div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>Full Name*</label>
                            <input class="le-input" name="author" id="author">
                        </div>';

    $data['email']	= '<div class="col-xs-12 col-sm-6">
		                        <label>email*</label>
		                        <input class="le-input" name="email" id="email">
		                    </div>
		                </div>';
    $data['message_box'] = '<div class="row field-row">
                                    <div class="col-xs-12">
                                        <label>Message Box</label>
                                        <textarea rows="10" id="inputComment" class="form-control le-input" name="comment" id="comment"></textarea>
                                    </div>
                                </div>';
    $data['cookies'] = '';
	return $data;
});


add_filter('comment_form_defaults', function($data){
	$data['submit_button'] = '<button class="le-button big post-comment-button" type="submit">Post comment</button>';
	if(is_user_logged_in()){
		$data['comment_field'] = '<div class="row field-row">
                                    <div class="col-xs-12">
                                        <label>Message Box</label>
                                        <textarea rows="10" id="inputComment" class="form-control le-input" name="comment" id="comment"></textarea>
                                    </div>
                                </div>';
	}else{
		$data['comment_field'] = '';	
	}
	

	return $data;
});



function comment_replay($one, $two, $three){ ?>
	<div class="comment-item">
	    <div class="row no-margin">
	        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
	            <div class="avatar">
	            	<?php if(get_avatar($one) == ''){ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-avatar.jpg" alt="">
	            	<?php }else{ ?>
	            		<?php echo get_avatar($one); ?>
	            	<?php } ?>
	            </div>
	        </div>
	        <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
	            <div class="comment-body">
	                <div class="meta-info">
	                    <header class="row no-margin">
	                        <div class="pull-left">
	                            <h4 class="author"><a href="#"><?php comment_author(); ?></a></h4>
	                            <span class="date">- <?php comment_date('M d, Y'); ?> - <?php comment_time('g:i A'); ?></span>
	                            <span class="likes"><a href="#"><span class="likes-count">22</span><i class="icon fa fa-thumbs-up"></i></a></span>
	                            <span class="dislikes"><a href="#"><i class="icon fa fa-thumbs-down"></i></a></span>
	                        </div>
	                        <div class="pull-right">
	                            <?php comment_reply_link(array_merge($two, [
	                            	'depth'	=> $three,
	                            	'max_depth'	=> $two['max_depth'],
	                            	'class'	=> 'comment-reply'
	                            ])); ?>
	                        </div>
	                    </header>
	                </div>
	                <p class="comment-content"><?php comment_text(); ?></p>
	            </div>
	        </div>
	    </div>
	</div>
<?php }