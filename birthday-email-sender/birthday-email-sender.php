<?php

/**
 * Plugin Name: Birthday Email Sender
 * Description: This plugin sends an email to the user on his birthday.
 * Version: 0.0.1-dev (18-06-2023)
 * Author: Shubham Kumar Bansal
 * Author URI: https://shubkb.me
 * php version 8.4
 *
 * @category Productivity
 * @package  Birthday_Email_Sender
 * @author   "Shubham Kumar Bansal <kumarbansal.shubham07@gmail.com>"
 * @license  GPL-2.0+ License
 * @link     https://shubkb.me
 */

defined('ABSPATH') ?: exit;

/**
 * Activate the Birthday Email Sender plugin.
 *
 * This function is called when the plugin is activated and 
 * performs any necessary setup or initialization.
 *
 * @since 1.0.0
 * 
 * @return void
 */
function Birthday_Email_Sender_activation()
{
    global $wpdb, $table_prefix;
    $table_name = $table_prefix . '_birthday_extra';
    $q = "CREATE TABLE IF NOT EXISTS `$table_name` (
			`ID` INT NOT NULL AUTO_INCREMENT , 
			`email` VARCHAR(50) NOT NULL , 
			`name` VARCHAR(50) NOT NULL , 
			`dob` DATE NOT NULL , 
			`msgtype` INT NOT NULL , 
			`msg` TEXT NOT NULL , 
			PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
    $wpdb->query($q);
}

/**
 * Deactivate the Birthday Email Sender plugin.
 *
 * This function is called when the plugin is deactivated and 
 * performs any necessary cleanup or deactivation tasks.
 *
 * @since 1.0.0
 * 
 * @return void
 */
function Birthday_Email_Sender_deactivation()
{
}
register_activation_hook(__FILE__, 'Birthday_Email_Sender_activation');
register_deactivation_hook(__FILE__, 'Birthday_Email_Sender_deactivation');
?>