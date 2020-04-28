<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die(mysqli_error('Error'));

	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$email = mysqli_query($con, "SELECT email FROM queries WHERE id=$id");

		// while ($row = $email->fetch_assoc()) {
  //   		echo $row['email']."<br>";
		// }

		// $to = $row['email'];
		// echo $to;

		$row = $email->fetch_assoc();
		$to = $row['email'];
		//echo $to;

		$subject = "Problem Solved: College_NAME";
		$message = "Dear Mr/Mrs., We're really pleased to inform you that the query/problem that you posted recently on our X Forum has been resolved!\r\n Really appreciate you using our X Forum and thanking you for your valuable time and patience to stick with us till this problem of yours was solved.\r\n Thanking you, regards\r\n Dr. Who \r\n X college Principal.";
		$header = "From: ";

		if(mail($to, $subject, $message, $header)) {
			echo "<script type=\"text/javascript\">
			alert('Email sent successfully!');
			window.location='problems.php'
			</script>";
			// echo "Email sent successfully";
		}else {
			die('Failure: Email was not sent!');
		}

	}
?>
