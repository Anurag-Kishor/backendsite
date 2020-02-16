<center>
	<section id="main">
		<div class="container">
			<div class="dark">
				<h1>Login Here!</h1>
				<form class="quote" action="<?php echo base_url(); ?>welcome" method="POST">
					<div>
						<table>
							<tr>
								<td><label>Username</label></td>
								<td><input type="text" placeholder="Enter username" name="usr"></td>
							</tr>
							<tr>
								<td><label>Password</label></td>
								<td><input type="password" placeholder="Enter password" name="pwd"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><button class="button_1" type="submit" name="submit">Send</button></td>
							<td><a href="<?php echo base_url(); ?>forgot">Forgot Password?</a></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</section>
	</center>