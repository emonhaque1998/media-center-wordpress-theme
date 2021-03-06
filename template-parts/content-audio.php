<div class="post format-audio">
    <div class="date-wrapper">
        <div class="date">
            <span class="month"><?php the_time('M'); ?></span>
            <span class="day"><?php the_time('d'); ?></span>
        </div>
    </div><!-- /.date-wrapper -->
    <div class="format-wrapper">
        <a href="#"><i class="fa fa-music"></i></a>
    </div><!-- /.format-wrapper -->
    <div class="post-content">
        <div class="post-media">
            <?php echo wp_oembed_get(get_post_meta(get_the_ID(), 'audio_if', true)); ?>
        </div>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <ul class="meta">
            <li>Posted By : <?php the_author(); ?></li>
            <li style="list-style: none; margin-left: 20px"><?php the_category(); ?></li>
            <li><a href="<?php get_comment_link(); ?>"><?php comments_popup_link('No Comments', '1 Comments', '% Commnets'); ?></a></li>
        </ul><!-- /.meta -->
        <p><?php echo wp_trim_words(get_the_content(), 50, '.....' ); ?></p>
        <a href="<?php the_permalink(); ?>" class="le-button huge">Read More</a>
    </div><!-- /.post-content -->
</div><!-- /.post -->

