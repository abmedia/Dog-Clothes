<?php
/*
Template Name: Form Test
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
      
					<?php if ( is_front_page() ) { ?>
						<!--<h2><?php the_title(); ?></h2>-->
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>	
                    			
	    <div id="mainContent1" class="minheight">
          <div class="formCategory">
          
          <form method="POST" action="/cgi-bin/formmail.pl">
          <input type="hidden" name="recipient" value="info@mcaryanddaughters.com">
          <input type="hidden" name="subject" value="Online Service Request">
          <input type="hidden" name="redirect" value="http://mcaryanddaughters.com/thanks">
            <div>
              <span class="bodytext">To request a service call, please fill out the form below.  Email requests are typically answered in 24-48 hours. If you have an </span>
              <span class="emergency">emergency</span><span class="bodytext">, please call the office at 404.370.0999 or 404.622.6192.</span><br/><br/>
            </div>
            <div id="rform" class="rform">
              <li><label for="name" class="required"><strong> Your Name:</strong></label></li>
              <li><input type="text" name="name" id="name" value="" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="pname" >Company Name: </label></li>
              <li><input type="text" name="pname" id="pname" value="" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="Adress">Address:</label></li>
              <li><input name="Address" type="text" id="Address" value="" size="20" /></li>
              <div id="hideBox"></div>
            </div>
            <div id="rform" class="rform">
              <li><label for="Address">Address 2:</label></li>
              <li><input name="Address2" type="text" id="Address2" value="" size="20" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="City">City:</label></li>
              <li><input name="city" type="text" id="city" value="" size="20" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="state">State:</label></li>
              <li><input name="state" type="text" id="state" value="" size="2" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="zip">Zip:</label></li>
              <li><input name="zip" type="text" id="zip" value="" size="10" /></li>
              <div id="hideBox"></div>
            </div>
            <div id="rform" class="rform">
              <li><label for="pnum" class="required"><strong>Home Number:</strong></label></li>
              <li><input name="pnum" type="text" id="pnum" value="" size="20" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="mpnum"><strong>Mobile Number:</strong></label></li>
              <li><input name="mpnum" type="text" id="mpnum" value="" size="20" /></li>
            </div>
            <!-- error handling  -->
            <div id="errrform" class="bodytexterr"></div>
            <div id="rform" class="rform">
              <li><label for="emailFrom"><span class="required"><strong>E-mail Address:</strong></span></label></li>
              <li><input type="text"  id="emailFrom" value="" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="time">Best time to call:</label></li>
              <li><input name="time" type="text" id="time" value="" size="20" /></li>
            </div>
            <div id="rform" class="rform">
              <li><label for="descritpion">Description of Problem:</label></li>
              <li><textarea name="message" cols="35" rows="8" id="message"></textarea></li>
            </div>
            <div align="center">
              <input type="submit" value="Submit Request &raquo;">
            </div>
          </form>
            
          </div>
          <div id="hide" class="clearing" align="center">
            <p class="bodytextgrey">(Required fields are in <span class="required"><strong>RED</strong></span><strong>)</strong></p></div>
          </div>
		</div>
    </td>
    <td valign="top" width="73"><div id="hp_right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/side_pipe_1.jpg" height="510" width="73"></div></td>
  </tr>
</tbody>
</table>

<?php get_footer(); ?>