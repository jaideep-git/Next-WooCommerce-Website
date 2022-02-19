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
 * @package NextTheme
 */

get_header();
?>  
    <main id="primary" class="site-main grid-container">
        <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'page' );
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
    <!-- <main id="primary" class="site-main">
		<div class="feature-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/feature.png'?>" alt="..">
        </div>
        <section class="grid-container">
            <article class="popular-categories">
                <div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/cat1.png'?> " alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/cat2.png'?> " alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/cat3.png'?> " alt="">
                </div>
            </article>

            <h3 class="section-heading">Our Blog</h3>
            <article class="blog-query">
                <?php
                    if ( is_front_page() ){
                        $test_args = array( 
                            'post_type' => 'post',         
                            'post_status'=> 'publish',         
                            'posts_per_page' => 3 );
                            
                        $test_query = new WP_Query($test_args); 
                        if($test_query->have_posts()){         
                            while ($test_query->have_posts()){             
                                $test_query->the_post();
                                ?> 
                                <div class="blog-post">
                                    <div class="post-img">
                                        <?php the_post_thumbnail(); ?>
                                    </div> 
                                    <h3><a class="movie-page" href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
                                <?php   
                                the_excerpt(); ?>
                                </div>               
                                <?php            
                            }               
                        } 
                    }
                    ?>
            </article>

            <article class="advertisement">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/ad.png'?> " alt="">
            </article>
        </section>
        

	</main>#main -->

<?php
get_sidebar();
get_footer();
