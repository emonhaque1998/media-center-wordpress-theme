<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Developer_Eman
 */

get_header();
?>


            <section id="blog-single">
                <div class="container">
                    <!-- ========================================= CONTENT ========================================= -->
                    <div class="posts col-md-9">
                        <div class="post-entry">
                            <div class="clearfix">
                                <!-- ========================================== SECTION – HERO ========================================= -->
                                <div id="hero">
                                    <?php 
                                    	if(get_post_meta(get_the_ID(),'gellary_addd', true)){ ?>
                                		    <div id="owl-main" class="owl-carousel owl-carousel-blog owl-inner-nav owl-ui-sm">
                                		    	<?php 
                                				$files = get_post_meta( get_the_ID(), 'gellary_addd', true );
                                				foreach ( (array) $files as $attachment_id => $attachment_url ) { ?>

                                						
                                						<div class="item">
                                						    <?php echo wp_get_attachment_image( $attachment_id, 'large'); ?>
                                						</div><!-- /.item -->
                                					
                                					<?php }
                                		    	 ?>
                                		    </div><!-- /.owl-carousel -->
                                    	<?php }else if(get_post_meta(get_the_ID(),'vedio_if', true)){ ?>
                                                <div id="owl-main" class="owl-carousel owl-carousel-blog owl-inner-nav owl-ui-sm">
                                                <div class="post-media">
                                                   <?php echo wp_oembed_get(get_post_meta(get_the_ID(), 'vedio_if', true)); ?>
                                               </div>
                                            </div><!-- /.owl-carousel -->
                                        <?php }else if(get_post_meta(get_the_ID(),'audio_if', true)){ ?>
                                            <div class="post-media">
                                                <?php echo wp_oembed_get(get_post_meta(get_the_ID(), 'audio_if', true)); ?>
                                            </div>
                                        <?php }else{ ?>
                                            <div id="owl-main" class="owl-carousel owl-carousel-blog owl-inner-nav owl-ui-sm">
                                                <div class="item">
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div><!-- /.item -->
                                            </div><!-- /.owl-carousel -->
                                        <?php }
                                     ?>
                                </div>
                                <!-- ========================================= SECTION – HERO : END ========================================= -->
                            </div><!-- /.clearfix -->

                            <?php while(have_posts()) : the_post(); ?>
                            <div class="post-content">
                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <ul class="meta">
                                    <li>Posted By : <?php the_author(); ?></li>
                                    <li><?php the_time('M d, Y'); ?></li>
                                    <li><a href="#"><?php the_category(); ?></a></li>
                                    <li><a href="#"><?php comments_popup_link('No Comments','1 Comment', '% Comments'); ?></a></li>
                                </ul><!-- /.meta -->
                                <?php the_content(); ?>
                            </div><!-- /.post-content -->
                        <?php endwhile; ?>
                        </div><!-- /.post-entry -->

                        <div class="meta-row">
                            <div class="inline">
                                <span style="font-weight: 700 !important;"><?php the_tags(); ?>,</span>
                            </div>
                        </div><!-- /.meta-row -->

                        <div class="blog-post-author">
                            <div class="media">
                                <a href="#" class="pull-left" id="author_imgaes"><?php echo get_avatar(get_the_author_id(), 100);  ?></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#"><?php the_author(); ?></a></h4>
                                   	<p><?php echo get_the_author_meta('user_description', get_the_author_id()); ?></p>
                                </div>
                            </div>
                        </div><!-- /.blog-post-author -->

                        
                            
                            

                        
<?php comments_template(); ?>

                    </div><!-- /.posts -->

                    <!-- ========================================= CONTENT :END ========================================= -->

                    <!-- ========================================= SIDEBAR ========================================= -->
                    <div class="col-md-3">
                        <?php get_sidebar(); ?>
                    </div><!-- /.col -->
                    <!-- ========================================= SIDEBAR : END ========================================= -->

                    <!-- ========================================= CONTENT ========================================= -->
                </div>
            </section>
	
<?php get_footer(); ?>
