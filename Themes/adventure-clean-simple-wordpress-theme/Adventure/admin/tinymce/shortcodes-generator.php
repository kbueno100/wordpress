<?php

// add shortcode buttons to the tinyMCE editor row 3
function add_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin');
     add_filter('mce_buttons', 'register_button');
   }
}
//setup array of shortcode buttons to add
function register_button($buttons) {
  array_push($buttons, "one_column");
  array_push($buttons, "one_half");
  array_push($buttons, "one_half_last");
  array_push($buttons, "one_third");
  array_push($buttons, "one_third_last");
  array_push($buttons, "one_third_big");
  array_push($buttons, "one_third_big_last");
  array_push($buttons, "one_fourth");
  array_push($buttons, "one_fourth_last");
  array_push($buttons, "one_fifth");
  array_push($buttons, "one_fifth_last");
  array_push($buttons, "one_sixth");
  array_push($buttons, "one_sixth_last");
  array_push($buttons, "inner_content");
  array_push($buttons, "inner_content_last");
  array_push($buttons, "horizontal_line");
  array_push($buttons, "simple_notice");
  array_push($buttons, "simple_error");
  array_push($buttons, "simple_info");
  array_push($buttons, "simple_success");
  array_push($buttons, "cancel_list");
  array_push($buttons, "checklist_list");
  array_push($buttons, "check_list");
  array_push($buttons, "round_list");
  array_push($buttons, "social_facebook");
  array_push($buttons, "social_twitter");
  array_push($buttons, "social_feed");
  array_push($buttons, "contact_phone");
  array_push($buttons, "contact_fax");
  array_push($buttons, "contact_email");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "button");
  array_push($buttons, "tabgroup");
  array_push($buttons, "tab");
  array_push($buttons, "pricing_box");
  array_push($buttons, "pricing_box");
  array_push($buttons, "pricing_box");
  array_push($buttons, "pricing_box");
  array_push($buttons, "pricing_box");
  array_push($buttons, "text_align_left");
  array_push($buttons, "image");

 
  array_push($buttons, "shortcodes");
  return $buttons;
}
//setup array for tinyMCE editor interface
function add_plugin($plugin_array) {
   $plugin_array['One Column'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Half'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Half Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Third'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Third Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Third Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Third Big Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Fourth'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Fourth Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Fifth'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Fifth Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Sixth'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['One Sixth Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Inner Content'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Inner Content Last'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Horizontal Line'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Simple Notice'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Simple Error'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Simple Info'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Simple Success'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Cancel List'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Check List'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Check List 2'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Round List'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Social Facebook'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Social Twitter'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Social Feed'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Contact Phone'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Contact Fax'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Contact Email'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Blue'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Orange'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Green'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Pink'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Black'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Yellow'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Red'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Purple'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Dark Blue'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Light Blue'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Blue Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Orange Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Green Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Pink Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Black Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Yellow Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Red Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Purple Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Dark Blue Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Button Light Blue Big'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Tab Group'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Tab'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Pricing Box Green'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Pricing Box Orange'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Pricing Box Blue'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Pricing Box Red'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Pricing Box Purple'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['Text Align Left'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   $plugin_array['image'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   
   $plugin_array['shortcodes'] = get_template_directory_uri().'/admin/tinymce/shortcodes.js';
   return $plugin_array;
}
add_action('init', 'add_button'); // add th
?>