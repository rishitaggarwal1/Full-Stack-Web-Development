<!DOCTYPE html>
<html>
<head>
	<title>PS1</title>
</head>
<body>
	<div>
		<div>
			<h1>Edit / Delete Details</h1>
		</div>
		<?php
			$id=$_GET['id'];
			$sql="select * from add_details where id=$id;";
		?>
		<!-- Go to main.php -->
		<form action="main.php" method="post">
			<!-- Enrollment Number -->
			<div>
				<label>Enrollment Number</label>
				<input type="text" name="enroll_id" placeholder="GE-172012618" required="required">
			</div>
			<!-- Name -->
			<div>
				<label>Name</label>
				<input type="text" name="name" placeholder="Rishit Aggarwal" required="required">
			</div>
			<!-- Age -->
			<div>
				<label>Age</label>
				<input type="number" name="age" placeholder="19" required="required">
			</div>
			<!-- Course -->
			<div>
				<label>Course</label>
				<input type="text" name="course" placeholder="B.Tech" required="required">
			</div>
			<!-- Branch -->
			<div>
				<label>Branch</label>
				<input type="text" name="branch" placeholder="Computer Science" required="required">
			</div>
			<!-- Contact -->
			<div>
				<label>Contact</label>
				<input type="number" name="contact" placeholder="7015457296" required="required">
			</div>
			<!-- Email -->
			<div>
				<label>Email</label>
				<input type="email" name="email" placeholder="rishitaggarwal1@gmail.com" required="required">
			</div>
			<div>
				<button type="submit" name="add_details_submit">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>