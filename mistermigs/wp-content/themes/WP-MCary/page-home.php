<?php
/*
Template Name: Home
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage M Cary & Daughters
 * @since M Cary & Daughters
 */

get_header(home); ?>

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
	<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="630" height="510">
      <param name="movie" value="images/Loader.swf" />
   	    <param name="quality" value="high" />
   	    <param name="wmode" value="opaque" />
   	    <param name="swfversion" value="6.0.65.0" />
   	    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
   	    <param name="expressinstall" value="http://www.mcaryanddaughters.com/Scripts/expressInstall.swf" />
   	    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
   	    <!--[if !IE]>-->
   	    <object type="application/x-shockwave-flash" data="images/Loader.swf" width="630" height="510">

   	      <!--<![endif]-->
   	      <param name="quality" value="high" />
   	      <param name="wmode" value="opaque" />
   	      <param name="swfversion" value="6.0.65.0" />
   	      <param name="expressinstall" value="http://www.mcaryanddaughters.com/Scripts/expressInstall.swf" />
   	      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
   	      <div>
   	        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>

   	        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
 	        </div>
   	      <!--[if !IE]>-->
 	      </object>
   	    <!--<![endif]-->
      </object>        
    </td>
    <td valign="top" width="73"><div id="hp_right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/right_bg.jpg" height="510" width="73"></div></td>
  </tr>
</tbody>
</table>

<?php get_footer(); ?>