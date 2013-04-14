<?php
/**
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage M Cary & Daughters
 * @since M Cary & Daughters
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>


</head>

<body <?php body_class(); ?> onload="MM_preload<?php bloginfo('stylesheet_directory'); ?>/images('<?php bloginfo('stylesheet_directory'); ?>/images/soical_twiiter_hi.jpg','<?php bloginfo('stylesheet_directory'); ?>/images/soical_facebook_hi.jpg')">

<div id="wrapper">

<!--Top -->

<div id="topbanner"> 
  <div id="leftcontent">
  <br><br><br><br>

  "The Old House Specialists" | 404.370.0999 &amp; 404.622.6192
  </div>
  <div id="rightcontent">"More than just Plumbers"</div>
  <div id="social"> <a href="http://www.twitter.com/mcarydaughters" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','<?php bloginfo('stylesheet_directory'); ?>/images/soical_twiiter_hi.jpg',1)" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_twitter.jpg" alt="Follow us on Twitter" name="Image3" id="Image3" border="0"></a><a href="http://www.facebook.com/pages/Decatur-GA/M-Cary-Daughters-Plumbing-Contractors-Inc/154731323060?ref=search&amp;sid=100000185461933.273680697..1" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','<?php bloginfo('stylesheet_directory'); ?>/images/soical_facebook_hi.jpg',1)" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_facebook.jpg" alt="Friend us on Facebook" name="Image4" id="Image4" border="0" height="53" width="119"></a></div>
</div>