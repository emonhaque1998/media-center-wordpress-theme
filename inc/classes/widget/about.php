<?php 
	class developoer_about extends WP_Widget{
		public function __construct(){
			parent::__construct('developoer_about', 'Eman About Blog', [
				'description'	=> 'Add About Blog'
			]);
		}

		public function widget($one, $two){ 
				$title = $two['title'];
				$description = $two['description'];
			?>
			<?php echo $one['before_widget']; ?>
			<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>
			<div class="body">
			    <p><?php echo $description; ?></p>
			</div>
			<?php echo $one['after_widget']; ?>
		<?php }

		public function form($two){ 
				$title = $two['title'];
				$description = $two['description'];
			?>
			<p>
				<label for="about_title">Title</label>
				<input class="widefat" type="text" placeholder="Title" id="about_title" value="<?php echo $title; ?>" name="<?php echo $this->get_field_name('title'); ?>">
			</p>
			<p>
				<label for="about_des">Description</label>
				<textarea class="widefat" name="<?php echo $this->get_field_name('description'); ?>" id="about_des"><?php 	echo $description; ?></textarea>
			</p>
		<?php }
	}