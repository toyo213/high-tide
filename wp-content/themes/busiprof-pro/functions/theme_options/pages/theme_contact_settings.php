<?php$current_options = get_option( 'busiprof_pro_theme_options' );if(isset($_POST['busiprof_settings_save_4'])){			if($_POST['busiprof_settings_save_4'] == 1) 	{		if ( empty($_POST) || !wp_verify_nonce($_POST['busiprof_gernalsetting_nonce_customization'],'busiprof_customization_nonce_gernalsetting') )		{			print 'Sorry, your nonce did not verify.';			exit;		}		else  		{			$current_options['contact_address_1']=sanitize_text_field($_POST['contact_address_1']);			$current_options['contact_address_2']=sanitize_text_field($_POST['contact_address_2']);			$current_options['contact_number']=sanitize_text_field($_POST['contact_number']);			$current_options['contact_fax_number']=sanitize_text_field($_POST['contact_fax_number']);			$current_options['contact_email']=sanitize_text_field($_POST['contact_email']);			$current_options['contact_website']=sanitize_text_field($_POST['contact_website']);						$current_options['footer_twitter_link']= sanitize_text_field($_POST['footer_twitter_link']);			$current_options['footer_facebook_link']= sanitize_text_field($_POST['footer_facebook_link']);			$current_options['footer_linkedin_link'] = sanitize_text_field($_POST['footer_linkedin_link']);						$current_options['google_map_url']=$_POST['google_map_url'];						//Google map   			if(isset($_POST['contact_google_map_enabled']))			{ echo $current_options['contact_google_map_enabled']= sanitize_text_field($_POST['contact_google_map_enabled']); } 			else { echo $current_options['contact_google_map_enabled']="off"; }						//footer social media enabled  			if(isset($_POST['footer_social_media_enabled']))			{ echo $current_options['footer_social_media_enabled']= sanitize_text_field($_POST['footer_social_media_enabled']); } 			else { echo $current_options['footer_social_media_enabled']="off"; }						update_option('busiprof_pro_theme_options' , $current_options);		}     }		 if($_POST['busiprof_settings_save_4'] == 2) 	 {		do_action('busiprof_restore_data','1');	 } } ?> <form method="post" action = ""  id="theme_options_home_4">	<?php wp_nonce_field('busiprof_customization_nonce_gernalsetting','busiprof_gernalsetting_nonce_customization'); ?>	<div class="postbox" id="Basic_setting_1">		<div title="Click to toggle" class="handlediv"><br></div>				<h3 class="hndle"><span><?php _e('Contact Details','busi_prof');?><span class="postbox-title-action"></h3>		<div class="inside">			<p><h4 class="heading"><?php _e('Address','busi_prof');?></h4>				<input type="text" class="inputwidth" name="contact_address_1" id="contact_address_1" value="<?php if($current_options['contact_address_1']!='') { echo esc_attr($current_options['contact_address_1']); } ?>">				<span class="icon help"><span class="tooltip"><?php  _e('Enter your hous number and city','busi_prof');?></span></span><br><br>				<input type="text" class="inputwidth" name="contact_address_2" id="contact_address_2" value="<?php if($current_options['contact_address_2']!='') { echo esc_attr($current_options['contact_address_2']); } ?>">				<span class="icon help"><span class="tooltip"><?php  _e('Enter your contact address details','busi_prof');?></span></span>			</p>			<p><h4 class="heading"><?php _e('Contact Number','busi_prof');?></h4>				<input type="text" class="inputwidth" name="contact_number" id="contact_number" value="<?php if($current_options['contact_number']!='') { echo esc_attr($current_options['contact_number']); } ?>">				<span class="icon help">					<span class="tooltip"><?php  _e('Enter your contact number','busi_prof');?></span>				</span>			</p>			<p><h4 class="heading"><?php _e('Fax Number','busi_prof');?></h4>				<input type="text" class="inputwidth" name="contact_fax_number" id="contact_fax_number" value="<?php if($current_options['contact_fax_number']!='') { echo esc_attr($current_options['contact_fax_number']); } ?>">				<span class="icon help">					<span class="tooltip"><?php  _e('Enter your Fax Number','busi_prof');?></span>				</span>			</p>			<p><h4 class="heading"><?php _e('Email Address','busi_prof');?></h4>				<input type="text" class="inputwidth" name="contact_email" id="contact_email" value="<?php if($current_options['contact_email']!='') { echo esc_attr($current_options['contact_email']); } ?>">				<span class="icon help">					<span class="tooltip"><?php  _e('Enter your email address details','busi_prof');?></span>				</span>			</p>			<p><h4 class="heading"><?php _e('Website Address','busi_prof');?></h4>				<input type="text" class="inputwidth" name="contact_website" id="contact_website" value="<?php if($current_options['contact_website']!='') { echo esc_attr($current_options['contact_website']); } ?>">				<span class="icon help">					<span class="tooltip"><?php  _e('Enter your Website address details','busi_prof');?></span>				</span>			</p>		</div>		</div>		<div class="postbox" id="Basic_setting_2">		<div title="Click to toggle" class="handlediv"><br></div>				<h3 class="hndle"><span><?php _e('Social Media Link','busi_prof');?><span class="postbox-title-action">		</h3>		<div class="inside">			<p><h4 class="heading"><?php _e('Enable Social media ','busi_prof'); ?>  </h4>			  <input type="checkbox" <?php if($current_options['footer_social_media_enabled']=='on') echo "checked='checked'"; ?> id="footer_social_media_enabled" name="footer_social_media_enabled" > <span class="explain"><?php _e('Enable social media icons on footer section.','busi_prof'); ?></span>			</p>			<p><h4 class="heading"><?php _e('Twitter Link : ','busi_prof');?></h4>				<input type="text" class="inputwidth" name="footer_twitter_link" id="footer_twitter_link" value="<?php if($current_options['footer_twitter_link']!='') { echo esc_attr($current_options['footer_twitter_link']); } ?>"/>				<span class="icon help">					<span class="tooltip"><?php  _e('Enter twitter Link like these type: https://twitter.com/','busi_prof');?></span>				</span>			</p>			<p><h4 class="heading"><?php _e('Facebook Link : ','busi_prof');?></h4>				<input type="text" class="inputwidth" name="footer_facebook_link" id="footer_linkedin_link" value="<?php if($current_options['footer_linkedin_link']!='') { echo esc_attr($current_options['footer_linkedin_link']); } ?>"/>				<span class="icon help">					<span class="tooltip"><?php  _e('Enter Facebook Link like these type: http://facebook.com/','busi_prof');?></span>				</span>			</p>			<p><h4 class="heading"><?php _e('Social News Link : ','busi_prof');?></h4>				<input type="text" class="inputwidth" name="footer_linkedin_link" id="footer_linkedin_link" value="<?php if($current_options['footer_linkedin_link']!='') { echo esc_attr($current_options['footer_linkedin_link']); } ?>"/>				<span class="icon help">					<span class="tooltip"><?php  _e('Enter social news link like these type:  http://in.linkedin.com/','busi_prof');?></span>				</span>			</p>		</div>		</div>	<div class="postbox" id="Basic_setting_3">		<div title="Click to toggle" class="handlediv"><br></div>				<h3 class="hndle"><span><?php _e('Contact google Map','busi_prof');?><span class="postbox-title-action">		</h3>		<div class="inside">			<p><h4 class="heading"><?php _e('Enable Google map ','busi_prof'); ?>  </h4>			  <input type="checkbox" <?php if($current_options['contact_google_map_enabled']=='on') echo "checked='checked'"; ?> id="contact_google_map_enabled" name="contact_google_map_enabled" > <span class="explain"><?php _e('Enable Google map on contact Us page.','busi_prof'); ?></span>			</p>						<p><h4 class="heading"><?php _e('Google map Url','busi_prof');?></h4>				<input class="inputwidth" type="text" value="<?php if($current_options['google_map_url']!='') { echo $current_options['google_map_url']; } ?>" id="google_map_url" name="google_map_url" size="36" />				<span class="icon help">					<span class="tooltip"><?php  _e('Enter your contact address google map url','busi_prof');?></span>				</span>			</p>					</div>		</div>	<!---DATA SAVE------>    <div id="busiprof_optionsframework-submit">         		<input type="hidden" value="1" id="busiprof_settings_save_4" name="busiprof_settings_save_4" />		<input type="button" class="button-primary"  value= "<?php _e('Save Changes', 'busi_prof');?>" onclick="datasave_home('4')"/>											<input type="button" class="reset-button button-secondary"  value="<?php _e('Restore Defaults','busi_prof');?>" onclick="reset_data_home('4')" />		<div style="display:none; margin-left:300px; margin-top:-25px; padding:10px; color: #468847; background-color: #DFF0D8; border-color: #D6E9C6;" id="busiprof_settings_save_4_reset" ><?php _e('Options data successfully reset','busi_prof');?></div>		<div style="display:none; margin-left:300px; margin-top:-25px; padding:10px; color: #468847; background-color: #DFF0D8; border-color: #D6E9C6;" id="busiprof_settings_save_4_success" ><?php _e('Options data successfully Saved','busi_prof');?></div>	</div></form>