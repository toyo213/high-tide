<?php
/*	*
	* @Theme Name	:	BusiProf
	* @file         :	footer.php
	* @package      :	Busiprof
	* @author       :	Hari Maliya
	* @license      :	license.txt
	* @filesource   :	wp-content/themes/Busiprof/footer.php
*/
?>
<!-- Widget Section -->	
<div class="widget_section">
	<div class="container">
		<div class="row-fluid" id="footer_widget">		
			<?php if ( is_active_sidebar( 'footer-widget-area' ) )
					{?>
				  <div id="busiprof_area">
					   <?php dynamic_sidebar( 'footer-widget-area' ); ?>
				  </div>
			<?php }else { ?>                
			<div class="span3">
				<h2><?php _e('About Us','busi_prof'); ?></h2>
				<p><?php _e('We are a group of passionate designers and developers who really love to create awesome wordpress themes with amazing support and cooles video documentations...','busi_prof'); ?></p>
			</div>						
			<div class="span3">
				<h2><?php _e('Twitter Updates','busi_prof'); ?></h2>
				<ul><li>
						<p><?php _e('Check out this great #themeforest Theme','busi_prof'); ?> <a href="#"><?php _e('http://t.co/sYStotrd','busi_prof'); ?></a></p>
						<?php _e('2 hours ago','busi_prof'); ?>
					</li>
					<li>
						<p><?php _e('Check out this great #themeforest Theme','busi_prof'); ?> <a href="#"><?php _e('http://t.co/sYStotrd','busi_prof'); ?></a></p>
						<?php _e('2 hours ago','busi_prof'); ?>
					</li>
				</ul>
			</div>			
			<div class="span3">
				<h2><?php _e('Flickr Photos','busi_prof'); ?></h2>
				<span><a href="#"><img alt="Flickr Photos" src="<?php echo BUSI_TEMPLATE_DIR_URI; ?>/images/photo1.png"></a></span>
				<span><a href="#"><img alt="Flickr Photos" src="<?php echo BUSI_TEMPLATE_DIR_URI; ?>/images/photo1.png"></a></span>
				<span><a href="#"><img alt="Flickr Photos" src="<?php echo BUSI_TEMPLATE_DIR_URI; ?>/images/photo1.png"></a></span>
				<span><a href="#"><img alt="Flickr Photos" src="<?php echo BUSI_TEMPLATE_DIR_URI; ?>/images/photo1.png"></a></span>
				<span><a href="#"><img alt="Flickr Photos" src="<?php echo BUSI_TEMPLATE_DIR_URI; ?>/images/photo1.png"></a></span>
				<span><a href="#"><img alt="Flickr Photos" src="<?php echo BUSI_TEMPLATE_DIR_URI; ?>/images/photo1.png"></a></span>
			</div>
			
			<div class="span3">
				<h2><?php _e('Quick Contact','busi_prof'); ?></h2>
				<form>
					<input class="input-medium span9" type="text" placeholder="User Name">
					<input class="input-medium span9" type="text" placeholder="Email">
					<textarea class="span11" rows="2" placeholder="Message"></textarea>
					<a class="submit_btn" href="#"><?php _e('Submit','busi_prof'); ?></a>
				</form>
			</div>
			<?php } ?>
		
		</div>
	</div>
</div>
<!-- /Widget Section -->

<!-- /Footer Section -->
<?php $current_options=get_option('busiprof_pro_theme_options'); ?>
<div class="footer-section">
	<div class="container">
		<div class="row">
			<div class="span8">
				<p><?php if( $current_options['footer_copyright_text']!='')
					echo $current_options['footer_copyright_text']; 
					else
					 _e('All Rights Reserved by BusiProf. Designed and Developed by','busi_prof');
					 ?>	
			</div>
			<?php if($current_options['footer_social_media_enabled']=='on') { ?>
			<div class="span4">
				<div class="footer_social pull-right">
					<a class="twitter" href="<?php if( $current_options['footer_twitter_link']!='') echo $current_options['footer_twitter_link']; else echo "https://twitter.com/"; ?>">&nbsp;</a>
					<a class="facebook" href="<?php if( $current_options['footer_facebook_link']!='') echo $current_options['footer_facebook_link']; else echo "http://facebook.com/"; ?>">&nbsp;</a>
					<a class="social_new" href="<?php if( $current_options['footer_linkedin_link']!='') echo $current_options['footer_linkedin_link']; else echo "http://in.linkedin.com/"; ?>">&nbsp;</a>
				</div>	
			</div>	
			<?php } ?>
		</div>
	</div>
</div>
<?php  // use custom css
if( $current_options['busiprof_pro_custom_css']!='')
	{
		echo "<style type='text/css'>/***** Busiprof-pro custom css ******/\n".$current_options['busiprof_pro_custom_css']."</style>"; 
	}
?>
<?php wp_footer(); ?> 
<!-- /Footer Section -->
</body>
</html>