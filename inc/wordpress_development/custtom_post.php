<?php 
	function bannerAdd(){
		register_post_type('banner_add', array(
			'public'	=> true,
			'labels'	=> array(
				'name'	=> 'Advertisement Banner',
				'all_items'	=> 'All Banners',
				'add_new'	=> 'Add New Banner',
				'add_new_item'	=> 'Add New Banner',
				'featured_image'	=> 'Banner Image',
				'set_featured_image'	=> 'Upload New Banner',
				'remove_featured_image'	=> 'Remove Banner'
			),
			'supports'	=> array('title','thumbnail')

		));

		
	}
add_action('after_setup_theme', 'bannerAdd');

