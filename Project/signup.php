<?php
	$servername = "localhost";
	$username = "id11657693_greyuser";
	$password = "ihatephp";
	$dbname = "id11657693_grey";

	global $name,$password1,$password2,$first_name,$last_name,$city,$dob,$number,$gender;
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
	
		if(isset($_POST['username'])){
			$name = $_POST['username'];
		}	
		
		if(isset($_POST['first_name'])){
			$first_name = $_POST['first_name'];
		}
		if(isset($_POST['last_name'])){
			$last_name = $_POST['last_name'];
		}		
		
		if(isset($_POST['password'])){
			$password1 = $_POST['password'];
		}	
		
		if(isset($_POST['password2'])){
			$password2 = $_POST['password2'];
		}
		if(isset($_POST['city'])){
			$city = $_POST['city'];
		}
		if(isset($_POST['dob'])){
			$dob = $_POST['dob'];
		}
		if(isset($_POST['number'])){
			$number = $_POST['number'];
		}
		if(isset($_POST['gender'])){
			$gender = $_POST['gender'];
		}
	if($last_name=="" || $first_name==""){
	    echo "<script> alert('Enter name') </script>";
	    echo "<script>  location.href='../../account1.html';</script>";
	    exit;
	}
	if($password1==""){
	    echo "<script> alert('Enter password') </script>";
	    echo "<script>  location.href='../../account1.html';</script>";
	    exit;
	}
	if($password1!=$password2){
	    echo"<script> alert('Password Mismatch') </script>";
	    echo "<script>  location.href='../../account1.html';</script>";
	    exit;
	}
	if($city==''){
	     echo "<script> alert('Enter city') </script>";
	     echo "<script>  location.href='../../account1.html';</script>";
	     exit; 
	}
	if($number==''){
	     echo "<script> alert('Enter mobilenumber') </script>";
	     echo "<script>  location.href='../../account1.html';</script>";
	     exit; 
	}
	
		
	$sql = "INSERT INTO users (username,password,first_name,last_name,city,dob)
	VALUES ('$name', '$password1','$first_name','$last_name','$city','$dob') ";
	if (mysqli_query($conn, $sql)) {
	    echo "<script> location.href='../../home.html';</script>";
        exit;
	}
	else{
	    echo "<script>alert('Username already exists');</script>";
	    echo "<script>  location.href='../../account1.html';</script>";
    }
    mysqli_close($conn);
?>