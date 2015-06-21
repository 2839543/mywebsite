	</div>
	<div class="banner">
		<p><strong><?php bloginfo("name"); ?></strong> | <?php bloginfo("description"); ?></p>
	</div>

	<div class="footer">
		<?php wp_nav_menu( array('fallback_cb' => 'green_one_page_menu_flat', 'container' => false, 'menu' => 'secondary', 'depth' => '1', 'theme_location' => 'secondary', 'link_before' => '', 'link_after' => '') ); ?>
		<p><span><?php _e('Engine:', 'green_one'); ?> <a href="http://wordpress.org/">WordPress</a> <?php _e('Design:', 'green_one'); ?> <a href="http://kwatery-prywatne.pl/">Kwatery Prywatne</a></span></p>
		<?php wp_footer(); ?>
<script src="http://s23.cnzz.com/z_stat.php?id=1252926173&web_id=1252926173" language="JavaScript"></script>   
	</div>

</div> 
</body>
</html>