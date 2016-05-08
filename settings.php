<?php 
	include 'core/init.php';
	protect_page();
	ob_start();
	include 'includes/overall/header.php';

	if(empty($_POST) === false){
		$required_fields = array('program', 'first_name', 'email');		
		foreach ($_POST as $key=>$value)
           {
				if (empty($value) && in_array($key, $required_fields) === true)
				{
					$errors[] = 'Fields marked with an asterisk are required';
					break 1;
				}
           }
			if (empty($errors) === true) {
				 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
					 $errors[] = 'A valid email address is required!';
				 } else if (email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
					 $errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
				 }
			}			
	}
?>
	<h1>Updates your settings</h1>  

<?php
	if(isset($_GET['success']) === true && empty($_GET['success']) === true){
		echo 'Your details have been updated!';
	}else{
	
		if(empty($_POST) === false && empty($errors) === true){
			$update_data = array(
				'program' 		=> $_POST['program'], 
				'first_name' 	=> $_POST['first_name'],
				'last_name'  	=> $_POST['last_name'],
				'email'		 	=> $_POST['email'],
				'allow_email'	=> ($_POST['allow_email'] == 'on') ? 1 : 0
			);
			update_user($update_data);
			header('Location:settings.php?success');
			exit();
		}else if(empty($errors) === false){
			echo output_errors($errors);
		}
		
?>

<div class="form_validation">		
	<div class="admission_bd">
		<form id="info" method="post" action="">
			<ul>
				<li>
					<label><b>Name of the program:</b></label> 
					<input type="text" name="program" value="<?php echo $user_data['program']; ?>"/>
				</li>
				<li>
					<label><b>First Name:</b></label> 
					<input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>"/>
				</li>
				<li>
					<label><b>Last Name:</b></label> 
					<input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>">
				</li>
				<li>
					<label><b>Email:</b></label> 
					<input type="text" name="email" value="<?php echo $user_data['email']; ?>"/>
				</li>
				<li>
					<label>Would you like to receive email from us?</label>
					<input type="checkbox" name="allow_email" <?php if($user_data['allow_email'] == 1){echo 'checked="checked"';} ?> />
				</li>
				<li>
					<label>`</label> <input type="submit" value="Update" />
					
				</li>
			</ul>
		</form>
	</div>
</div>
	
<?php
}	
	include 'includes/overall/footer.php'; 

?>