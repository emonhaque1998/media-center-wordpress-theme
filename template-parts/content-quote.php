<div class="post format-quote">
    <div class="date-wrapper">
        <div class="date">
            <span class="month"><?php the_time('M'); ?></span>
            <span class="day"><?php the_time('d'); ?></span>
        </div>
    </div><!-- /.date-wrapper -->
    <div class="format-wrapper">
        <a href="#"><i class="fa fa-quote-left"></i></a>
    </div><!-- /.format-wrapper -->
    <div class="post-content">
        <blockquote>
            <?php the_content(); ?>
            <footer><cite><?php the_author(); ?></cite></footer>
        </blockquote>
    </div><!-- /.post-content -->
</div><!-- /.post -->