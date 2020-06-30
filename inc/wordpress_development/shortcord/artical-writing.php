<?php
	
	function about_us_shortcord($one, $two){ 
			$attr = shortcode_atts([
				'title'	=> '',
				'paragraphp'	=> '',
				'title2'	=> '',
				'paragraphp2'	=> '',
				'images'	=> null,
				'fist_member_name'	=> '',
				'first_member_proffe'	=> '',
				'second_member_name'	=> '',
				'second_member_proffe'	=> ''
			], $one);
			 $image_ids = explode(',',$attr['images']);
			$imageSrc = wp_get_attachment_image_src($attr['images'], 'thumbnails');
			ob_start();
			
		?>

		    <div class="row">
		        <div class="col-xs-12 col-md-8 col-lg-8 col-sm-6">
		            <section id="who-we-are" class="section m-t-0">
		                <h2><?php echo $attr['title']; ?></h2>
		                <?php echo $attr['paragraphp']; ?>
		            </section><!-- /#who-we-are -->

		            <section id="our-goal-and-idea" class="section">
		                <h2><?php echo $attr['title2']; ?></h2>
		                <p><?php echo $attr['paragraphp2']; ?></p>
		            </section><!-- /#our-goal-and-idea -->

		        </div><!-- /.col -->
		        <div class="col-xs-12 col-md-4 col-lg-4 col-sm-6">
		            <section id="our-team">
		                <h2 class="sr-only">Our team</h2>
		                <ul class="team-members list-unstyled">

		                    <li class="team-member">
		                    	<?php 
		                    		$fist;
		                    		$second;
		                    		
		                    			$image = wp_get_attachment_image_src( $image_ids[0], 'full' );
		                    			$fist = $image[0];                   				                    		
		                    	 ?>
		                        <img src="<?php echo $fist; ?>" alt="" class="profile-pic img-responsive" style="width: 100%; height: 230px; object-fit: cover;">
		                        <div class="profile">
		                            <h3><?php echo $attr['fist_member_name']; ?> <small class="designation"><?php echo $attr['first_member_proffe']; ?></small></h3>
		                            <ul class="social list-unstyled">
		                                <li>
		                                    <a href="http://facebook.com/">
		                                        <span class="fa-stack fa-lg">
		                                          <i class="fa fa-circle fa-stack-2x"></i>
		                                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		                                        </span>
		                                    </a>
		                                </li>
		                                <li>
		                                    <a href="http://twitter.com/">
		                                        <span class="fa-stack fa-lg">
		                                          <i class="fa fa-circle fa-stack-2x"></i>
		                                          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		                                        </span>
		                                    </a>
		                                </li>
		                                <li>
		                                    <a href="http://linkedin.com/">
		                                        <span class="fa-stack fa-lg">
		                                          <i class="fa fa-circle fa-stack-2x"></i>
		                                          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
		                                        </span>
		                                    </a>
		                                </li>
		                            </ul>
		                        </div><!-- /.profile -->
		                    </li><!-- /.team-member -->

		                    <li class="team-member">
		                    	<?php 
		                    		$second;
		                    		
		                    			$image = wp_get_attachment_image_src( $image_ids[1], 'full' );
		                    			$second = $image[0];                   				                    		
		                    	 ?>
		                        <img src="<?php echo $second; ?>" alt="" class="profile-pic img-responsive" style="width: 100%; height: 230px; object-fit: cover;">
		                        <div class="profile">
		                            <h3><?php echo $attr['second_member_name']; ?> <small class="designation"><?php echo $attr['second_member_proffe']; ?></small></h3>
		                            <ul class="social list-unstyled">
		                                <li>
		                                    <a href="http://facebook.com/">
		                                        <span class="fa-stack fa-lg">
		                                          <i class="fa fa-circle fa-stack-2x"></i>
		                                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		                                        </span>
		                                    </a>
		                                </li>
		                                <li>
		                                    <a href="http://twitter.com/">
		                                        <span class="fa-stack fa-lg">
		                                          <i class="fa fa-circle fa-stack-2x"></i>
		                                          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		                                        </span>
		                                    </a>
		                                </li>
		                                <li>
		                                    <a href="http://linkedin.com/">
		                                        <span class="fa-stack fa-lg">
		                                          <i class="fa fa-circle fa-stack-2x"></i>
		                                          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
		                                        </span>
		                                    </a>
		                                </li>
		                            </ul>
		                        </div><!-- /.profile -->
		                    </li><!-- /.team-member -->

		                </ul><!-- /.team-members -->
		            </section><!-- #our-team -->

		        </div><!-- /.col -->
		    </div><!-- /.row -->
		
	<?php 
		return ob_get_clean();
	}
	add_shortcode('about_us_shortcord_id', 'about_us_shortcord');
	
	add_action('vc_before_init', 'vc_map_for_menu');
	function vc_map_for_menu(){
		vc_map([
	      	'name'	=> 'About Us',
	      	'base'	=> 'about_us_shortcord_id',
	      	'category'	=> 'About Us Page',
	      	'icon'	=> get_template_directory_uri(). '/assets/images/icon/about_us.png',
	      	'params'	=> [
	      		[
	      			'param_name'	=> 'title',
	      			'type'	=> 'textfield',
	      			'heading'	=> 'Fist Artical Title'
	      		],
	      		[
	      			'param_name'	=> 'paragraphp',
	      			'type'	=> 'textarea_html',
	      			'heading'	=> "Fist Artical Pragraph"
	      		],
	      		[
	      			'param_name'	=> 'title2',
	      			'type'	=> 'textfield',
	      			'heading'	=> 'Second Artical Title'
	      		],
	      		[
	      			'param_name'	=> 'paragraphp2',
	      			'type'	=> 'textarea',
	      			'heading'	=> "Second Artical Pragraph"
	      		],
	      		[
	      			'param_name'  => 'images',
  			        'type'  => 'attach_images',
  			        'heading' => 'Select your Fist Client'
	      		],
	      		[
	      			'param_name'  => 'fist_member_name',
  			        'type'  => 'textfield',
  			        'heading' => 'Fist Member Name'
	      		],
	      		[
	      			'param_name'  => 'first_member_proffe',
  			        'type'  => 'textfield',
  			        'heading' => 'Fist Member Proffesion'
	      		],
	      		[
	      			'param_name'  => 'second_member_name',
  			        'type'  => 'textfield',
  			        'heading' => 'Second Member Name'
	      		],
	      		[
	      			'param_name'  => 'second_member_proffe',
  			        'type'  => 'textfield',
  			        'heading' => 'Second Member Proffesion'
	      		]
	      		
	      		
	      	]
		]);
	}


