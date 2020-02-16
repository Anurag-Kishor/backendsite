<section id="newsletter">
		<div class="container">
			<h1>Manage Parents</h1>
		</div>
	</section>
		<div class="container">
			<article id="main-col">
				<h1>Parents Information</h1>
				<form action="" method="POST">
				<input type="text" name="valueToSearch" placeholder="Search">&nbsp;<button name="search" type="submit">Search</button><br><br>
				<button formaction="<?php echo base_url(); ?>parents/add" class="button_2" type="submit">Add Parent</button>
				<button formaction="<?php echo base_url(); ?>parents/edit" class="button_2" type="submit">Edit Parent</button>
				<button formaction="<?php echo base_url(); ?>parents/delete" class="button_2" type="submit">Delete Parent</button><br><br>
				<table border="1">
					<tr><th> PID </th>
					<th> Mobile Number </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> SID </th></tr>
				<tr><?php

				require_once 'Firestore.php';

				$data = [
							'PFname' => 'hello',
							'PLname' => 'Iam',
							'PMob' => '1234567890'
				];
				$fs = new Firestore("Parent");

				//$fs->addParent('1234567890',$data);
				$fs->getDocument('9409809197');



				?></tr>
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