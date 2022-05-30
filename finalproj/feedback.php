<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6492252";
$password = "4pLZbBTfjq";
$dbname="sql6492252";
$port="3306";

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['enter'])) {
		$conn = mysqli_connect($servername, $username, $password, $dbname, $port) or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['username']) && isSet($_POST['email']) && isSet($_POST['phone'])&& isSet($_POST['feedbacks'])) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
            $feedbacks = $_POST['feedbacks'];
			$sql = "INSERT INTO `answers` (`username`,`email`,`phone`, `feedbacks`) VALUES ('$username', '$email', '$phone', '$feedbacks')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo "<script>alert('You have successfully registered')</script>";
			} else {
                echo "<script>alert('Failed to registered')</script>";
			}
		}
	}
?>