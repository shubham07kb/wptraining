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

global $wpdb, $table_prefix;
$table_name = $table_prefix.'_birthday_extra';
$q = "DROP TABLE IF EXISTS `$table_name`;";
$wpdb->query($q);
?>
