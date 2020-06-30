<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Developer_Eman
 */

/*
    Template name: Left Sidebar
*/

get_header();
?>

<!-- ========================================= MAIN ========================================= -->

<main id="blog" class="inner-bottom-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-9">
                <div class="posts sidemeta">
                    <?php 
                        while(have_posts()) : the_post();
                     ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    

                   

                    

                    

                    
                <hr/>
            </div><!-- /.col -->

            
        </div><!-- /.row -->
    </div><!-- /.container -->
</main><!-- /.inner-bottom-xs -->
<!-- ========================================= MAIN : MAIN ========================================= -->
	
<?php get_footer(); ?>
