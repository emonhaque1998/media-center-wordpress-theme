<?php 
	function postMeta(){
		$audio = new_cmb2_box([
			'id'	=> 'audio_iferem',
			'title'	=> 'Audio Iferem',
			'object_types'	=> 'post'
		]);

		$audio->add_field([
			'name'	=> 'Audio Ifreme code',
			'id'	=> 'audio_if',
			'type'	=> 'oembed'
		]);

		$vedio = new_cmb2_box([
			'id'	=> 'vedio_iferem',
			'title'	=> 'Vedio Iferem',
			'object_types'	=> 'post'
		]);

		$vedio->add_field([
			'name'	=> 'Vedio Ifreme code',
			'id'	=> 'vedio_if',
			'type'	=> 'oembed'
		]);
		$ulrlink = new_cmb2_box([
			'id'	=> 'link_ulr',
			'title'	=> 'Link Url',
			'object_types'	=> 'post'
		]);

		$ulrlink->add_field([
			'name'	=> 'Link Url',
			'id'	=> 'link_ul',
			'type'	=> 'text_url'
		]);

		$bannerUrl = new_cmb2_box([
			'id'	=> 'banner_url',
			'title'	=> 'Banner Link',
			'object_types'	=> 'banner_add'
		]);
		$bannerUrl->add_field([
			'name'	=> 'Banner Url',
			'id'	=> 'banner_url_post',
			'type'	=> 'text_url'
		]);
		$gellary = new_cmb2_box([
			'id'	=> 'gellary_filed',
			'title'	=> 'Gellary',
			'object_types'	=> 'post'
		]);
		$gellary->add_field([
			'name'	=> 'Add Gellary',
			'id'	=> 'gellary_addd',
			'type'	=> 'file_list'
		]);

		$gellary = new_cmb2_box([
			'id'	=> 'brand_id',
			'title'	=> 'Brand',
			'object_types'	=> 'product'
		]);
		$gellary->add_field([
			'name'	=> 'Add Brand Name',
			'id'	=> 'brand_new_name',
			'type'	=> 'text'
		]);

	}

	add_action('cmb2_init', 'postMeta');