
<div class="wrap">
	<h2>Simple Theme Options</h2>
	<div id="wpcom-stats-meta-box-container" class="metabox-holder">
		<form method="post" action="options.php">
		<?php settings_fields( 'chrs_options' ); ?>
		<?php $options = get_option( 'chrs_theme_options' ); ?>
		<div class="postbox-container" style="width: 55%;margin-right: 10px;">
			<div id="normal-sortables" class="meta-box-sortables ui-sortable">
				<div class="postbox" id="chrs-global-settings">
					<h3 class="hndle"><span>Global Settings</span></h3>
					<div class="inside">
						<table cellpadding="0" class="chrs-input-global-fields">
							<tbody>
							<tr>
								<th width="30%" align="left" valign="top" scope="row"><?php _e( 'Google Analytics', 'chrssto' ); ?></th>
								<td width="5%"></td>
								<td align="left">
								<textarea id="chrs_theme_options[analytics]" class="large-text" cols="50" rows="10" name="chrs_theme_options[analytics]"><?php echo esc_textarea( $options['analytics'] ); ?></textarea><br />
								<label for="chrs_theme_options[analytics]"><?php _e( 'Add your Google Analytics code here.', 'chrssto' ); ?></label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Other Code<br />add to header.php', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><textarea id="chrs_theme_options[customCodeHeader]" class="large-text" cols="50" rows="10" name="chrs_theme_options[customCodeHeader]"><?php echo esc_textarea( $options['customCodeHeader'] ); ?></textarea>
									<label for="chrs_theme_options[customCodeHeader]">
										<?php _e( 'Any custom code that needs to be added to header.php', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Other Code<br />add to footer.php', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><textarea id="chrs_theme_options[customCodeFooter]" class="large-text" cols="50" rows="10" name="chrs_theme_options[customCodeFooter]"><?php echo esc_textarea( $options['customCodeFooter'] ); ?></textarea>
									<label for="chrs_theme_options[customCodeFooter]">
										<?php _e( 'Any custom code that needs to be added to footer.php', 'chrssto' ); ?>
									</label></td>
							</tr>
							</tbody>
						</table>

					</div>
					<div id="major-publishing-actions">
						<div id="publishing-action">
							<input type="submit" name="save" id="save" class="button button-primary" value="<?php _e( 'Save Options', 'chrssto' ); ?>"  />
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="postbox-container" style="width: 44%;">
			<div id="normal-sortables" class="meta-box-sortables ui-sortable">
				<div class="postbox" id="chrs-social-settings">
					<h3 class="hndle"><span>Social Media And Top Header</span></h3>
					<div class="inside">
						<table cellpadding="0" class="chrs-input-social-fields">
							<tr>
								<th width="40%" align="left" valign="top" scope="row"><?php _e( 'Facebook URL', 'chrssto' ); ?></th>
								<td width="5%"></td>
								<td align="left"><input id="chrs_theme_options[fburl]" type="text" name="chrs_theme_options[fburl]" value="<?php esc_attr_e( $options['fburl'] ); ?>" /><br />
									<label for="chrs_theme_options[fburl]">
										<?php _e( 'http://facebook.com/yourprofileurl', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Twitter URL', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[twurl]" type="text" name="chrs_theme_options[twurl]" value="<?php esc_attr_e( $options['twurl'] ); ?>" /><br />
									<label for="chrs_theme_options[twurl]">
										<?php _e( 'http://twitter.com/yourprofileurl', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'LinkedIn URL', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[igurl]" type="text" name="chrs_theme_options[igurl]" value="<?php esc_attr_e( $options['igurl'] ); ?>" /><br />
									<label for="chrs_theme_options[igurl]">
										<?php _e( 'http://LinkedIn.com/yourprofileurl', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Email', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[gpurl]" type="text" name="chrs_theme_options[gpurl]" value="<?php esc_attr_e( $options['gpurl'] ); ?>" /><br />
									<label for="chrs_theme_options[gpurl]">
										<?php _e( 'abc@mail.com', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Mobile No', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[pturl]" type="text" name="chrs_theme_options[pturl]" value="<?php esc_attr_e( $options['pturl'] ); ?>" /><br />
									<label for="chrs_theme_options[pturl]">
										<?php _e( '9876 987 456', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Career', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[yturl]" type="text" name="chrs_theme_options[yturl]" value="<?php esc_attr_e( $options['yturl'] ); ?>" /><br />
									<label for="chrs_theme_options[yturl]">
										<?php _e( 'Enter Url', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Login', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[ypurl]" type="text" name="chrs_theme_options[ypurl]" value="<?php esc_attr_e( $options['ypurl'] ); ?>" /><br />
									<label for="chrs_theme_options[ypurl]">
										<?php _e( 'Enter Url', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Footer Text', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[wpurl]" type="text" name="chrs_theme_options[wpurl]" value="<?php esc_attr_e( $options['wpurl'] ); ?>" /><br />
									<label for="chrs_theme_options[wpurl]">
										<?php _e( 'Footer Text ', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Copyright Text', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[liurl]" type="text" name="chrs_theme_options[liurl]" value="<?php esc_attr_e( $options['liurl'] ); ?>" /><br />
									<label for="chrs_theme_options[liurl]">
										<?php _e( 'Copyright Text', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Partner Heading', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[tburl]" type="text" name="chrs_theme_options[tburl]" value="<?php esc_attr_e( $options['tburl'] ); ?>" /><br />
									<label for="chrs_theme_options[tburl]">
										<?php _e( 'Partner Heading', 'chrssto' ); ?>
									</label></td>
							</tr>
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Partner Tagline', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[fkurl]" type="text" name="chrs_theme_options[fkurl]" value="<?php esc_attr_e( $options['fkurl'] ); ?>" /><br />
									<label for="chrs_theme_options[fkurl]">
										<?php _e( 'Partner Tagline', 'chrssto' ); ?>
									</label></td>
							</tr>
							
							<tr>
								<th align="left" valign="top" scope="row"><?php _e( 'Blog Post Title', 'chrssto' ); ?></th>
								<td></td>
								<td align="left"><input id="chrs_theme_options[msurl]" type="text" name="chrs_theme_options[msurl]" value="<?php esc_attr_e( $options['msurl'] ); ?>" /><br />
									<label for="chrs_theme_options[msurl]">
										<?php _e( 'Blog Post Title', 'chrssto' ); ?>
									</label></td>
							</tr>
							
							
							
						</table>
					</div>
					<div id="major-publishing-actions">
						<div id="publishing-action">
							<input type="submit" name="save" id="save" class="button button-primary" value="<?php _e( 'Save Options', 'chrssto' ); ?>"  />
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
<div class="clear"></div>
