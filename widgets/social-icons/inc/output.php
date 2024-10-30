<?php $has_background = ""; ?>
<div class="bh_social_media_wrapper" style="text-align: <?php echo $social_align ?>">

	<?php 
	$social_icon_length = count($social_icon_name);
	$social_icon_height_width = $font_size;

	for($i = 0; $i < $social_icon_length; $i++) {

		if($social_icon_color[$i] != "") {
			$has_background = 'width: ' . $social_icon_height_width . '; height: ' . $social_icon_height_width . ';';
		}

		echo '<a href="' . $social_icon_url[$i] . '" target="' . $new_window . '" style="font-size: ' . $font_size . '; background-color: ' . $social_icon_color[$i] .  '; border-radius: ' . $border_radius .'; color: ' . $social_icon_font_color[$i] . '; ' . $has_background . '"> 
		<span class="bh-icon socicon-' . $social_icon_name[$i] . '" font-style="margin-left: -2px;
    margin-top: 10px!important;" ></span> 
		</a>';
	} 
	?>

</div>