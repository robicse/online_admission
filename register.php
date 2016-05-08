<?php 
	include 'core/init.php';
	logged_in_redirect();
	ob_start();
	include 'includes/overall/header.php'; 
	
	if(empty($_POST) === false){
		$required_fields = array('program', 'username', 'semester', 'password', 'password_again', 'first_name', 'last_name', 'gender', 'marital', 'email', 'mobile_number','ssc_degree', 'ssc_group', 'ssc_roll','ssc_pass', 'ssc_marks', 'ssc_gpa', 'ssc_board', 'hsc_degree', 'hsc_group', 'hsc_roll', 'hsc_pass', 'hsc_mark', 'hsc_gpa', 'hsc_board','father_name', 'mother_name', 'guardian_name', 'permanent_address', 'present_address', 'mailing_address');		
		foreach ($_POST as $key=>$value){
             if (empty($value) && in_array($key, $required_fields) === true){
				$errors[] = 'Fields marked with an asterisk are required';
				break 1;
              }
           }

		if(empty($errors) === true)
		{
			if(user_exists($_POST['username']) === true){
				$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
			}
			if(preg_match("/\\s/", $_POST['username']) == true){
				$errors[] = 'Your username must not contain any spaces.';
			}
			if(strlen($_POST['username']) <6){
				$errors[] = 'Your password must not be least 6 characters';
			}

			if($_POST['password'] !== $_POST['password_again']){
				$errors[] = 'Your password do not match';
			}

			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
				$errors[] = 'A valid email address is require';
			}
			if(email_exists($_POST['email']) === true){
				$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already use.';
			}
			
		}
	}	
?>		

