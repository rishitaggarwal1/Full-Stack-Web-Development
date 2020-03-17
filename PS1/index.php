<!DOCTYPE html>
<html>
<head>
	<title>PS1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Searching in Table -->
	<script>
		$(document).ready(function(){
		  $("#search").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#table_search tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
</script>
<style type="text/css">
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;
}

td {
  border: 1px dashed black;
  text-align: center;
}
th{
	border: 1px solid black;
	background-color: #4CAF50;
}

tr:hover {
  background-color: #D2D2D2;
}
tr:nth-child(even) {
  background-color: #E1E1E1;
}
</style>
</head>
<body>
		<div>
			<h1>Student Details</h1>
		</div>
		<div>
			<input type="text" id="search">
		</div>
		<br>
		<table>
			<thead>
				<tr>
			    	<th>Enrollment Number</th>
			    	<th>Name</th>
			    	<th>Age</th>
			    	<th>Course</th>
			    	<th>Branch</th>
			    	<th>Contact</th>
			    	<th>Email</th>
			    	<th>Edit</th>
			    	<th>Delete</th>
			  	</tr>
			</thead>
			<tbody id="table_search">
				<?php
					include("db.php");
					$sql="select * from add_details;";
					$res=mysqli_query($conn,$sql);
					$i=0;
					while($r=mysqli_fetch_array($res,MYSQLI_ASSOC))
					{
						$i++;
					?>
					<form action="main.php" method="post">
						<tr id="<?php echo $i?>">
							<input hidden="hidden" name="studentid" value="<?php echo $r['id']?>">
							<td><?php echo $r["enroll_id"] ?></td>
							<td><?php echo $r["name"] ?></td>
							<td><?php echo $r["age"] ?></td>
							<td><?php echo $r["course"] ?></td>
							<td><?php echo $r["branch"] ?></td>
							<td><?php echo $r["contact"] ?></td>
							<td><?php echo $r["email"] ?></td>
							<td><button type="submit" name="edit">Edit</button></td>
							<td><button type="submit" name="delete">Delete</button></td>
						</tr>
					</form>
						<?php
					}
				?>
				
			</tbody>
		</table>
	</div>
</body>
</html>