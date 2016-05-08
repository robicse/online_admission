<?php 
	include 'core/init.php';
	include 'includes/overall/header.php'; 	
?>
<div class="form_validation">	
	<h1>Application For Admission</h1>	
	<div id="page-wrap">	
		<div id="example-one">
			<ul class="nav">
				<li class="nav-one"><a href="#featured" class="current">Card Transactions</a></li>
				<li class="nav-two"><a href="#core">Bank Receive Transactions</a></li>
			</ul>
				
			<div class="list-wrap">		
				<ul id="featured">
					<!--admission form start of this template-->					
					<div class="admission_bd">
						<form id="info" method="post" action="">
							<ul>
								<li>
									Card Number:</br>
									<input type="text" name="cardname" /> 
									<div class="img">
										<img src="img/master_34x22.png" alt="" /><img src="img/visa_34x22.png" alt="" /><img src="img/maestro_34x22.png" alt="" />
									</div>
								</li></br>
								<li>
									CVV/CVV2:</br>
									<input type="text" name="cvvname" />
								</li></br>
								<li>
									Amount:</br>
									<input type="text" name="cvvname" />
								</li></br>
								
								<li>
									Booking Date:</br>
									<select name="Month">

										<option value="january">1</option>

										<option value="february">2</option>

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
								</li>
								
								</br>
								
								<li>
									Card holder Name:</br>
									<input type="text" name="username" />
								</li>
								
								<li>
									<input type="submit" value="Submit Payment" />
								</li>
								
								<div class="condition_addmision">
									<h3>Condition for admission</h3>
									<li>
										a. A candidate seeking admission to a program must procure prescribed 
									</li>
									<li>
										a. A candidate seeking admission to a program must procure prescribed 
									</li>
									<li>
										a. A candidate seeking admission to a program must procure prescribed 
									</li>
								</div>
							</ul>
						</form>
					</div>
				</ul>
					
				<ul id="core" class="hide">
					<div class="form_validation">	
						<h2 class="add_color">Payment Operation</h2>
					
						<div class="payment_methods">
							<div class="all_pay_method">
								<h3>All Payment Method</h3>
							</div>
							
							<div class="from_where">
									View payment methods available in 
									<select name="Month">
											<option value="february">chittagong</option>
											<option value="february">Syshet</option>
											<option value="february">Khulna</option>
											<option value="february">Rajshahi</option>
											<option value="february">Barisal</option>

											<option value="country" selected="selected">Dhaka</option>

										</select>
							</div>
							
							<div class="card_pay">
								<h3><span style="color:#ff6600">Bank Transactions</span></h3>
								
								<ul>
									<li>
										Bank Receive Number:</br>
										<input type="text" name="cardname" /> 
										<div class="img">
											<img src="img/brac-bank.jpg" alt="" /><img src="img/uttara.jpg" alt="" /><img src="img/Sonali-bank.jpg" alt="" />
										</div>
									</li></br>
														
									<li>
										Admission Date:</br>
										<select name="Month">

											<option value="january">1</option>

											<option value="february">2</option>

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
									</li></br>
									
									<li>
										Card holder Name:</br>
										<input type="text" name="username" />
									</li></br>
									
									<li>
										<input type="submit" value="Submit Payment" />
									</li>							
								</ul>
							</div>
						</div>
						
						
					</div>				
				</ul>	
			</div> <!-- END List Wrap -->		
		</div> <!-- END Organic Tabs (Example One) -->	
	</div>		
</div>


<!-------------------------------------------->
<!-------------------------------------------->
	
<?php include 'includes/overall/footer.php'; ?>