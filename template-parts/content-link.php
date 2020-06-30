
    <div class="post format-link">
        <div class="date-wrapper">
            <div class="date">
                <span class="month"><?php the_time('M'); ?></span>
            <span class="day"><?php the_time('d'); ?></span>
            </div>
        </div><!-- /.date-wrapper -->
        <div class="format-wrapper">
            <a href="<?php echo get_post_meta(get_the_ID(), 'link_ul', true); ?>"><i class="fa fa-link"></i></a>
        </div><!-- /.format-wrapper -->
        <div class="post-content">
            <h2 class="post-title">
                <a href="<?php echo get_post_meta(get_the_ID(), 'link_ul', true); ?>" target="_blank"><?php the_title(); ?></a>
            </h2>
            <a href="<?php echo get_post_meta(get_the_ID(), 'link_ul', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'link_ul', true); ?></a>
        </div><!-- /.post-content -->
    </div><!-- /.post -->
