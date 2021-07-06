<?php 
function add_reskinning_splitter_admin_page() {
    $icon_url =  plugin_dir_url( __FILE__ ). '/imgs/icon.png';
    add_menu_page("Re-skinning Url splitter", "Re-skinning SP", "administrator", "splitteradminpage", "reskinning_splitter_admin_page", $icon_url, 3);
}
add_action('admin_menu', 'add_reskinning_splitter_admin_page' );
function display_reskinning_url_one(){ ?>
    <input type="text" name="reskinning_url_one" style="min-width: 500px;" placeholder="The First URL" id="reskinning_url_one" value="<?php echo get_option('reskinning_url_one'); ?>" />
    <input type="text" name="reskinning_url_one_percent" style="min-width: 60px;" placeholder="Percentage" id="reskinning_url_one_percent" value="<?php echo get_option('reskinning_url_one_percent'); ?>" />
    <p class="description"><?php _e('Enter the first URL and the percentage of visitors you want to direct to it'); ?></p>
<?php }
function display_reskinning_url_one_percent(){}
function display_reskinning_url_two(){ ?>
    <input type="text" name="reskinning_url_two" style="min-width: 500px;" placeholder="The Second URL" id="reskinning_url_two" value="<?php echo get_option('reskinning_url_two'); ?>" />
    <input type="text" name="reskinning_url_two_percent" style="min-width: 60px;" placeholder="Percentage" id="reskinning_url_two_percent" value="<?php echo get_option('reskinning_url_two_percent'); ?>" />
    <p class="description"><?php _e('Enter the second URL and the percentage of visitors you want to direct to it'); ?></p>
<?php }
function display_reskinning_url_two_percent(){}
function display_reskinning_url_three(){ ?>
    <input type="text" name="reskinning_url_three" style="min-width: 500px;" placeholder="The Second URL" id="reskinning_url_three" value="<?php echo get_option('reskinning_url_three'); ?>" />
    <input type="text" name="reskinning_url_three_percent" style="min-width: 60px;" placeholder="Percentage" id="reskinning_url_three_percent" value="<?php echo get_option('reskinning_url_three_percent'); ?>" />
    <p class="description"><?php _e('Enter the third URL and the percentage of visitors you want to direct to it'); ?></p>
<?php }
function display_reskinning_url_three_percent(){}
function display_reskinning_url_four(){ ?>
    <input type="text" name="reskinning_url_four" style="min-width: 500px;" placeholder="The Second URL" id="reskinning_url_four" value="<?php echo get_option('reskinning_url_four'); ?>" />
    <input type="text" name="reskinning_url_four_percent" style="min-width: 60px;" placeholder="Percentage" id="reskinning_url_four_percent" value="<?php echo get_option('reskinning_url_four_percent'); ?>" />
    <p class="description"><?php _e('Enter the fourth URL and the percentage of visitors you want to direct to it'); ?></p>
<?php }
function display_reskinning_url_four_percent(){}
function display_reskinning_splitter_button_text(){ ?>
    <input type="text" name="reskinning_splitter_button_text" style="min-width: 600px;" placeholder="Button text here" id="reskinning_splitter_button_text" value="<?php echo get_option('reskinning_splitter_button_text'); ?>" />
    <p class="description"><?php _e('Enter your CPA button text here'); ?></p>
<?php }
function display_reskinning_splitter_button_description(){ ?>
    <input type="text" name="reskinning_splitter_button_description" style="min-width: 600px;" placeholder="Button description here" id="reskinning_splitter_button_description" value="<?php echo get_option('reskinning_splitter_button_description'); ?>" />
    <p class="description"><?php _e('Enter your CPA button description  here'); ?></p>
<?php }
function display_reskinning_splitter_button_color(){ ?>
    <input type="text" name="reskinning_splitter_button_color" style="min-width: 200px;" placeholder="Button Color here" id="reskinning_splitter_button_color" value="<?php echo get_option('reskinning_splitter_button_color'); ?>" />
    <p class="description"><?php _e('Enter your CPA button <code>HEX COLOR CODE</code> here - <code>Example: eb4034</code>'); ?></p>
    <p class="description"><?php _e('You can use <a target="_blank" href="https://www.google.com/search?q=color+picker">Google Color Picker</a> to choose a nice color'); ?></p>
<?php }
function display_splitter_panel_fieldset(){
    add_settings_section("reskinning_splitter_section", null, null, "reskinning_splitter_options");
    add_settings_field("reskinning_splitter_button_text", "Button Text", "display_reskinning_splitter_button_text", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_splitter_button_text");	
    add_settings_field("reskinning_splitter_button_description", "Button Desctiption", "display_reskinning_splitter_button_description", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_splitter_button_description");	
    add_settings_field("reskinning_splitter_button_color", "Button Color", "display_reskinning_splitter_button_color", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_splitter_button_color");	
    add_settings_field("reskinning_url_one", "URL One", "display_reskinning_url_one", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_url_one");	
    register_setting("reskinning_splitter_section", "reskinning_url_one_percent");	
    add_settings_field("reskinning_url_two", "URL Two", "display_reskinning_url_two", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_url_two");	
    register_setting("reskinning_splitter_section", "reskinning_url_two_percent");	
    add_settings_field("reskinning_url_three", "URL Three", "display_reskinning_url_three", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_url_three");	
    register_setting("reskinning_splitter_section", "reskinning_url_three_percent");	
    add_settings_field("reskinning_url_four", "URL Four", "display_reskinning_url_four", "reskinning_splitter_options", "reskinning_splitter_section");  
    register_setting("reskinning_splitter_section", "reskinning_url_four");	
    register_setting("reskinning_splitter_section", "reskinning_url_four_percent");	
}add_action("admin_init", "display_splitter_panel_fieldset");
include( plugin_dir_path( __FILE__ ) . 'botsplit.re-skinning.php'); 

