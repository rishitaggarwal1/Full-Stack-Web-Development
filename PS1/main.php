<?php
	include('db.php');
	if(isset($_POST["add_details_submit"]))
	{
		$id=time();
		$enroll_id=$_POST["enroll_id"];
		$name=$_POST["name"];
		$age=$_POST["age"];
		$course=$_POST["course"];
		$branch=$_POST["branch"];
		$contact=$_POST["contact"];
		$email=$_POST["email"];
		$insert ="INSERT INTO add_details (`id`,`enroll_id`,`name`,`age`,`course`,`branch`,`contact`,`email`) VALUES ('$id','$enroll_id','$name','$age', '$course', '$branch','$contact','$email');";
			if (mysqli_query($conn, $insert))
			{
				header("location:index.php?msg=successfully_registered");
			}
			else
			{
				echo "Error: " . $insert . "<br>" . mysqli_error($conn);
			}
	}
	elseif (isset($_POST["edit"])) {
		$id= $_POST["studentid"];
		header("location:edit_details.php?id=$id");
	}
	elseif (isset($_POST["delete"])) {
		$id= $_POST["studentid"];
		header("location:edit_details.php?id=$id");
	}
	elseif (isset($_POST["edit_details_submit"])) {
		$id=$_POST['id'];
		$enroll_id=$_POST["enroll_id"];
		$name=$_POST["name"];
		$age=$_POST["age"];
		$course=$_POST["course"];
		$branch=$_POST["branch"];
		$contact=$_POST["contact"];
		$email=$_POST["email"];
		$sql="DELETE FROM add_details WHERE id=$id;";
		$res=mysqli_query($conn, $sql);
		$id=time();
		$insert ="INSERT INTO add_details (`id`,`enroll_id`,`name`,`age`,`course`,`branch`,`contact`,`email`) VALUES ('$id','$enroll_id','$name','$age', '$course', '$branch','$contact','$email');";
		$res=mysqli_query($conn, $insert);
		header("location:index.php?msg=edited_successfully");
	}
	elseif (isset($_POST["delete_details_submit"])) {
		$id=$_POST['id'];
		$sql="DELETE FROM add_details WHERE id=$id;";
		$res=mysqli_query($conn, $sql);
		header("location:index.php?msg=deleted_successfully");
	}
?>