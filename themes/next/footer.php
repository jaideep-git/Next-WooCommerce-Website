<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NextTheme
 */
?>

<footer id="colophon" class="site-footer">  
    <div class="grid-container grid-x ">

        <!--------- WP_Query Content --------->
        <h3 class="recent-posts">Recent Posts</h3>

        <div class="grid-x grid-margin-x wp-query">    
            <!-- Custom WP_Query -->
            <?php
                $test_args = array( 
                            'post_type' => 'post',         
                            'post_status'=> 'publish',         
                            'posts_per_page' => 3 ); // No of posts to be displayed
                            
                    $test_query = new WP_Query($test_args); 
                    
                    if($test_query->have_posts()){         
                            while ($test_query->have_posts()){             
                                    $test_query->the_post();  
                        ?>

                        <div class="cell large-3">
                            <?php
                                /**
                                 * Post's featured image 
                                 *
                                 * $size = ['width','height']  (Thumbnail Size) 
                                 */
                                the_post_thumbnail( $size = ["300px","500px"], $attr = '' ); 
                            ?>
                            <!-- Post's title with it's permalink -->
                            <h5 class="query-heading"><a class="movie-title-home" href="<?php the_permalink() ?>"><?php the_title()?></a></h5>
                            <?php           
                                the_excerpt(); // Post's excerpt
                            ?>
                        </div>
                        <?php
                        }               
                    } 
            ?>  
        </div>

        <!--------- Footer Content --------->

        <!-- Footer Column 1 -->
        <div class="cell large-3 coloumn1 small-6">
            <?php the_custom_logo(); ?>
            <?php dynamic_sidebar( 'footer Widget 1' );?>
            <?php dynamic_sidebar( 'social-media-links' );?>
        </div>
            
        <!-- Footer Column 2 -->
        <div class="cell large-3 coloumn small-6">
            <?php dynamic_sidebar( 'footer Widget 2' );?>
        </div>
        
        <!-- Footer Column 3 -->
        <div class="cell large-3 coloumn small-6">
            <?php dynamic_sidebar( 'footer Widget 3' );?>
        </div>
            
        <!-- Footer Column 4 -->
        <div class="cell large-3 coloumn small-6">
            <?php dynamic_sidebar( 'footer Widget 4' );?>
        </div>
    </div>

        <!-- Copyright Info  -->
    <p class="text-center footer-copyright"> &copy; Created by a <a href="http://jaideep.ca" target="_blank">Jaideep.</a></p>
</footer>
<?php wp_footer();?>
</body>
</html>
