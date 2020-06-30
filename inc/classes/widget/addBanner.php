<?php 
	class developer_bannerAdd extends WP_Widget{
		public function __construct(){
			parent::__construct('developer_bannerAdd', 'Advertisement Banner', array(
				'description'	=> 'Add Advertisement Banner'
			));
		}

		public function widget($defult, $set){ ?>

			<div class="widget" style="position: relative; transition: 1s;">
			    <div class="simple-banner">
			        <?php 
			            $banner = new WP_Query([
			                'post_type' => 'banner_add',
			                'posts_per_page'    => 1
			            ]);
			            while($banner->have_posts()): $banner->the_post();
			         ?>
			        <a id="banner_imgage" href="<?php echo get_post_meta(get_the_ID(),'banner_url_post', true); ?>"><img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" data-echo="<?php echo the_post_thumbnail_url(); ?>"/></a>
			        <a href="<?php echo get_post_meta(get_the_ID(),'banner_url_post', true); ?>">
			            <div id="banner_title" style="
			                display: none;
			                position: absolute;
			                bottom: 0px;
			                width: 100%;
			                background-color: rgba(44, 62, 80,0.5);
			                z-index: 100;
			                padding: 2px 10px;
			            ">
			                <h6 style="text-align: center; color: white; font-size: 18px; font-weight: bold;"><?php the_title(); ?></h6>
			            </div>
			        </a>
			        <?php endwhile; ?>
			    </div>
			</div>

		<?php }

		public function form($set){

		}
	}