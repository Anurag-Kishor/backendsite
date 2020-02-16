<section id="newsletter">
		<div class="container">
			<h1>Attendance</h1>
		</div>
	</section>
		<div class="container">
			<article id="main-col">
				<h1>Attendance Report</h1>
				<h1>Date Wise Selection</h1>
				<input type="date" name="date">&nbsp;<button type="submit">Search</button><br><br>
				<table border="1">
					<th> Student Id </th>
					<th> Student First Name</th>
					<th> Student Last Name</th>
					<th> Student Standard </th>
					<th> Student Divison </th>
					<th> Bus Id </th>
					<th> Bus Number </th>
					<th> Driver First Name </th>
					<th> Driver Last Name </th>
					<th> Entry Time </th>
					<th> Exit Time </th>
					<th> Date </th>
				</table><br>
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