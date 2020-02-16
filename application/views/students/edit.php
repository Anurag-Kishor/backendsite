<section id="newsletter">
		<div class="container">
			<h1>Manage Students</h1>
		</div>
	</section>
		<div class="container">
			<article id="main-col">
				<h1>Edit Student Information</h1>
				<form method="GET">
				<button formaction="<?php echo base_url(); ?>students/view" class="button_2" type="submit">Go Back</button>
				<br><br>
				<table border="1">
					<th> Id </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Address </th>
					<th> Standard </th>
					<th> Divison </th>
					<th> RFID Id </th>
					<th> Bus Id </th>
					<th> Action </th>
				</table><br>
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