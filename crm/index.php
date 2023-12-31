<?php
/*
Plugin Name: CRM Plugin
Description: Plugin para gestionar contactos y CRM.
Version: 1.0
Author: Larico for PlatformBuilder.
*/

  

register_activation_hook(__FILE__, 'crm_plugin_activate');
function crm_plugin_activate() {
    require_once('inc/db.php');
}

  
add_action('admin_menu', 'crm_plugin_menu');

function crm_plugin_menu() {
    add_menu_page(
        'CRM',
        'CRM',
        'manage_options',
        'crm-overview',
        'crm_overview_page'
    );

    add_submenu_page(
        'crm-overview',
        'CRM Overview',
        'CRM Overview',
        'manage_options',
        'crm-overview',
        'crm_overview_page'
    );

    add_submenu_page(
        'crm-overview',
        'New Contact',
        'New Contact',
        'manage_options',
        'new-contact',
        'new_contact_page'
    );
 
   

    add_submenu_page(
        'crm-overview',
        'CRM Settings',
        'CRM Settings',
        'manage_options',
        'crm-settings',
        'crm_settings_page'
    );

     
    add_submenu_page(
        'crm-overview',
        '',
        '',
        'manage_options',
        'edit-contact',
        'edit_contact_page',
        15
    );

   
}

 


require_once plugin_dir_path(__FILE__) . 'inc/assets.php';
 
require_once plugin_dir_path(__FILE__) . 'inc/overview.php';

require_once plugin_dir_path(__FILE__) . 'inc/crm-settings.php';


 

// Add New Contact
function new_contact_page() {  
    require_once plugin_dir_path(__FILE__) . 'inc/contacts/add.php';
}
function edit_contact_page() { 
    require_once plugin_dir_path(__FILE__) . 'inc/contacts/edit.php';
}





 