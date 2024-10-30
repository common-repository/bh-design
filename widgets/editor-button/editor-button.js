(function() {
    tinymce.create('tinymce.plugins.Bhshortcodes', {
        init : function(ed, url) {
            ed.addButton('bhshortcodes', {
                title : 'Bluehost Shortcodes',
                cmd : 'bhShortcodes',
                image : url + '/editor-button.png'
            });

            ed.addCommand('bhshortcodes', function() {
                var return_text = '';
                var the_popup = '<div class="bhshortcode-popup"><div class="bhshortcode-body"><span class="dashicons dashicons-no"></span>' +
                    '<div id="bh-shortcode-content"><h3>Choose Your Shortcode</h3>' + 
                    '<select name="bh_shortcode" id="bh_shortcode_select">' + 
                      '<option value="feature-box">Featured Boxes</option>' + 
                      '<option value="our-team">Our Team</option>' + 
                      '<option value="contact-page">Contact Us Page</option>' + 
                      '<option value="pricing-table">Pricing Table</option>' +
                    '</select>' +
                    '<button id="bh-add-shortcode">Add Shortcode</button>' +
                    '</div></div></div>';
                jQuery('body').append(the_popup);
                jQuery('.bhshortcode-body .dashicons-no').click(function(){
                    jQuery('.bhshortcode-popup').remove();
                });
                jQuery('#bh-add-shortcode').click(function(){
                    if( jQuery('#bh_shortcode_select').val() == "feature-box" ) { return_text = bh_feature_box(); } else
                    if( jQuery('#bh_shortcode_select').val() == "our-team" ) { return_text = bh_our_team(); } else
                    if( jQuery('#bh_shortcode_select').val() == "contact-page" ) { return_text = bh_contact_page(); } else
                    if( jQuery('#bh_shortcode_select').val() == "pricing-table" ) { return_text = bh_pricing(); } 
                    ed.execCommand('mceInsertContent', 0, return_text);
                    jQuery('.bhshortcode-popup').remove();
                });
            });

        },
 
        createControl : function(n, cm) {
            return null;
        },
 
        getInfo : function() {
            return {
                longname : 'Bluehost Design Shortcode Buttons',
                author : 'Brandon Turpin',
                authorurl : 'http://www.brandonturpin.com',
                infourl : 'http://www.brandonturpin.com',
                version : "0.1"
            };
        }
    });
 
    // Register plugin
    tinymce.PluginManager.add( 'bhshortcodes', tinymce.plugins.Bhshortcodes );
})();


