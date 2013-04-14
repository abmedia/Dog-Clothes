<?php
/**
 * The template for displaying Author Archive pages.
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
	/* Queue the first post, that way we know who
	 * the author is when we try to get their name,
	 * URL, description, avatar, etc.
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

				<h1><?php printf( __( 'Author Archives: %s', 'twentyten' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>

<?php
// If a user has filled out their description, show a bio on their entries.
if ( get_the_author_meta( 'description' ) ) : ?>

							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
							<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>

<?php endif; ?>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the author archive page to output the authors posts
	 * If you want to overload this in a child theme then include a file
	 * called loop-author.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'author' );
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