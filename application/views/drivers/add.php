<section id="newsletter">
		<div class="container">
			<h1>Add New Info</h1>
		</div>
	</section>
	<div class="container">
			<article id="main-col">
				<form><br><button formaction="<?php echo base_url(); ?>drivers/view" class="button_2" type="submit">Go Back</button></form>
				<h1> Add Here! </h1>
				<form class="quote" action="" method="POST">
					<div>
						<table>
							<tr>
								<td><label>Driver First Name</label></td>
								<td><input type="text" placeholder="Enter First name" name="fname" required="required"></td>
							</tr>
							<tr>
								<td><label>Driver Last Name</label></td>
								<td><input type="text" placeholder="Enter Last name" name="lname" required="required"></td>
							</tr>
							<tr>
								<td><label>Driver Mobile Number</label></td>
								<td><input type="text" placeholder="Enter Mobile number" name="mno" required="required"></td>
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

		<?php


				require_once 'Firestore.php';
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$mno = $_POST['mno'];
				$data = [
							'PFname' => $fname,
							'PLname' => $lname,
							'PMob' => $mno
				];
				$fs = new Firestore("Driver");

				$fs->addDriver($mno,$data);
				//$fs->getDocument('9409809197');



				?>