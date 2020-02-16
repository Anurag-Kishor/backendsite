<section id="newsletter">
		<div class="container"> 
			<h1>Manage Driver</h1>
		</div>
	</section>
		<div class="container">
			<article id="main-col">
				<h1>Edit Driver Information</h1>
				<form>
				<button class="button_2" formaction="<?php echo base_url(); ?>drivers/view" type="submit">Go Back</button>
				<br><br>
				<table border="1">
					<th> Diver Id </th>
					<th> Driver First Name</th>
					<th> Driver Last Name</th>
					<th> Driver Mobile Number </th>
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