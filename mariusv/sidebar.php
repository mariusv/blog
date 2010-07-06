<div id="sidebar" class="col last span-4">
	<div class="section">
		<h4 class="ver small">About</h4>
		<p>This is the personal blog of Marius Voila. This site is powered by <a title="WordPress" href="http://wordpress.org/" target="_blank">WordPress</a>. Built on <a title="freeBSD" href="http://freebsd.org/" target="_blank">freeBSD</a> 8.0 with <a title="nginx" href="http://wiki.nginx.org" target="_blank">nginx</a> 0.7.62, <a title="Varnish" href="http://varnish.projects.linpro.no/" target="_blank">Varnish</a> 2.0.3, <a title="MySQL" href="http://www.mysql.com/" target="_blank">MySQL</a> 5.0.77, <a title="PHP-FPM" href="http://php-fpm.org/" target="_blank">PHP-FPM</a> 5.3.1, and <a title="Memcached" href="http://www.danga.com/memcached/" target="_blank">Memcached</a> 2.2.5.	</p>
	</div>
	
	<div class="section">
		<h4 class="ver small">Recently <span class="low">on</span> Twitter</h4>
		<div id="twitter_div">
			<ul id="twitter_update_list">
				<li></li>
			</ul>
		</div>
	</div>
		
		<!-- Uncomment if you want to display the tag cloud in the homepage -->
	
	<!-- <div class="section">
		<h4 class="ver small">Tags</h4>
		<?php wp_tag_cloud(); ?>
	</div> -->
	
	<!-- Widgetized sidebar: Since the theme is simple, this is not fully
		 error tested and could not look as good as it should be, therefore
		 you might need to style the CSS file! For BETTER results:
		
		 1) Don't use widgets. Hard code each section as shown below.
		 2) Copy and paste the HTML for a sample section (lines 54 to 61).
		 3) Replace the section title (HTML element H4) with your own.
		 4) Replace the section description (HTML element P) with your own.
		 5) For a better and consistent look, ALWAYS use a title
		 and description for each section.
	-->
	<div class="section">
		<h4 class="ver small">Feed <span class="low">by</span> Feedburner</h4>
		</div>
		<form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=mariusv', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="mariusv" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /></form>
		<li></li>
	<ul class="widgetized-sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar() ) : ?>
	
			

			<div class="section">
				<h4 class="ver small">Friends</h4>
				
				<ul class="nav">
					<!--><?php wp_list_bookmarks('title_li=&categorize=0'); ?><-->
					<p><a href="http://www.mariusvoila.com" target="_new">(my)CV</a></p>
					<p><a href="http://github.com/mariusv" target="_new">(my)Github </a></p>
					<p><a href="http://www.tomitzel.com" target="_new">Tomitzel</a></p>
					<p><a href="http://www.rentsysadmin.com" target="_new">(rent)sysadmin</a></p>
					<p><a href="http://stas.nerd.ro" target="_new">Stas Sușcov</a></p>
					</ul>
			</div>
			<div class="section"><center><a href="http://camp.softwareliber.ro" target="_new"><img src="/wordpress/wp-content/themes/modern-clix/images/wcsf2.png"></a></center></div>
			<div class="section">
				<h4 class="ver small">Categories</h4>
				<p>Dig in the archives.</p>

				<ul class="nav">
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</div>
	<?php endif; ?>
	</ul>
</div>

<hr />

