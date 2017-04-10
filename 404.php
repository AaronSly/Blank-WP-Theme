<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage THEME_NAME_HERE
 * @since THEME_NAME_HERE 1.0
 */

get_header(); ?>

<div class="container clearfix">
	
	<div class="">			
			<h1>Woops! Page Not Found</h1>							
	</div>
	
	<h3>Well, we seem to have strayed off the path.<br>Try one of the options below and lets see if we can get back on track.</h3>
	
	<div>
		<ul>
			<li>Use the menu at the top of the page to select a page to explore.</li>
			<li>Click on the logo at the top of the page to get back to the home page. </li>			
			<li>If you still cant find what you are looking for contact us through the <a href="<?php echo home_url('/contact-us/');?>">Contact Us Page</a> and we'd be happy to help.</li>
		</ul>
	</div>

</div><!-- .postcontent end -->

<?php get_footer(); ?>
