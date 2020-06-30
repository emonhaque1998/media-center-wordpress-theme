<?php 
	class developoer_categorys extends WP_Widget{
		public function __construct(){
			parent::__construct('developoer_categorys', 'Eman Categorys', [
				'description'	=> 'Add Categorys List'
			]);
		}

		public function widget($one, $two){ 
				$title = $two['title'];
			?>
			<?php echo $one['before_widget']; ?>
			<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
				<div class="body">
				    <ul class="le-links">
				    	<?php wp_list_categories([
				    		'title_li'	=> ""
				    	]); ?>
				    </ul>
				</div>
			<?php echo $one['after_widget']; ?>
		<?php }

		public function form($two){ 
				$title = $two['title'];
			?>
			<p>
				<label for="about_title">Title</label>
				<input class="widefat" type="text" placeholder="Title" id="about_title" value="<?php echo $title; ?>" name="<?php echo $this->get_field_name('title'); ?>">
			</p>
		<?php }
	}