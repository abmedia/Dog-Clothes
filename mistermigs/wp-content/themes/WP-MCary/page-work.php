<?php
/*
Template Name: Work
*/
?>

<?php
/**
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
    <td valign="top" width="630">
      <div id="inside_contentbox">
        <div id="internalnav">
          <?php wp_nav_menu( array('menu' => 'Work Navigation' )); ?>
        </div>
	    <div id="mainContent1" class="minheight" style="display: block;">
        
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<!--<h2><?php the_title(); ?></h2>-->
					<?php } else { ?>	
						<h1>Our Work: <?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>

<?php endwhile; ?>
        <p class="clear" />
        </div>
 	  </div>
      
    </td>
    <td valign="top" width="73"><div id="hp_right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side_pipe_1.jpg" height="510" width="73"></div></td>
  </tr>
</tbody>
</table>

<?php get_footer(); ?>