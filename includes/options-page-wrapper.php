<?php

$bh_design_company_color;

if ($bhdesign_company_name == "Bluehost") {

	$bh_design_company_color = "#3575D3";
	$bh_design_company_thumb = "bh";

} else if ($bhdesign_company_name == "Hostmonster") {

	$bh_design_company_color = "#7BB222";
	$bh_design_company_thumb = "hm";

} else if ($bhdesign_company_name == "Justhost" ) {

	$bh_design_company_color = "#F84349";
	$bh_design_company_thumb = "jh";

} else {

	$bh_design_company_color = "black";
	$bh_design_company_thumb = "bh";
	
}

$bh_help_videos = array (
	array(
		"id" => '01',
		"title" => 'How to upload to WordPress media libary',
		"url" => 'https://www.youtube.com/embed/Zb94gLgmLto',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-media.png'
		),
	array(
		"id" => '02',
		"title" => 'How to Create a User in WordPress',
		"url" => 'https://www.youtube.com/embed/vdsx3UvTL3I',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-user.png'
		),
	array(
		"id" => '03',
		"title" => 'An Overview of the WordPress Dashboard',
		"url" => 'https://www.youtube.com/embed/TRMbekF--ZI',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-dashboard-overview.png'
		),
	array(
		"id" => '04',
		"title" => 'How to login to your WordPress dashboard.',
		"url" => 'https://www.youtube.com/embed/UMud3ZXCIl4',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-dashboard-login.png'
		),
	array(
		"id" => '05',
		"title" => 'How to Create a Page in WordPress',
		"url" => 'https://www.youtube.com/embed/xU1sl70_N6k',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-create-page.png'
		),
	array(
		"id" => '06',
		"title" => 'How to Create a Post in WordPress',
		"url" => 'https://www.youtube.com/embed/9q6j22bJWQU',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-create-post.png'
		),
	array(
		"id" => '07',
		"title" => 'How to Edit an Existing Post in WordPress',
		"url" => 'https://www.youtube.com/embed/fwKVfgchElY',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-edit-post.png'
		),
	array(
		"id" => '08',
		"title" => 'Distraction Free Writing in WordPress',
		"url" => 'https://www.youtube.com/embed/xOJ4i3URB0U',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-distraction-free.png'
		),
	array(
		"id" => '09',
		"title" => 'How to Add an Image in WordPress',
		"url" => 'https://www.youtube.com/embed/fpUSYdyrE58',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-add-image.png'
		),
	array(
		"id" => '10',
		"title" => 'How to Create a Link in WordPress',
		"url" => 'https://www.youtube.com/embed/y0XgeA1Dlc0',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-create-link.png'
		),
	array(
		"id" => '11',
		"title" => 'How to Embed Video in WordPress',
		"url" => 'https://www.youtube.com/embed/UxUDhe9Hmdk',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-embed-video.png'
		),
	array(
		"id" => '12',
		"title" => 'How to Create Categories and Tags in WordPress',
		"url" => 'https://www.youtube.com/embed/DNgrlVOPa3Q',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-categories-tags.png'
		),
	array(
		"id" => '13',
		"title" => 'How To Prevent Comment Spam',
		"url" => 'https://www.youtube.com/embed/JKzjtDvrX8s',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-comment-spam.png'
		),
	array(
		"id" => '14',
		"title" => 'How to Create a Custom Menu in WordPress',
		"url" => 'https://www.youtube.com/embed/O8D6q_bpuz4',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-custom-menu.png'
		),
	array(
		"id" => '15',
		"title" => 'An Overview of the Settings in WordPress',
		"url" => 'https://www.youtube.com/embed/xWflyooxABM',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-settings-overview.png'
		),
	array(
		"id" => '16',
		"title" => 'How to Add a Widget in WordPress',
		"url" => 'https://www.youtube.com/embed/DK3kE3mht-E',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-add-widget.png'
		),
	array(
		"id" => '17',
		"title" => 'How to Disable Trackbacks in WordPress',
		"url" => 'https://www.youtube.com/embed/LJ74ECAgmzw',
		"category" => 'WordPress',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-disable-trackbacks.png'
		),
	array(
		"id" => '18',
		"title" => 'How to configure shipping methods in WooCommerce',
		"url" => 'https://www.youtube.com/embed/pzMD3nfCMOU',
		"category" => 'Woo Commerce',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-shipping-methods.png'
		),
	array(
		"id" => '19',
		"title" => 'Managing Orders in WooCommerce',
		"url" => 'https://www.youtube.com/embed/lTHt1f2QW2A',
		"category" => 'Woo Commerce',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-manage-orders.png'
		),
	array(
		"id" => '20',
		"title" => 'Manage Your Location, Currency, and Measurements in WooCommerce',
		"url" => 'https://www.youtube.com/embed/0b84NhxIM60',
		"category" => 'Woo Commerce',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-lovation-currency-measurements.png'
		),
	array(
		"id" => '21',
		"title" => 'Create Product Variations in WooCommerce',
		"url" => 'https://www.youtube.com/embed/2B1S7c53Ka4',
		"category" => 'Woo Commerce',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-product-variations.png'
		),
	array(
		"id" => '22',
		"title" => 'Create products in WooCommerce',
		"url" => 'https://www.youtube.com/embed/BbXpopt7jAE',
		"category" => 'Woo Commerce',
		"thumbnail" => $plugin_url . '/images/' . $bh_design_company_thumb . '-video-woocommerce-products.png'
		)
); ?>


