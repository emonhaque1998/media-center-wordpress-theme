<?php 

	add_action('woocommerce_before_single_product_summary', function(){ ?>
		<div id="single-product">
	<?php }, 9);

	add_action('woocommerce_single_product_summary', function(){ ?>
		</div>
	<?php }, 61);

	add_action('woocommerce_before_single_product_summary', function(){ ?>
		<div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
		    <div class="product-item-holder size-big single-product-gallery small-gallery">
				
		        <div id="owl-single-product" class="owl-carousel">

		        	<?php 
		        		global $product;
		        		$images = $product->get_gallery_image_ids();
		        		$thumbnails = $product->get_image_id();

		        		$singleThumbnails = wp_get_attachment_image_src($thumbnails, 'full');  
		        		$singleThumbnails = $singleThumbnails[0];  		
		        	 ?>

					<?php if($thumbnails){ ?>
			            <div class="single-product-gallery-item" id="slide1">
			                <a data-rel="prettyphoto" href="">
			                    <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" data-echo="<?php echo $singleThumbnails; ?>" />
			                </a>
			            </div><!-- /.single-product-gallery-item -->
		            <?php } ?>
					<?php foreach ($images as $value) { ?>
						<div class="single-product-gallery-item" id="slide2">
						    <a data-rel="prettyphoto" href="">
						        <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" data-echo="<?php echo wp_get_attachment_url($value, 'full'); ?>" />
						    </a>
						</div><!-- /.single-product-gallery-item -->
					<?php } ?>
		        </div><!-- /.single-product-slider -->
				
				
		        <div class="single-product-gallery-thumbs gallery-thumbs">

		            <div id="owl-single-product-thumbnails" class="owl-carousel">
		            	<?php 
		            		global $product;
		            		$images = $product->get_gallery_image_ids();
		            		$thumbnails = $product->get_image_id();

		            		$singleThumbnails = wp_get_attachment_image_src($thumbnails, 'full');
		            		$singleThumbnails = $singleThumbnails[0];
		            	 ?>
						<?php if($thumbnails){ ?>
			            	<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
			            	    <img width="67" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" data-echo="<?php echo $singleThumbnails; ?>" />
			            	</a>
			            <?php } ?>
			            <?php $count = 1; ?>
		                <?php foreach ($images as $value) { ?>
		                	<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="<?php echo $count; ?>" href="#slide2">
		                	    <img width="67" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" data-echo="<?php echo wp_get_attachment_url($value, 'full'); ?>" />
		                	</a>
		                	<?php $count = $count + 1; ?>
		                <?php } ?>
		            </div><!-- /#owl-single-product-thumbnails -->

		            <div class="nav-holder left hidden-xs">
		                <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
		            </div><!-- /.nav-holder -->

		            <div class="nav-holder right hidden-xs">
		                <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
		            </div><!-- /.nav-holder -->

		        </div><!-- /.gallery-thumbs -->

		    </div><!-- /.single-product-gallery -->
		</div><!-- /.gallery-holder -->
		
	<?php }, 20);



	add_action('woocommerce_single_product_summary', function(){?>
		<div class="no-margin col-xs-12 col-sm-7 body-holder">
		    <div class="body">
	<?php }, 3);

	add_action('woocommerce_single_product_summary', function(){?>
		</div>
			</div>
	<?php }, 62);

	add_action('woocommerce_single_product_summary', function(){
			global $post;
			global $product;
			$average      = $product->get_average_rating();
			$review_count = $product->get_review_count();
		?>
		<div class="star-holder inline"><div class="star" data-score="<?php echo floor($average); ?>"></div></div>
		<div class="availability"><label>Reviews: </label><span class="available"> (<?php echo $review_count; ?>)</span></div>
		<div class="title"><a href=""><?php the_title(); ?></a></div>
		<div class="brand"><?php echo get_post_meta(get_the_ID(), 'brand_new_name', true ); ?></div>
		<div class="social-row">
		    <span class="st_facebook_hcount"></span>
		    <span class="st_twitter_hcount"></span>
		    <span class="st_pinterest_hcount"></span>
		</div>

		<div class="buttons-holder">
		    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
		    <a class="btn-add-to-compare" href="#">add to compare list</a>
		</div>

		<div class="excerpt">
		    <?php echo $post->post_excerpt; ?>
		</div>
	<?php }, 5);


	add_action('woocommerce_single_product_summary', function(){ 
			global $product;
		?>
		<?php if($product->get_sale_price()){ ?>
		    <div class="prices">
    		    <div class="price-current">৳<?php echo $product->get_sale_price(); ?></div>
    		    <div class="price-prev">৳<?php echo $product->get_regular_price(); ?></div>
    		</div>
		<?php }else{ ?>
		    <div class="prices">
    		    <div class="price-current"></div>
    		    <div class="price-prev">৳<?php echo $product->get_regular_price(); ?></div>
    		</div>
		<?php } ?>
	<?php });