<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage M Cary & Daughters
 * @since M Cary & Daughters
 */
?>

<!--Bottom -->
  <div id="footer">
          <?php wp_nav_menu( array('menu' => 'Footer Navigation' )); ?>
  </div>
</div>

<div id="copyright">&copy;2011 M. Cary &amp; Daughters PlumbingAll Rights Reserved. | Designed by <a href="http://www.thdesign.com/" target="_blank">TH Design</a></div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="about_files/ga.js" type="text/javascript"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2777522-15");
pageTracker._trackPageview();
} catch(err) {}</script>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>