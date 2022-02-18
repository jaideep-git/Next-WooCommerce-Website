<?php
/**
 * Template Name: about
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NextTheme
 */

get_header();
?>

	<main id="primary" class="site-main-about grid-container">
        <h2 class="section-heading">About Us</h2>
		<section class="about-work">
            <div class="item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-img-1.png'?>" alt="">
                <h3 class="text-center">Our Vision</h3>
                <p class="text-center">
                    Lorem Ipsum has been the industry's standard 
                    dummy text ever since the 1500s, when an unknown
                    printer took  galley of type and scrambled it to make.
                </p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-img-2.png'?>" alt="">
                <h3 class="text-center">What We Do</h3>
                <p class="text-center">
                    Lorem Ipsum has been the industry's standard 
                    dummy text ever since the 1500s, when an unknown
                    printer took  galley of type and scrambled it to make.
                </p>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-img-3.png'?>" alt="">
                <h3 class="text-center">Company History</h3>
                <p class="text-center">
                    Lorem Ipsum has been the industry's standard 
                    dummy text ever since the 1500s, when an unknown
                    printer took  galley of type and scrambled it to make.
                </p>
            </div>
        </section>

        <section class="grid-x grid-margin-x about-intro">
            <div class="cell large-6">
                <h3>Lorem Ipsum is simply dummy text 
                of the printing</h3>
                <p>
                    Lorem Ipsum has been the industry's standard ummy text 
                    ever since the 1500s, when an unknown rinter took  galley of
                    type and scrambled it to make. orem Ipsum has been the 
                    industry's standard dummy text r since the 1500s, when an 
                    unknown pinter took  galley of type and crambled it to make. 
                    orem Ipsum has been the industry's standard dummy text eve
                </p>
            </div>
            <div class="cell large-6">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-pic.png'?>" alt="">
            </div>
        </section>

        <h3 class="section-heading">Our Blog</h3>
        <article class="blog-query">
            <?php
                if ( is_page_template('about-us.php') ){
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
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

