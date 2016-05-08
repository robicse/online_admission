<?php
	session_start();
	error_reporting(0);
	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';
	
	if(logged_in() === true){
		$session_user_id = $_SESSION['user_id'];
		$user_data = user_data($session_user_id, 'user_id', 'program', 'semester', 'username', 'password', 'first_name', 'last_name','gender','marital','email','mobile_number', 'type', 'allow_email', 'profile','ssc_degree', 'ssc_group', 'ssc_roll', 'ssc_pass', 'ssc_marks', 'ssc_gpa', 'ssc_board', 'hsc_degree', 'hsc_group', 'hsc_roll', 'hsc_pass', 'hsc_mark', 'hsc_gpa', 'hsc_board', 'father_name', 'mother_name', 'guardian_name', 'permanent_address', 'present_address', 'mailing_address');		
		if(user_active($user_data['username']) === false){
			session_destroy();
			header('Location: index.php');
			exit();
		}
	}
	
	$errors = array();
?>