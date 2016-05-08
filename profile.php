<?php 
	include 'core/init.php';
	protect_page();
	include 'includes/overall/header.php'; 
?>		

	<div class="form_validation">	
		<!--<h2 class="add_color_results"><?php echo $user_data['first_name']; ?> profile</h2>	-->	
		<h1><?php echo $user_data['first_name']; ?> profile</h1>		
		<div id="page-wrap_results">	
			<div class="profile">
				<?php 
					if(isset($_FILES['profile']) === true) {
						if(empty($_FILES['profile']['name']) === true) {
							echo 'Please choose a file';
						}else{
							$allowed	= array('jpg', 'jpeg', 'gif', 'png');
							
							$file_name = $_FILES['profile']['name'];
							$file_extn = strtolower(end(explode('.', $file_name)));
							$file_temp = $_FILES['profile']['tmp_name'];
							
							if(in_array($file_extn, $allowed) === true) {
								change_profile_image($session_user_id, $file_temp, $file_extn);
							}else{
								echo 'Incorrect file type. Allowed: ';
								echo implode(', ', $allowed);
							}
						}
					}		
					if(empty($user_data['profile']) === false) {
						echo '<img src="', $user_data['profile'], '" alt="', $user_data['first_name'],'\'s profile Image" />';
					}
				?>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="profile" /><input type="submit" value="Submit"/>
				</form>
			</div>
			
				<form id="info" method="post" action="book_now.php">
					<ul>
						<li>
							<label>Name of the program:</label> 
							<?php echo $user_data['program']; ?>
						</li>
						<li>
							<label>Program Validation:</label> 
							<?php echo $user_data['semester']; ?>
						</li>
						<li>
							<label>Full Name:</label> 
							<?php echo $user_data['first_name']; ?>&nbsp;<?php echo $user_data['last_name']; ?>
						</li>
						<li>
							<label>Gender:</label>
							<?php echo $user_data['gender']; ?>			
						</li>
						<li>
							<label>Marital Status:</label>
							<?php echo $user_data['marital']; ?>
						</li>
						<li>
							<label>Email:</label> 
							<?php echo $user_data['email']; ?>
						</li>
						<li>
							<label>Mobile Number:</label> 
							<?php echo $user_data['mobile_number']; ?>
						</li>

						<li>
							<label>Father Name:</label> 
							<?php echo $user_data['father_name']; ?>
						</li>
						<li>
							<label>Mother Name:</label> 
							<?php echo $user_data['mother_name']; ?>
						</li>
						<li>
							<label>Guardian Name:</label> 
							<?php echo $user_data['guardian_name']; ?>
						</li>
						<li>
							<label>Permanent Address:</label> 
							<?php echo $user_data['permanent_address']; ?>
						</li>
						<li>
							<label>Present Address:</label> 
							<?php echo $user_data['present_address']; ?>
						</li>
						<li>
							<label>Mailing Address:</label> 
							<?php echo $user_data['mailing_address']; ?>
						</li>
						
					<div id="profile_results_wip">
						<div class="CSSTableGenerator" >
							<table >
								<tr>
									<td>
										Exam/Degree
									</td>
									<td>
										Group
									</td>
									<td>
										Roll No
									</td>
									<td >
										Year of passing 
									</td>
									<td>
										Total mark
									</td>
									<td>
										GPA
									</td>
									<td>
										Board
									</td>
								</tr>
							<!--------------------->	
								<tr>
									<td>
										<?php echo $user_data['ssc_degree']; ?>
									</td>
									<td>
										<?php echo $user_data['ssc_group']; ?>
									</td>
									<td>
										<?php echo $user_data['ssc_roll']; ?>
									</td>
									<td >
										<?php echo $user_data['ssc_pass']; ?> 
									</td>
									<td>
										<?php echo $user_data['ssc_marks']; ?>
									</td>
									<td>
										<?php echo $user_data['ssc_gpa']; ?>
									</td>
									<td>
										<?php echo $user_data['ssc_board']; ?>
									</td>
								</tr>
						<!--------------------->		
								<tr>
									<td>
										<?php echo $user_data['hsc_degree']; ?>
									</td>
									<td>
										<?php echo $user_data['hsc_group']; ?>
									</td>
									<td>
										<?php echo $user_data['hsc_roll']; ?>
									</td>
									<td >
										<?php echo $user_data['hsc_pass']; ?>
									</td>
									<td>
										<?php echo $user_data['hsc_mark']; ?>
									</td>
									<td>
										<?php echo $user_data['hsc_gpa']; ?>
									</td>
									<td>
										<?php echo $user_data['hsc_board']; ?>
									</td>
								</tr>
						<!--------------------->		
							</table>
						</div>
					</div>
						<!--Resume submit does not work -->
						<li>
							<input type="submit" value="Apply" />
						</li>
					</ul>
				</form>
		</div>
	</div>
<?php include 'includes/overall/footer.php'; ?>