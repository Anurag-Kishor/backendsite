<section id="newsletter">
		<div class="container">
			<h1>Manage Buses</h1>
		</div>
	</section>
		<div class="container">
			<article id="main-col">
				<h1>Buses Information</h1>
				<form>
				<button class="button_2" formaction="<?php echo base_url(); ?>buses/view" type="submit">Go Back</button>
				<br><br>
				<table border="1">
					<th> Bus Id </th>
					<th> Bus Number Plate</th>
					<th> Diver Id </th>
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