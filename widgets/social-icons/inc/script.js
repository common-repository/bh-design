
/*jQuery('a.social-icon-add').click(function(event) {
    event.preventDefault();
    var newRow = jQuery('<tr><td>Social Site<select name="social_media_names_list[]" id="" style="margin-top: 5px; width: 100%;"><option value="none">Please Select</option> <option value="facebook">Facebook</option> <option value="twitter">Twitter</option> <option value="linkedin">LinkedIn</option><option value="pinterest">Pinterest</option><option value="google">Google+</option><option value="instagram">Instagram</option><option <?php if(isset($social_icon_name[0]) && $social_icon_name[0] == "snapchat" ) echo 'selected="selected"' ?> value="snapchat">Snapchat</option><option value="tumblr">Tumblr</option> <option value="digg">Digg</option> <option value="reddit">Reddit</option> <option value="goodreads">Good Reads</option> <option value="vine">Vine</option> <option value="deviantart">DeviantArt</option> <option value="rss">RSS</option> <option value="houzz">Houzz</option> <option value="yelp">Yelp</option> <option value="tripadvisor">Trip Advisor</option> <option value="mail">Email</option> <option value="youtube">YouTube</option> <option value="vimoe">Vimeo</option><option value="flickr">Flickr</option> <option value="imdb">IMDB</option> </select> </td><td>Font Color <input type="text" value="" class="bh-social-icon-field" name="social_icon_font_color_list[]"/> </td><td>BG Color <input type="text" value="" class="bh-social-icon-field" name="social_media_color_list[]"/> </td><td style="text-align: center;"> <a href="#" onclick="remove_profile()" class="social-icon-remove fa fa-times-circle"> </a> </td><td><div class="bh-social-url">URL:</div> <input type="text" value="" class="bh-social-icon-field url" name="social_icon_url_list[]"/></td></tr>');

    jQuery('#social-icon-table > tbody:last-child').append(newRow);
  
});



jQuery('table.bh-social-icon-table').on( 'click', 'tr a', remove_profile );

function remove_profile(e){
    e.preventDefault();
    var table = jQuery(this).closest('table');
    jQuery(this).parents('tr').remove();
    reCalculate.call( table );
}


jQuery(document).ajaxSuccess(function(e, xhr, settings) {
  
    jQuery('a.social-icon-add').click(add_profile);
    jQuery('table.bh-social-icon-table').on( 'click', 'tr a', remove_profile );
    jQuery('.bh-social-admin-wrapper tbody').sortable().disableSelection();;

});


*/


jQuery('a.social-icon-add').unbind().click(add_profile);
jQuery('table.bh-social-icon-table').on( 'click', 'tr a', remove_profile );

function add_profile(e){
    e.preventDefault();
    var social_media_color;

    var newRow = jQuery('<tr><td>Social Site<select name="social_media_names_list[]" id="" style="margin-top: 5px; width: 100%;"><option value="none">Please Select</option> <option value="facebook">Facebook</option> <option value="twitter">Twitter</option> <option value="linkedin">LinkedIn</option><option value="pinterest">Pinterest</option><option value="googleplus">Google+</option><option value="instagram">Instagram</option><option value="snapchat">Snapchat</option> <option value="tumblr">Tumblr</option> <option value="digg">Digg</option> <option value="reddit">Reddit</option> <option value="goodreads">Good Reads</option> <option value="vine">Vine</option> <option value="deviantart">DeviantArt</option> <option value="rss">RSS</option> <option value="houzz">Houzz</option> <option value="yelp">Yelp</option> <option value="tripadvisor">Trip Advisor</option> <option value="mail">Email</option> <option value="youtube">YouTube</option> <option value="vimoe">Vimeo</option><option value="flickr">Flickr</option> <option value="imdb">IMDB</option> </select> </td><td>Font Color <input type="text" value="" class="bh-social-icon-field" name="social_icon_font_color_list[]"/> </td><td>BG Color <input type="text" value="" class="bh-social-icon-field" name="social_media_color_list[]"/> </td><td style="text-align: center;"> <a href="#" onclick="remove_profile()" class="social-icon-remove fa fa-times-circle"> </a> </td><td><div class="bh-social-url">URL:</div> <input type="text" value="" class="bh-social-icon-field url" name="social_icon_url_list[]"/></td></tr>');
    jQuery('#social-icon-table > tbody:last-child').append(newRow);
    e.stopPropagation? e.stopPropagation() : e.cancelBubble = true;
}

function remove_profile(e){
    e.preventDefault();
    var table = jQuery(this).closest('table');
    jQuery(this).parents('tr').remove();
    reCalculate.call( table );
}

jQuery('.bh-social-icon-table tbody').sortable();


jQuery(document).ajaxSuccess(function(e, xhr, settings) {
  
    jQuery('a.social-icon-add').click(add_profile);
    jQuery('table.bh-social-icon-table').on( 'click', 'tr a', remove_profile );
    jQuery('.bh-social-admin-wrapper tbody').sortable();

});



