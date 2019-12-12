<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
                $rollno = $_POST['rollno'];
                $course = $_POST['course'];
                $department = $_POST['department'];
                $yr = $_POST['yr'];
                $batch = $_POST['batch'];
                $alumni =$_POST['alumni'];
		$sql = "INSERT INTO students (firstname, lastname,rollno,course,department,yr,batch,alumni) VALUES ('$firstname', '$lastname','$rollno',$course,'$department','$yr','$batch','$alumni')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student added successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>