var bh_feature_box = function(){

/***
    var the_html = '<div class="form-section current">' +
            '<h2>How many total feature boxes?</h2>' +
            '<select name="total-boxes" id="total-boxes">' +
                '<option value="2">2</option>' +
                '<option value="3">3</option>' +
                '<option value="4">4</option>' +
                '<option value="5">5</option>' +
                '<option value="6">6</option>' +
                '<option value="7">7</option>' +
                '<option value="8">8</option>' +
                '<option value="9">9</option>' +
                '<option value="10">10</option>' +
                '<option value="11">11</option>' +
                '<option value="12">12</option>' +
                '<option value="13">13</option>' +
                '<option value="14">14</option>' +
                '<option value="15">15</option>' +
            '</select>' +
        '</div>  ' +
        '<div class="form-section">' +
            '<h2>How many boxes per row?</h2>' +
            '<select name="total-boxes">' +
                '<option value="one">2</option>' +
                '<option value="two">3</option>' +
                '<option value="three">4</option>' +
            '</select>' +
        '</div>' +
        '<div id="form_questions">' +
            '<div class="form-section">' +
                '<h2>Box 1 Details?</h2>' +
                '<p>Background Color</p>' +
                '<input type="text" name="bh_color">' +
                '<p>Icon</p>' +
                '<input type="text" name="bh_icon">' +
                '<p>Title</p>' +
                '<input type="text" name="bh_title">' +
                '<p>Image</p>' +
                '<input type="text" name="bh_image">' +
                '<p>Url</p>' +
                '<input type="text" name="bh_url">' +
            '</div>' +
        '</div>' +
        '<div class="form-navigation">' +
            '<button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>' +
            '<button type="button" class="next btn btn-info pull-right">Next &gt;</button>' +
            '<input type="submit" class="btn btn-default pull-right">' +
            '<span class="clearfix"></span>' +
        '</div>';


        var form_content = jQuery('#bh-shortcode-content');
        form_content.html(the_html);

        var form_sections = jQuery(".form-section");
        var selection_index = 0;
        var next_button = jQuery("button.next");
        var previous_button = jQuery("button.previous");
        var submit_button = jQuery(".form-navigation input[type=submit]");
        previous_button.hide();
        submit_button.hide();

        next_button.click(function(){
                jQuery(".form-section.current").removeClass("form-section current").addClass("form-section");
                selection_index++;
                jQuery(".form-section").eq(selection_index).removeClass("form-section").addClass("form-section current");
                if(selection_index + 1 == form_sections.length) { next_button.hide() } else { next_button.show() } 
                if(selection_index + 1 == form_sections.length) { submit_button.show() } else { submit_button.hide() } 
                if(selection_index == 0 ) { previous_button.hide(); } else { previous_button.show() }
                if(selection_index = 0 ) { update_questions() }
        });


        previous_button.click(function(){
                jQuery(".form-section.current").removeClass("form-section current").addClass("form-section");
                selection_index--;
                jQuery(".form-section").eq(selection_index).removeClass("form-section").addClass("form-section current");
                if(selection_index + 1 == form_sections.length) { next_button.hide() } else { next_button.show() } 
                if(selection_index + 1 == form_sections.length) { submit_button.show() } else { submit_button.hide() } 
                if(selection_index == 0 ) { previous_button.hide(); } else { previous_button.show() }
        });

**/
    return '[feature-box width="four" background="#3575D3" icon="icon-home" title="The Title" image="http://www.url.com" link="http://www.url.com"]<br />[feature-box width="four" background="#3575D3" icon="icon-home" title="The Title" image="http://www.url.com" link="http://www.url.com"]<br />[feature-box width="four" background="#3575D3" icon="icon-home" title="The Title" image="http://www.url.com" link="http://www.url.com"]<br />[feature-box width="four" background="#3575D3" icon="icon-home" title="The Title" image="http://www.url.com" link="http://www.url.com"]';

}

var bh_our_team = function() {

    return'[our-team width="four" image="#" name="Person Name" title="The Title" facebook="#" twitter="#" linkedin="#" pinterest="#" instagram="#" google="#" ]Add some content about this person here![/our-team][our-team width="four" image="#" name="Person Name" title="The Title" facebook="#" twitter="#" linkedin="#" pinterest="#" instagram="#" google="#" ]Add some content about this person here![/our-team][our-team width="four" image="#" name="Person Name" title="The Title" facebook="#" twitter="#" linkedin="#" pinterest="#" instagram="#" google="#" ]Add some content about this person here![/our-team][our-team width="four" image="#" name="Person Name" title="The Title" facebook="#" twitter="#" linkedin="#" pinterest="#" instagram="#" google="#" ]Add some content about this person here![/our-team]';

}

var bh_pricing = function() {

    return '[price columns="two" color=blue title="The Title" price=$9.99 price_sub="price sub" url="#"]<br />[price_feature] Feature One [/price_feature]<br />[price_feature] Feature Two [/price_feature]<br />[price_feature url="#"] Feature Three w/link [/price_feature]<br />[price_feature url="#"] Feature Four w/link [/price_feature]<br />[price_feature] Feature Five [/price_feature]<br />[price_feature url="#"] Feature Six w/link [/price_feature]<br />[/price][price columns="two" color=blue title="The Title" price=$9.99 price_sub="price sub" url="#"]<br />[price_feature] Feature One [/price_feature]<br />[price_feature] Feature Two [/price_feature]<br />[price_feature url="#"] Feature Three w/link [/price_feature]<br />[price_feature url="#"] Feature Four w/link [/price_feature]<br />[price_feature] Feature Five [/price_feature]<br />[price_feature url="#"] Feature Six w/link [/price_feature]<br />[/price]';

}

var bh_contact_page = function() {

    return '[contact-page map_src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12167.223675037138!2d-111.6822331!3d40.3244647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb7de1d46eb03cb9!2sBluehost+Inc!5e0!3m2!1sen!2sus!4v1469815115611" map_width="100%" map_height="500px" formID="1" address1="560 Timpanogos Pkwy" address2="Orem, UT 84097" phone="(888) 401-4678" fax="(888) 401-4678" email="design@bluehost.com"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris[/contact-page]';

}

