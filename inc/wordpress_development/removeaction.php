<?php 
	remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);
	remove_action('woocommerce_sidebar','woocommerce_get_sidebar', 10);
	remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper', 10);
	remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end', 10);
	remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
	remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
	remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);
	remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end', 10);
	remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open', 10);
	remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close', 5);
	remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail', 10);
	remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);
	remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 10);

