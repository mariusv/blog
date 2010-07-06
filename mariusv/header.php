<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() || is_page() ) { ?> <?php } ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12405006-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div id="wrapper">
		<div id="main-nav" class="col span-12">
			<ul>
				<!--><?php wp_list_pages('&title_li='); ?><-->
			</ul>			
		</div>		
		
		<div id="header" class="col last span-12">
			<h1><a href=http://mariusv.com>Confessions <span class="low">of</span> a system administrator</a></h1>				
			<div align="center"><h3><a href=http://mariusv.com><span class="low">(by)</span> Marius Voila</a> </h3></div>
			<!--><h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1><-->
		</div>
<div id="wrapper">
		<div id="main-nav" class="col span-12">
			<ul>
				<!--><?php wp_list_pages('&title_li='); ?><-->
			</ul>
			</div>			
		<hr />