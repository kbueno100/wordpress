// Creates a new plugin class and a custom listbox
tinymce.create('tinymce.plugins.shortcodes', {
    createControl: function(n, cm) {
        switch (n) {
            case 'shortcodes':
                var mlb = cm.createListBox('shortcodes', {
                    title : 'Shortcodes',
                    onselect : function(v) {
                    
                        // Get selected text
                        tinyMCE.execCommand('mceInsertContent',false,v);
                    
                    }
                });
                
                // Add some values to the list box
                mlb.add('One Column', '[one_column][/one_column]');
                mlb.add('One Half ', '[one_half][/one_half]');
                mlb.add('One Half Last', '[one_half_last][/one_half_last]');
                mlb.add('One Third', '[one_third][/one_third]');
                mlb.add('One Third Last', '[one_third_last][/one_third_last]');
                mlb.add('One Third Big', '[one_third_big][/one_third_big]');
                mlb.add('One Third Big Last', '[one_third_big_last][/one_third_big_last]');
                mlb.add('One Fourth', '[one_fourth][/one_fourth]');
                mlb.add('One Fourth Last', '[one_fourth_last][/one_fourth_last]');
                mlb.add('One Fifth', '[one_fifth][/one_fifth]');
                mlb.add('One Fifth Last', '[one_fifth_last][/one_fifth_last]');
                mlb.add('One Sixth', '[one_sixth][/one_sixth]');
                mlb.add('One Sixth Last', '[one_sixth_last][/one_sixth_last]');
                mlb.add('Inner Content', '[inner_content][/inner_content]');
                mlb.add('Inner Content Last', '[inner_content_last][/inner_content_last]');
                mlb.add('Horizontal Line', '[horizontal_line]');
                mlb.add('Simple Notice', '[simple_notice][/simple_notice]');
                mlb.add('Simple Error', '[simple_error][/simple_error]');
                mlb.add('Simple Info', '[simple_info][/simple_info]');
                mlb.add('Simple Success', '[simple_success][/simple_success]');
                mlb.add('Cancel List', '[cancel_list][/cancel_list]');
                mlb.add('Check List', '[checklist_list][/checklist_list]');
                mlb.add('Check List 2', '[check_list][/check_list]');
                mlb.add('Round List', '[round_list][/round_list]');
                mlb.add('Facebook Social Link', '[social_facebook][/social_facebook]');
                mlb.add('Twitter Social Link', '[social_twitter][/social_twitter]');
                mlb.add('RSS Social Link', '[social_feed][/social_feed]');
                mlb.add('Contact Phone', '[contact_phone][/contact_phone]');
                mlb.add('Contact Fax', '[contact_fax][/contact_fax]');
                mlb.add('Contact Email', '[contact_email][/contact_email]');
                mlb.add('Button Blue', '[button color="blue" size="small" type=" "][/button]');
                mlb.add('Button Orange', '[button color="orange" size="small" type=" "][/button]');
                mlb.add('Button Green', '[button color="green" size="small" type=" "][/button]');
                mlb.add('Button Pink', '[button color="pink" size="small" type=" "][/button]');
                mlb.add('Button Black', '[button color="black" size="small" type=" "][/button]');
                mlb.add('Button Yellow', '[button color="yellow" size="small" type=" "][/button]');
                mlb.add('Button Red', '[button color="red" size="small" type=" "][/button]');
                mlb.add('Button Purple', '[button color="purple" size="small" type=" "][/button]');
                mlb.add('Button Dark Blue', '[button color="dark-blue" size="small" type=" "][/button]');
                mlb.add('Button Light Blue', '[button color="light-blue" size="small" type=" "][/button]');	
				mlb.add('Button Blue Big', '[button color="blue" size="big" type=" "][/button]');
                mlb.add('Button Orange Big', '[button color="orange" size="big" type=" "][/button]');
                mlb.add('Button Green Big', '[button color="green" size="big" type=" "][/button]');
                mlb.add('Button Pink Big', '[button color="pink" size="big" type=" "][/button]');
                mlb.add('Button Black Big', '[button color="black" size="big" type=" "][/button]');
                mlb.add('Button Yellow Big', '[button color="yellow" size="big" type=" "][/button]');
                mlb.add('Button Red Big', '[button color="red" size="big" type=" "][/button]');
                mlb.add('Button Purple Big', '[button color="purple" size="big" type=" "][/button]');
                mlb.add('Button Dark Blue Big', '[button color="dark-blue" size="big" type=" "][/button]');
                mlb.add('Button Light Blue Big', '[button color="light-blue" size="big" type=" "][/button]');
                mlb.add('Tab Group', '[tabgroup][/tabgroup]');
                mlb.add('Tab', '[tab title="Your Title Goes Here"][/tab]');
               
				
                mlb.add('Pricing Box Green', '[pricing_box title="Starter" price="$10 per month" color="green"]<ul><li>List Sample</li></ul>[/pricing_box]');
                mlb.add('Pricing Box Orange', '[pricing_box title="Starter" price="$10 per month" color="orange"]<ul><li>List Sample</li></ul>[/pricing_box]');
                mlb.add('Pricing Box Blue', '[pricing_box title="Starter" price="$10 per month" color="blue"]<ul><li>List Sample</li></ul>[/pricing_box]');
                mlb.add('Pricing Box Red', '[pricing_box title="Starter" price="$10 per month" color="red"]<ul><li>List Sample</li></ul>[/pricing_box]');
                mlb.add('Pricing Box Purple', '[pricing_box title="Starter" price="$10 per month" color="purple"]<ul><li>List Sample</li></ul>[/pricing_box]');
                mlb.add('Text Align Left', '[text_align_left][/text_align_left]');
				 mlb.add('Image', '[image source="" align=""]');
                
            return mlb;                

        }
        return null;
    }
});

tinymce.PluginManager.add('shortcodes', tinymce.plugins.shortcodes);
tinyMCE.init({
  plugins : 'shortcodes', 
  theme_advanced_buttons1 : 'shortcodes' 
});