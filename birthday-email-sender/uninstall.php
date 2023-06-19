<?php 
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.'_birthday_extra';
	$q = "DROP TABLE IF EXISTS `$table_name`;";
	$wpdb->query($q);
?>