<?php	
	function user_count(){
		return mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `active` = 1"),0);
	}
?>