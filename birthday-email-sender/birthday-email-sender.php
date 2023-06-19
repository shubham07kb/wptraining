<?php
/**
 * Plugin Name: Birthday Email Sender
 * Description: This plugin sends an email to the user on his birthday.
 * Version: 0.0.1-dev (18-06-2023)
 * Author: Shubham Kumar Bansal
 * Author URI: https://shubkb.me
 */

 if(!defined('ABSPATH')){
    exit;
 }
 function birthday_email_sender_activation(){
    
 }
 function birthday_email_sender_deactivation(){
     
 }
 register_activation_hook(__FILE__,'birthday_email_sender_activation');
 register_deactivation_hook(__FILE__,'birthday_email_sender_deactivation');
?>