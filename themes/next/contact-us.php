<?php
/**
 * Template Name: contact
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NextTheme
 */

get_header();
?>

	<main id="primary" class="site-main-about grid-container">
        <h2 class="section-heading">Contact Us</h2>
        
        <section class="grid-x grid-margin-x about-intro">
            <div class="cell large-6">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="559" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Toronto&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:559px;}</style><a href="https://www.embedgooglemap.net">how to add a google map to wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:559px;}</style></div></div>
            </div>
            <div class="cell large-6">
                <h4>Leave us a message</h4> 
                <label for="name">Name</label>
                <input type="text" name="name" >

                <label for="email">Email</label>
                <input type="text" name="email" >

                <label for="message">Message:</label>
				<textarea id="text-area-input" name="message" rows="10" cols="50"></textarea>
                
                <input type="submit" value="Send Message">
            </div>
        </section>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

