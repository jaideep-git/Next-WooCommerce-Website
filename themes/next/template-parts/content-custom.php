<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NextTheme
 */

?>

<article id="post-<?php the_ID(); ?>" class="blog-single-post cell large-3">
    <div class="blog-post-img">
        <div>
            <?php next_post_thumbnail(); ?>
        </div>
        <div>
            <?php
            if ( is_singular() ) :
                the_title( '<h4 class="entry-title">', '</h4>' );
            else :
                the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
            endif;
            if ( 'post' === get_post_type() || 'next_offer' === get_post_type()) : 
            ?>
                <div class="entry-meta blog-post-date">
                    <?php
                    next_posted_on();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
            <div class="blog-post-content">
                <?php the_excerpt(); ?>
                <button id="submit"><a class="movie-page" href="<?php the_permalink() ?>">Read More</a></button>
            </div>
        </div>
    </div>
    
    <header class="entry-header ">
    
    </header><!-- .entry-header -->
</article>
