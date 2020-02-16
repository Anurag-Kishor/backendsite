<section id="newsletter">
		<div class="container"> 
			<h1>Manage Driver</h1>
		</div>
	</section>
		<div class="container">
			<article id="main-col">
				<h1>Driver Information</h1>
				<form  action="" method="POST"> 
				<input type="text" name="valueToSearch" placeholder="Search">&nbsp;<button name="search" type="submit">Search</button><br><br>
				<button formaction="<?php echo base_url(); ?>drivers/add" class="button_2" type="submit">Add Driver</button>
				<button formaction="<?php echo base_url(); ?>drivers/edit" class="button_2" type="submit">Edit Driver</button>
				<button formaction="<?php echo base_url(); ?>drivers/delete" class="button_2" type="submit">Delete Driver</button><br><br>
				<table border="1">
					<th> Diver Id </th>
					<th> Driver First Name</th>
					<th> Driver Last Name</th>
					<th> Driver Mobile Number </th>
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