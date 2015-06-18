<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php schema(); ?>>
    <?php bigblank_post_thumbnail(); ?>
    <header class="entry-header">
        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title" ' . schema('name', false, false) . '>', '</h1>');
        else :
            the_title('<h1 class="entry-title" ' . schema('name', false, false) . '><a href="' . esc_url(get_permalink()) . '" rel="bookmark" ' . schema('url', false, false) . '>', '</a></h1>');
        endif;
        ?>
        <div class="entry-meta">
            <?php
            if ('post' == get_post_type())
                bigblank_posted_on();
            if (!post_password_required() && (comments_open() || get_comments_number())) :
                ?>
                <?php comments_popup_link(__('Leave a comment', 'bigblank'), __('1 Comment', 'bigblank'), __('% Comments', 'bigblank'), "entry-comments"); ?>
                <?php
            endif;
            edit_post_link(__('Edit', 'bigblank'));
            ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    <?php if (is_search()) : ?>
        <div class="entry-summary" <?php schema('description'); ?>>
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content" <?php schema('articleBody'); ?>>
            <?php
            the_content(sprintf(__('Continue Reading %s <span class="meta-nav">&rarr;</span>', 'bigblank'), get_the_title()));
            wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'bigblank') . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
            ));
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>
    <footer class="entry-meta">
        <?php bigblank_share_post(get_permalink(), get_the_title()); ?>
        <?php if (in_array('category', get_object_taxonomies(get_post_type())) && bigblank_categorized_blog()) : ?>
            <span class="entry-categories"><?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'bigblank')); ?></span>
            <?php
        endif;
        the_tags('<span class="entry-tags">', _x(', ', 'Used between list items, there is a space after the comma.', 'bigblank'), '</span>');
        ?>

          
    </footer>
</article><!-- #post-## -->
