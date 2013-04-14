<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
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
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
        
        </div>
 	  </div>
      
    </td>
    <td valign="top" width="150" style="padding-top: 50px;">
	<?php get_sidebar(); ?>
    </td>

    <td valign="top" width="73">
    <div id="hp_right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side_pipe_1.jpg" height="510" width="73"></div>
    </td>
  </tr>
</tbody>
</table>

<?php get_footer(); ?>