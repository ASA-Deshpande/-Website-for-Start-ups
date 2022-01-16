<?php 

session_start();

	include("logic.php");
    include("function.php");
  


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);
            // $user_data = mysqli_fetch_assoc($result);
            // echo $user_data['password'];

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_name'] = $user_data['user_name'];
						header("Location: Stories.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "invalid input";
		}
	}

?>