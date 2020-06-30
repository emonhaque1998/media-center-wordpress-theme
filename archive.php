<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Developer_Eman
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

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

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
