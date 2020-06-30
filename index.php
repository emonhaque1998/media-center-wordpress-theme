<?php get_header(); ?>

            <!-- ========================================= MAIN ========================================= -->
            <main id="blog" class="inner-bottom-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="posts sidemeta">
                                <?php 
                                    while(have_posts()) : the_post();
                                 ?>
                                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                                <?php endwhile; ?>
                                

                               

                                <ul class="woo products">
                                    <?php
                                        $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => 5,
                                            'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'product_visibility',
                                                        'field'    => 'name',
                                                        'terms'    => 'featured',
                                                    ),
                                                ),
                                            );
                                        $loop = new WP_Query( $args );
                                        if ( $loop->have_posts() ) {
                                            while ( $loop->have_posts() ) : $loop->the_post();
                                                wc_get_template_part( 'content', 'product' );
                                            endwhile;
                                        } else {
                                            echo __( 'No products found' );
                                        }
                                        wp_reset_postdata();
                                    ?>
                                </ul>
                                
        
                                
                            <hr/>

                            <ul class="pagination blog-pagination">
                                <?php 
                                the_posts_pagination([
                                    'screen_reader_text'    => ' ',
                                    'prev_text' => 'Before',
                                    'next_text' => 'After',
                                    'type'  => 'list'

                                ]);
                             ?>
                            </ul><!-- /.pagination -->
                        </div><!-- /.col -->

                        
                    </div><!-- /.row -->
                    <div class="col-md-3">
                            <?php get_sidebar(); ?>
                        </div>
                </div><!-- /.container -->
            </main><!-- /.inner-bottom-xs -->
            <!-- ========================================= MAIN : MAIN ========================================= -->

        <?php get_footer(); ?>