<?php 
	class developer_recentPost extends WP_Widget{
		public function __construct(){
			parent::__construct('developer_recentPost', 'Developer Resent post',[
				'description'	=> 'Add recent post widget'
			]);
		}

		public function widget($one, $two){ 
				$title 	= $two['recentTitle'];
			?>
			<?php echo $one['before_widget']; ?>
			<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
			<div class="body">
			    <ul class="recent-post-list">
			        <?php 
			            $loop = new WP_Query([
			                'post_type' => 'post',
			                'posts_per_page'    => 5
			            ]);
			            while($loop->have_posts()) : $loop->the_post();
			         ?>
			        <li class="sidebar-recent-post-item">
			            <div class="media">
			                <a href="#" class="thumb-holder pull-left">
			                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" data-echo="<?php the_post_thumbnail_url(); ?>" />
			                </a>
			                <div class="media-body">
			                    <h5><a href="#"><?php the_title(); ?></a></h5>
			                    <div class="posted-date"><?php the_time('M d, Y'); ?></div>
			                </div>
			            </div>
			        </li><!-- /.sidebar-recent-post-item -->
			        <?php endwhile; ?>

			    </ul><!-- /.recent-post-list -->
			</div><!-- /.body -->
			<?php echo $one['after_widget']; ?>
		<?php }

		public function form($two){ 
				$title 	= $two['recentTitle'];
			?>
			<p>
				<label for="recent_title">Title</label>
				<input class="widefat" type="text" id="recent_title" placeholder="Title" name="<?php echo $this->get_field_name('recentTitle'); ?>" value="<?php echo $title; ?>">
			</p>
		<?php }
	}