<?php
	$conn = new mysqli("localhost","root","","wehost");
	//STATIC $cust_id = 101 ;
	$name = $_GET['cust_name'] ;
	$email = $_GET['cust_email'] ;
	$country = $_GET['cust_country'] ;
	$mobile = $_GET['cust_mobile'] ;
	$pwd1 = $_GET['cust_pwd'] ;
	$pwd2 = $_GET['cust_confirm_pwd'] ;

		
	if (isset($_GET['submit']) && strcmp($pwd1, $pwd2) == 0)
	{
		$query = "INSERT INTO `signup` VALUES (DEFAULT, '$name', '$email', $mobile, '$country', '$pwd1');" ;

		$result = mysqli_query($conn, $query);
		if($result === true)
		{
                echo "category added successfully";
                header('location:Home.php');
        }
        else
		{
			echo "Invalid";
		}
	}
	else
		{
			echo "Invalid";
		}
	mysqli_close($conn);
?>