<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>

	<h2><?php echo $bhdesign_company_name ?><?php esc_attr_e( ' Design Settings Page', 'wp_admin_style' ); ?></h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>

						<h3 class="hndle"><span><?php echo $bhdesign_company_name?><?php esc_attr_e( ' Help', 'wp_admin_style' ); ?></span></h3>

						<div class="inside">

	                        <?php foreach ($bh_help_videos as $i => $value): ?>

								<li class="bhhelp-wrapper">
								    <a href="#" data-featherlight="#f<?php echo $value["id"] ?>">
								    	<ul>
									       	<li class="bhhelp-image"><img src="<?php echo $value["thumbnail"]; ?>">
									       		<div class="category"><?php echo $value["category"]; ?></div>
									       	</li>
									       	<li class="bhhelp-title" style="color: <?php echo $bh_design_company_color ?>"><?php echo $value["title"] ?></li>
									    </ul>
									</a>
								 </li>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h3 class="hndle"><span><?php esc_attr_e( 'Main Settings', 'wp_admin_style' ); ?></span>
						</h3>

						<div class="inside">

							<!-- 

							<?php if ($bhdesign_company_name != ''): ?>

								<form name="bhdesign_settings" method="post" action ="">

							    	<input type="hidden" name="bhdesign_settings_submitted" value="Y">

									<h3>Include IconMoon</h3>

									<fieldset>
										<legend class="screen-reader-text"><span>input type="radio"</span></legend>
										<label title='g:i a'>
											<input type="radio" name="bhdesign_iconmoon" value="true" <?php if ($bhdesign_icon_moon == 'true') { echo 'checked="checked"'; } ?> />
											<span><?php esc_attr_e( 'Yes', 'wp_admin_style' ); ?></span>
										</label><br>
										<label title='g:i a'>
											<input type="radio" name="bhdesign_iconmoon" value="false" <?php if ($bhdesign_icon_moon == 'false') { echo 'checked="checked"'; } ?>/>
											<span><?php esc_attr_e( 'No', 'wp_admin_style' ); ?></span>
										</label>
									</fieldset>

		                        	<p style="text-align: right;"><input class="button-primary" type="submit" name="bhdesign_settings_submit" value="<?php esc_attr_e( 'Save' ); ?>" /></p>

		                    	</form>

		                    <?php endif; ?>

		                	 -->

                	 		<h3>Icon Moon</h3>
		                	<div class="icon-moon-wrapper">
		                	 	<a href="<?php echo $plugin_url ?>/bhdesign-font-demo.html" target="_BLANK" class="button-primary">Click to view Icon Moon Demo</a>
		                	</div>


							<?php if ($bhdesign_company_name == ''): ?>

							    <form name="bhdesign_company_form" method="post" action ="">

							    <input type="hidden" name="bhdesign_company_form_submitted" value="Y">

	                             	<table class="form-table">
	                                    <tr>
	                                       <td scope="row">
	                                            <label for="bhdesign_company">Company Name</label>
	                                            <select name="bhdesign_company" id="">
													<option <?php if ($bhdesign_company_name == '') { echo 'selected="selected"'; } ?> value="">Please Select</option>
													<option <?php if ($bhdesign_company_name == 'Bluehost') { echo 'selected="selected"'; } ?> value="Bluehost">Bluehost</option>
													<option <?php if ($bhdesign_company_name == 'Hostmonster') { echo 'selected="selected"'; } ?> value="Hostmonster">Hostmonster</option>
													<option <?php if ($bhdesign_company_name == 'Justhost') { echo 'selected="selected"'; } ?> value="Justhost">Justhost</option>
	                                            </select>
	                                            
	                                       </td>
	                                    </tr>	
	                             	</table>

	                                <p><input class="button-primary" type="submit" name="bhdesign_name_submit" value="<?php esc_attr_e( 'Save' ); ?>" /></p>

							     </form>

							 <?php else: ?>

								<?php if ($bhdesign_password_error == true ): ?>
									<div class="error form-invalid"><?php esc_attr_e( 'Incorrect Password', 'wp_admin_style' ); ?></div>
								<?php endif; ?>

                	 			<h3>Reset Settings</h3>

							     <form name="bhdesign_company_clear_form" method="post" action = "">

							     	<input type="hidden" name="bhdesign_company_clear_submited" value="Y">
							     	<input type="text" value="" name="bhdesign_clear_password" class="bhdesign-reset-pass" />
							     	<input class="button-primary" type="submit" name="bhdesign_company_clear_submit" value="<?php esc_attr_e( 'Reset' ); ?>" />


							     </form>

							 <?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="clear">
	</div>
</div>

 <?php foreach ($bh_help_videos as $i => $value): ?>
								
	 <iframe class="lightbox" width="853" height="480" src="<?php echo $value["url"] ?>?showinfo=0" id="f<?php echo $value["id"] ?>" frameborder="0" allowfullscreen scrolling="no"></iframe>

<?php endforeach; ?>


