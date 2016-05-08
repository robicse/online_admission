<div class="widget">
	<h2>Log In/Register form</h2>
		<div class="inner">
			<form action="login.php" method="post">
				<ul id="login">
					<li>
						Username: <br>
						<input type="text" name="username" />
					</li>
					<li>
						Password: <br>
						<input type="password" name="password" />
					</li>
					<li>
						<input type="submit" value="Log In" />
					</li>	
					<li>
						<a href="register.php">Register?</a>
					</li>
					<li>
						Forgetting your 
						<a href="recover.php?mode=username">username</a>  Or <a href="recover.php?mode=password">password</a>
					</li>
					
				</ul>
			</form>
		</div>
</div>