<?php 
	if (isset($_GET['success']) && empty($_GET['success'])){
		echo 'You have been register successfully!';
		
	}else{
		if(empty($_POST) === false && empty($errors) === true){
			$register_data = array(
				'program' 		=> $_POST['program'],
				'semester' 		=> $_POST['semester'],
				'username' 		=> $_POST['username'],
				'password' 		=> $_POST['password'],
				'first_name' 	=> $_POST['first_name'],
				'last_name' 	=> $_POST['last_name'],
				'gender' 		=> $_POST['gender'],
				'marital' 		=> $_POST['marital'],
				'email' 		=> $_POST['email'],
				'email_code' 	=> md5($_POST['username'] + microtime()),
				'mobile_number' => $_POST['mobile_number'],								
				'ssc_degree' 	=> $_POST['ssc_degree'],
				'ssc_group' 	=> $_POST['ssc_group'],
				'ssc_roll' 		=> $_POST['ssc_roll'],
				'ssc_pass' 		=> $_POST['ssc_pass'],
				'ssc_marks'		=> $_POST['ssc_marks'],
				'ssc_gpa' 		=> $_POST['ssc_gpa'],
				'ssc_board'		=> $_POST['ssc_board'],
				'hsc_degree'	=> $_POST['hsc_degree'],
				'hsc_group'		=> $_POST['hsc_group'],
				'hsc_roll'		=> $_POST['hsc_roll'],
				'hsc_pass'		=> $_POST['hsc_pass'],
				'hsc_mark'		=> $_POST['hsc_mark'],
				'hsc_gpa'		=> $_POST['hsc_gpa'],
				'hsc_board'		=> $_POST['hsc_board'],
				'father_name'	=> $_POST['father_name'],
				'mother_name'	=> $_POST['mother_name'],
				'guardian_name'	=> $_POST['guardian_name'],
				'permanent_address'	=> $_POST['permanent_address'],
				'present_address'=> $_POST['present_address'],
				'mailing_address'=> $_POST['mailing_address'],
			);
			 register_user($register_data);
             header('Location: register.php?success');
             exit();			
		}
		else if (empty($errors) === false) {
            echo output_errors($errors);
        }
?>
		
<div class="form_validation">	

	<h1>Application For Admission</h1>	
	<div id="page-wrap">	
		<div id="example-one">
			<ul class="nav">
				<li class="nav-one"><a href="#featured" class="current">Admission</a></li>
				<li class="nav-two"><a href="#core">Booking</a></li>
			</ul>
				
			<div class="list-wrap">		
				<ul id="featured">
					<!--admission form start of this template-->					
					<div class="admission_bd">
						<form id="info" method="post" action="">
							<ul>
								<li>
									<label>Name of the program<span style="color:red">*</span>:</label> 
									<input type="text" name="program" />
								</li>
								
								
								<li>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<b>Summer Semester</b><span style="color:red">*</span>:
									<input type="checkbox" name="semester" value="Summer Semester"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
									<b>Winter Semester</b><span style="color:red">*</span>:
									<input type="checkbox" name="semester" value="Winter Semester"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
									<b>Full Semester</b><span style="color:red">*</span>:
									<input type="checkbox" name="semester" value="Full Semester"></input>
								</li>
								
								<li>
									 <label>Username<span style="color:red">*</span>:</label> 
									<input type="text" name="username" />
								</li>
								<li>
									 <label>Password<span style="color:red">*</span>:</label> 
									<input type="password" name="password" />
								</li>
								<li>
									 <label>Password again<span style="color:red">*</span>:</label> 
									<input type="password" name="password_again" />
								</li>
								<li>
									 <label>First name<span style="color:red">*</span>:</label> 
									<input type="text" name="first_name" />
								</li>
								<li>
									 <label>last name:</label> 
									<input type="text" name="last_name" />
								</li>

				
				<!--<li>
						<label>Date of birth<span style="color:red">*</span>:</label> 
						<select name="Month">

							<option value="1">1</option>

							<option value="2">2</option>

							<option value="day" selected="selected">Day</option>

						</select>
						<select name="Month">

							<option value="january">January</option>

							<option value="february">February</option>

							<option value="month" selected="selected">Month</option>

						</select>
						<select name="year">

							<option value="Rupees">2014</option>

							<option value="Euro">2013</option>

							<option value="year" selected="selected">Year</option>

						</select>
					</li>-->
								<li>
								 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<b>Gender</b><span style="color:red">*</span>: 
									<input type="checkbox" name="gender" value="Male">Male</input>
									<input type="checkbox" name="gender" value="Female">Female</input>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<b>Marital Status</b><span style="color:red">*</span>: 
									<input type="checkbox" name="marital" value="Single">Single</input>
									<input type="checkbox" name="marital" value="Married">Married</input>
								</li>		
								<li>
									<label>Email address<span style="color:red">*</span>:</label> 
									<input type="text" name="email" />
								</li>
								
								<li>
									 <label>Mobile Number<b><span style="color:red">*</span></b>:</label> 
									<input type="text" name="mobile_number" />
								</li>

								<li>
									<label>Father Name<span style="color:red">*</span>:</label> 
									<input type="text" name="father_name" />
								</li>

								<li>
									<label>Mother Name<span style="color:red">*</span>:</label> 
									<input type="text" name="mother_name" />
								</li>

								<li>
									<label>Guardian Name<span style="color:red">*</span>:</label> 
									<input type="text" name="guardian_name" />
								</li>

								<li>
									<label>Permanent Address<span style="color:red">*</span>:</label> 
									<input type="text" name="permanent_address" />
								</li>

								<li>
									<label>Present Address<span style="color:red">*</span>:</label> 
									<input type="text" name="present_address" />
								</li>

								<li>
									<label>Mailing Address<span style="color:red">*</span>:</label> 
									<input type="text" name="mailing_address" />
								</li>
							

						<h3>Educational Information</h3>
						
								<li>
									<label></label><b><span style="color:red"></span></b><b>S.S.C level</b>
								</li>
								<li>
									<label>Exam/Degree<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_degree" />
								</li>
								<li>
									<label>Group<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_group" />
								</li>
								<li>
									<label>Roll No<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_roll" />
								</li>
								<li>
									<label>Passing Year<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_pass" />
								</li>
								<li>
									<label>Total Marks<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_marks" />
								</li>
								<li>
									<label>CGPA/GPA<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_gpa" />
								</li>
								<li>
									<label>Board/University<b><span style="color:red">*:</span></b></label>
									<input type="text" name="ssc_board" />
								</li>
								
								
								
								<li>
									<label></label><b><span style="color:red"></span></b> <b>H.S.C level</b>
								</li>
								<li>
									<label>Exam/Degree<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_degree" />
								</li>
								<li>
									<label>Group<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_group" />
								</li>
								<li>
									<label>Roll No<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_roll" />
								</li>
								<li>
									<label>Passing Year<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_pass" />
								</li>
								<li>
									<label>Total Marks<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_mark" />
								</li>
								<li>
									<label>CGPA/GPA<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_gpa" />
								</li>
								<li>
									<label>Board/University<b><span style="color:red">*:</span></b></label>
									<input type="text" name="hsc_board" />
								</li>	
		<!-- form fill up end -->
								
								<li>
									<label><input type="submit" value="register" /></label> 								
								</li>
							</ul>
						</form>
					</div>
				</ul>
					
				<ul id="core" class="hide">
					<div class="booking">
						<div class="booking_four">
							<a href="index.php"><img src="img/CM1.jpg" alt="" /></a>
						</div>
						
						<div class="booking_four">
							<a href="view_booking.php"><h3 class="bk_now">VIEW COMPLETE LIST OF BOOKING & Condition</h3></a>						
						</div>
						
						<div class="booking_four">
							<a href=""><h3 class="bk_now">Currently Unavailable Dates flexible? </h3>	</a>						
						</div>
						
						<div class="booking_four">
							<h3 class="bk_now">PACKAGES FROM: $65.00 USD</h3>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="book_now.php"><input type="button" value="Book NOW" /></a>
						</div>
						
					</div>
				</ul>	
			</div> <!-- END List Wrap -->		
		</div> <!-- END Organic Tabs (Example One) -->	
	</div>		
</div>

	
<?php 
}	include 'includes/overall/footer.php'; 
?>