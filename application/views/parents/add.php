<section id="newsletter">
		<div class="container">
			<h1>Add New Info</h1>
		</div>
	</section>
	<div class="container">
			<article id="main-col">
				<form><br><button formaction="<?php echo base_url(); ?>parents/view" class="button_2" type="submit">Go Back</button></form>
				<h1> Add Here! </h1>
				<form class="quote" action="" method="POST">
					<div>
						<table>
							<tr>
								<td><label>First Name</label></td>
								<td><input type="text" placeholder="Enter first name" name="fname" required="required"></td>
							</tr>
							<tr>
								<td><label>Last Name</label></td>
								<td><input type="text" placeholder="Enter last name" name="lname" required="required"></td>
							</tr>
							<tr>
								<td><label>Address</label></td>
								<td><textarea placeholder="Enter Address" name="add" required="required"></textarea></td>
							</tr>
							<tr>
								<td><label>Standard</label></td>
								<td><input type="text" placeholder="Enter Standard" name="std" required="required"></td>
							</tr>
							<tr>
								<td><label>Divison</label></td>
								<td><input type="text" placeholder="Enter Divison" name="div" required="required"></td>
							</tr>
							<tr>
								<td><label>RFID No.</label></td>
								<td><input type="text" placeholder="Enter rfi no" name="rfid" required="required"></td>
							</tr>
							<tr>
								<td><label>Bus Id</label></td>
								<td><input type="text" placeholder="Enter Bus id" name="bid" required="required"></td>
							</tr>
							<tr>
								<td><label>Parent's First Name</label></td>
								<td><input type="text" placeholder="Enter first name" name="fname" required="required"></td>
							</tr>
							<tr>
								<td><label>Parent's Last Name</label></td>
								<td><input type="text" placeholder="Enter last name" name="lname" required="required"></td>
							</tr>
							<tr>
								<td><label>Parent's Mobile Number</label></td>
								<td><input type="text" placeholder="Enter Mobile no" name="mno" required="required"></td>
							</tr>
							<tr>
								<td><label>Student Id</label></td>
								<td><input type="text" placeholder="Enter Student id" name="sid" required="required"></td>
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