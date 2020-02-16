<section id="newsletter">
		<div class="container">
			<h1>Manage Buses</h1>
		</div>
	</section>
	<div class="container">
			<article id="main-col">
				<form><br><button formaction="<?php echo base_url(); ?>buses/view" class="button_2" type="submit">Go Back</button></form>
				<h1> Edit Here! </h1>
				<form class="quote" method="POST">
					<div>
						<table>
							<tr>
								<td><label>Bus Number Plate</label></td>
								<td><input type="text" value="" name="bnum" required="required"></td>
							</tr>
							<tr>
								<td><label>Driver ID</label></td>
								<td><input type="text" value="" name="did" required="required"></td>
							</tr>
						</table><br>
						<table>
							<tr>
								<td><button class="button_2" type="submit" name="submit">Submit</button></td>
							</tr>
						</table>
					</div>
				</form>
			</article>
			<aside id="sidebar">
				<h1 class="page-title">Navigation</h1>
				<ul id="services">
					<li><a href="<?php echo base_url(); ?>students/view"><center>Manage Student<center></a></li>
					<li><a href="<?php echo base_url(); ?>parents/view"><center>Manage Parent<center></a></li>
					<li><a href="<?php echo base_url(); ?>buses/view"><center>Manage Buses<center></a></li>
					<li><a href="<?php echo base_url(); ?>drivers/view"><center>Manage Driver<center></a></li>
					<li><a href="<?php echo base_url(); ?>reports/view"><center>View Attendance<center></a></li>
				</ul>
			</aside>
		</div>