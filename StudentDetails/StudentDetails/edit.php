<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_GET['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
                $rollno = $_POST['rollno'];
                $department = $_POST['department'];
                $class = $_POST['class'];
		$address = $_POST['address'];
		$sql = "UPDATE students SET firstname = '$firstname', lastname = '$lastname',rollno = '$rollno',department = '$department',class = '$class', address = '$address' WHERE id = '$id'";
		if(isset($_GET['id'])){
		$sql = "UPDATE FROM students WHERE id = '".$_GET['id']."'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Student update successfully';
		}
			
		else{
			$_SESSION['error'] = 'Something went wrong in updating students';
		}
	}
	else{
		$_SESSION['error'] = 'Select students to edit first';
	}
        }
	header('location: index.php');

?>