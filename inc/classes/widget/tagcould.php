<?php 
	
	class developer_tagcould extends WP_Widget{
		public function __construct(){
			parent::__construct('developer_tagcould', 'Developer Tag', [
				'description'	=> 'Add Tag Cloud Widget'
			]);
		}

		public function widget($one, $two){ 
				$title = $two['title'];
			?>
			<?php echo $one['before_widget']; ?>
			<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
			<div class="body">
			    <div class="tagcloud" id="developer_tag_widget">
			        <?php wp_tag_cloud([

			        ]); ?>
			    </div><!-- /.tagcloud -->
			</div><!-- /.body -->
			<?php echo $one['after_widget']; ?>
		<?php }

		public function form($two){ 
				$title = $two['title'];
			?>
			<p>
				<label for="tag_title">Title</label>
				<input class="widefat" type="text" placeholder="Title" id="tag_title" value="<?php echo $title; ?>" name="<?php echo $this->get_field_name('title'); ?>">
			</p>
		<?php }
	}