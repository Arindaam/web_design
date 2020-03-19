<?php

session_start();


$con=mysqli_connect('localhost','id11657693_greyuser','ihatephp');

mysqli_select_db($con,'id11657693_grey');

$user=$_POST['username'];
$pass=$_POST['password'];


$s="SELECT * FROM users WHERE username='$user' && password ='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_fetch_array($result,MYSQLI_ASSOC);



if(isset($num)){

	echo "<script>  location.href='../../home.html';</script>";
}	

else{
    echo "<script>alert('Invalid Username or Password');</script>";
    echo "<script>  location.href='../../index.html';</script>";
}


?>
