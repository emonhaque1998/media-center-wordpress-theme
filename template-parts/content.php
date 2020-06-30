<div class="post format-image">
    <div class="date-wrapper">
        <div class="date">
            <span class="month"><?php the_time('M'); ?></span>
            <span class="day"><?php the_time('d'); ?></span>
        </div>
    </div><!-- /.date-wrapper -->
    <div class="format-wrapper">
        <a href="#"><i class="fa fa-image"></i></a>
    </div><!-- /.format-wrapper -->
    <div class="post-content">

        <div class="post-media">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <ul class="meta">
            <li>Posted By : <?php the_author(); ?></li>
            <li style="list-style: none; margin-left: 20px"><?php the_category(); ?></li>
            <li><a href="#"><?php comments_popup_link('No Comments', '1 Comments', '% Commnets'); ?></a></li>
        </ul><!-- /.meta -->
        <p><?php echo wp_trim_words(get_the_content(), 50, '.....' ); ?></p>
        <a href="<?php the_permalink(); ?>" class="le-button huge">Read More</a>
    </div><!-- /.post-content -->
</div><!-- /.post -->