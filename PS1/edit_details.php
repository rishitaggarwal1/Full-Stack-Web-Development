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
		include ('db.php');
			$id=$_GET['id'];
			$sql="select * from add_details where id=$id;";
			 $result=mysqli_query($conn,$sql);
	        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	        {
	        	$enroll_id=$row['enroll_id'];
	        	$name=$row['name'];
	        	$age=$row['age'];
	        	$course=$row['course'];
	        	$branch=$row['branch'];
	        	$contact=$row['contact'];
	        	$email=$row['email'];
	        }
		?>
		<!-- Go to main.php -->
		<form action="main.php" method="post">
			<input type="text" name="id" value="<?php echo $id; ?>" hidden>
			<!-- Enrollment Number -->
			<div>
				<label>Enrollment Number</label>
				<input type="text" name="enroll_id" placeholder="<?php echo $enroll_id; ?>" value="<?php echo $enroll_id; ?>">
			</div>
			<!-- Name -->
			<div>
				<label>Name</label>
				<input type="text" name="name" placeholder="<?php echo $name; ?>" value="<?php echo $name; ?>">
			</div>
			<!-- Age -->
			<div>
				<label>Age</label>
				<input type="number" name="age" placeholder="<?php echo $age; ?>" value="<?php echo $age; ?>">
			</div>
			<!-- Course -->
			<div>
				<label>Course</label>
				<input type="text" name="course" placeholder="<?php echo $course; ?>"  value="<?php echo $course; ?>">
			</div>
			<!-- Branch -->
			<div>
				<label>Branch</label>
				<input type="text" name="branch" placeholder="<?php echo $branch; ?>"  value="<?php echo $branch; ?>">
			</div>
			<!-- Contact -->
			<div>
				<label>Contact</label>
				<input type="number" name="contact" placeholder="<?php echo $contact; ?>" value="<?php echo $contact; ?>">
			</div>
			<!-- Email -->
			<div>
				<label>Email</label>
				<input type="email" name="email" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>">
			</div>
			<div>
				<button type="submit" name="edit_details_submit">Edit</button>
				<button type="submit" name="delete_details_submit">Delete</button>
			</div>
		</form>
	</div>
</body>
</html>