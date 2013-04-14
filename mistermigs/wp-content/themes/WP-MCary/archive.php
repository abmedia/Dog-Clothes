<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage M Cary & Daughters
 * @since M Cary & Daughters
 */

get_header(); ?>

<!--Middle -->
<table border="0" cellpadding="0" cellspacing="0" width="1000">
  <tbody><tr>
    <td valign="top" width="297">
    <div id="hp_navigation">
	
      <div id="access" role="navigation">
          <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      </div><!-- #access -->
         
    </div>
    </td>
    <td valign="top" width="480">
      <div id="inside_contentbox">
	    <div id="mainContent1" class="minheight">
        
<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1>
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', 'twentyten' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', 'twentyten' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archives.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>
        
        </div>
 	  </div>
      
    </td>
    <td valign="top" width="150" style="padding-top: 50px;">
	<?php get_sidebar(); ?>
    </td>
    <td valign="top" width="73"><div id="hp_right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side_pipe_1.jpg" height="510" width="73"></div></td>
  </tr>
</tbody>
</table>

<?php get_footer(); ?>