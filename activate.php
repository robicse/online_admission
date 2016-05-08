<?php 
	include 'core/init.php';
	logged_in_redirect();
	include 'includes/overall/header.php'; 
	if (isset($_GET['success']) && empty($_GET['success']) === true){
?>

<h2>Thanks, We have activated your account...</h2>
<p>You are free to login!</p>

<?php		
} else if (isset($_GET['email'], $_GET['email_code']) === true){
		$email	 	= trim($_GET['email']);
		$email_code	= trim($_GET['email_code']);
		
		if (user_exists($username) === false){	
			$error[] = 'Oops, something went wrong and we could not find that email address!';			
		} 
		else if (activate($username, $email_code) === false) {
			$error[] = 'We had problems activating your account';
		}
		/*=============================================*/
		if (empty($errors) === false){
?>

	 <h2>Oops..</h2>
	 
<?php
	echo output_errors($errors);
	}else {
		header('location: activate.php?success');
		exit();
	}
	
	/*=============================================*/
	}else{
		header('Location: index.php');
		exit();
	}
	
	include 'includes/overall/footer.php'; 
?>