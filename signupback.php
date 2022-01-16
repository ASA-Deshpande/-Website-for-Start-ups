<?php 
session_start();

	include("logic.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $user_email = $_POST['user_email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) &5& !is_numeric($user_name))
		{

			//save to database
			
			$query = "insert into users (user_name,user_email,password) values ('$user_name','$user_email','$password')";

			mysqli_query($conn, $query);


			
            echo '<script>alert("Welcome to WeStarters")</script>';
            echo "<script> location.href='logintr.php'; </script>";


			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>