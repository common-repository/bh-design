<input type="hidden" name="<?php echo $this->get_field_name('converted'); ?>" value="<?php echo $converted ?>" />

<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
</p>

<div class="bh-social-admin-wrapper">
	
	<p class="bh-social-option-wrapper">
		<h3>Social Settings</h3>
		<table style="width:100%">
		    
			<tr> 
				<td class="bh-social-option small">Border Radius
		    		<input type="text" name="<?php echo $this->get_field_name('border_radius'); ?>" value="<?php echo $border_radius ?>" class="bh-social-icon-field" />
				</td> 
			    <td class="bh-social-option small">Font Size
			    	<input type="text" name="<?php echo $this->get_field_name('font_size'); ?>" value="<?php echo $font_size ?>" class="bh-social-icon-field" />
			    </td> 
			</tr>
			<tr>
			    <td class="bh-social-option small">Align
			  		<select name="<?php echo $this->get_field_name( 'social_align' ); ?>" id="" style="margin-top: 5px; width: 100%;">
						<option value="left" <?php if ($social_align == 'left') { echo 'selected="selected";'; } ?> >Left</option>
						<option value="right" <?php if ($social_align == 'right') { echo 'selected="selected";'; } ?>>Right</option>
						<option value="center" <?php if ($social_align == 'center') { echo 'selected="selected";'; } ?>>Center</option>
					</select>
				</td>
			    <td class="bh-social-option small">URL:
			  		<select name="<?php echo $this->get_field_name( 'new_window' ); ?>" id="" style="margin-top: 5px;">
						<option value="_blank" <?php if ($new_window == '_blank') { echo 'selected="selected";'; } ?>>New Window</option>
						<option value="_self" <?php if ($new_window == '_self') { echo 'selected="selected";'; } ?>>Same Window</option>
					</select>
				</td> 
			</tr>
		</table>
			    

		<h3>Social Profiles</h3>
		<table class="bh-social-icon-table" style="width:100%" id="social-icon-table">
			<tr>
				<td>Social Site
					<select name="social_media_names_list[]" id="" style="margin-top: 5px; width: 100%;">
						<option value="none">Please Select</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "facebook" ) echo 'selected="selected"' ?> value="facebook">Facebook</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "twitter" ) echo 'selected="selected"' ?> value="twitter">Twitter</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "linkedin" ) echo 'selected="selected"' ?> value="linkedin">LinkedIn</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "pinterest" ) echo 'selected="selected"' ?> value="pinterest">Pinterest</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "googleplus" ) echo 'selected="selected"' ?> value="googleplus">Google+</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "instagram" ) echo 'selected="selected"' ?> value="instagram">Instagram</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "snapchat" ) echo 'selected="selected"' ?> value="snapchat">Snapchat</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "tumblr" ) echo 'selected="selected"' ?> value="tumblr">Tumblr</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "digg" ) echo 'selected="selected"' ?> value="digg">Digg</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "reddit" ) echo 'selected="selected"' ?> value="reddit">Reddit</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "goodreads" ) echo 'selected="selected"' ?> value="goodreads">Good Reads</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "vine" ) echo 'selected="selected"' ?> value="vine">Vine</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "deviantart" ) echo 'selected="selected"' ?> value="deviantart">DeviantArt</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "rss" ) echo 'selected="selected"' ?> value="rss">RSS</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "houzz" ) echo 'selected="selected"' ?> value="houzz">Houzz</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "yelp" ) echo 'selected="selected"' ?> value="yelp">Yelp</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "tripadvisor" ) echo 'selected="selected"' ?> value="tripadvisor">Trip Advisor</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "mail" ) echo 'selected="selected"' ?> value="mail">Email</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "youtube" ) echo 'selected="selected"' ?> value="youtube">YouTube</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "vimeo" ) echo 'selected="selected"' ?> value="vimeo">Vimeo</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "flickr" ) echo 'selected="selected"' ?> value="flickr">Flickr</option>
						<option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "imdb" ) echo 'selected="selected"' ?> value="imdb">IMDB</option>
					</select>
				</td>
			    <td>Font Color
			    	<input type="text" value="<?php echo $social_icon_font_color[0] ?>" class="bh-social-icon-field" name="social_icon_font_color_list[]"/>
			    </td> 
			    <td>BG Color
			    	<input type="text" value="<?php echo $social_icon_color[0] ?>" class="bh-social-icon-field" name="social_media_color_list[]"/>
			    </td> 
				<td style="text-align: center;" valign="bottom">
					<a href="#" onclick="remove_profile()" class="social-icon-remove fa fa-times-circle"> </a> 
				</td>
			    <td><div class="bh-social-url">URL:</div> 
			    	<input type="text" value="<?php echo $social_icon_url[0] ?>" class="bh-social-icon-field url" name="social_icon_url_list[]"/>
			    </td>
			</tr>
			<?php 
				$number_of_fields = count($social_icon_name);

				for($i = 1; $i < $number_of_fields; $i++) { ?>

					<tr>
						<td>Social Site
							<select name="social_media_names_list[]" id="" style="margin-top: 5px; width: 100%;">
								<option value="none">Please Select</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "facebook" ) echo 'selected="selected"' ?> value="facebook">Facebook</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "twitter" ) echo 'selected="selected"' ?> value="twitter">Twitter</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "linkedin" ) echo 'selected="selected"' ?> value="linkedin">LinkedIn</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "pinterest" ) echo 'selected="selected"' ?> value="pinterest">Pinterest</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "googleplus" ) echo 'selected="selected"' ?> value="googleplus">Google+</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "instagram" ) echo 'selected="selected"' ?> value="instagram">Instagram</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "snapchat" ) echo 'selected="selected"' ?> value="snapchat">Snapchat</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "tumblr" ) echo 'selected="selected"' ?> value="tumblr">Tumblr</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "digg" ) echo 'selected="selected"' ?> value="digg">Digg</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "reddit" ) echo 'selected="selected"' ?> value="reddit">Reddit</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "goodreads" ) echo 'selected="selected"' ?> value="goodreads">Good Reads</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "vine" ) echo 'selected="selected"' ?> value="vine">Vine</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "deviantart" ) echo 'selected="selected"' ?> value="deviantart">DeviantArt</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "rss" ) echo 'selected="selected"' ?> value="rss">RSS</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "houzz" ) echo 'selected="selected"' ?> value="houzz">Houzz</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "yelp" ) echo 'selected="selected"' ?> value="yelp">Yelp</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "tripadvisor" ) echo 'selected="selected"' ?> value="tripadvisor">Trip Advisor</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "mail" ) echo 'selected="selected"' ?> value="mail">Email</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "youtube" ) echo 'selected="selected"' ?> value="youtube">YouTube</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "vimeo" ) echo 'selected="selected"' ?> value="vimeo">Vimeo</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "flickr" ) echo 'selected="selected"' ?> value="flickr">Flickr</option>
								<option <?php if(isset($social_icon_name[$i]) && $social_icon_name[$i] == "imdb" ) echo 'selected="selected"' ?> value="imdb">IMDB</option>
							</select>
						</td>
						<td>Font Color
							<input type="text" value="<?php echo $social_icon_font_color[$i] ?>" class="bh-social-icon-field" name="social_icon_font_color_list[]"/>
						</td>
						<td>BG Color
			    			<input type="text" value="<?php echo $social_icon_color[$i] ?>" class="bh-social-icon-field" name="social_media_color_list[]"/>
						</td>
						<td style="text-align: center;" valign="bottom">
							<a href="#" onclick="remove_profile()" class="social-icon-remove fa fa-times-circle"> </a> 
						</td>
					    <td><div class="bh-social-url">URL:</div> 
					    	<input type="text" value="<?php echo $social_icon_url[$i] ?>" class="bh-social-icon-field url" name="social_icon_url_list[]"/>
					    </td>
					</tr>


				<?php } ?>

		</table>
		<div style="text-align: right;"><a href="#" id="add_profile_button" class="social-icon-add fa fa-plus-circle"> </a></div>
	</p>

</div>

