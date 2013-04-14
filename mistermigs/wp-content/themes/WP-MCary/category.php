<?php
/**
 * The template for displaying Category Archive pages.
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
        
				<h1><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
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