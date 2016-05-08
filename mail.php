<?php 
	include 'core/init.php';
	protect_page();
	admin_protect();
	include 'includes/overall/header.php'; 
?>		
	<h1>Email all users</h1>
	
<?php
	if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<p>Email has been sent, Please check your mail.</p>
	<h3>If you mail does not sent, please inform our mail address.</h3>
<?php 
	}else{
		if(empty($_POST) === false) {
			if(empty($_POST['subject']) === true) {
				$errors[] = 'Subject is required';
			}
			if(empty($_POST['body']) === true) {
				$errors[] = 'Body is required';
			}
			if(empty($errors) === false){
				echo output_errors(errors);
			}else {
				mail_users($_POST['subject'], $_POST['body']);
				header('Location:mail.php?success');
				exit();				
			}
		}
?>
	
	<form action="" method="post">
		<ul>
			<li>
				Subject*:<br>
				<input type="text" name="subject" />
			</li>
			<li>
				Body*:<br>
				<textarea name="body" id="" cols="30" rows="5"></textarea>
			</li>
			<li>
				<input type="submit" value="Send" />
			</li>
		</ul>
	</form>
	

<?php
}
	include 'includes/overall/footer.php'; 
?>