<?php

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die (mysqli_error('Error'));

	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$msg = $_POST['message'];

		$sql = "INSERT INTO queries (fname, email, message) VALUES ('$fname', '$email', '$msg')";

		if(mysqli_query($con, $sql)){

			echo "<script type=\"text/javascript\">
			alert('Successfully Posted Query!');
			window.location='studentHome.php'
			</script>";
		}else {
			echo "Error".$sql."<br>".$con->error;
		}
	}

	$sqlget = "SELECT * FROM queries";
	$sqldata = mysqli_query($con, $sqlget) or die ('Error 404');

	echo "<table>";
	echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Post</th></tr>";

	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
		echo "<tr><td>";
		echo $row['id'];
		echo "</td><td>";
		echo $row['fname'];
		echo "</td><td>";
		echo $row['email'];
		echo "</td><td>";
		echo $row['message'];
		echo "</td></tr>";
	}

	echo "</table>";




?>

<html>
<head>
	<title>Student's Home</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		h1,
h2,
h3,
h4,
h5,
h6,
p {
		font-family: 'Open Sans' sans-serif;
		color: #FBFBFB;
		margin: 0;
}

.contact__container {
		display: block;
		border: 10px solid #62B6CB;
		border-radius: 10px;
		margin: 0 auto;
		padding: 0 0 10px 10px;
		max-width: 330px;
		background-color: #62B6CB;
}

.contact__title {
		display: inline-block;
}

.contact__title h2 {
		padding: 0 10px 0 0px;
		margin: 5px 0;
		color: #FBFBFB;
}

.contact__form {
		padding: 10px 10px 0 0;
}

hr {
		width: 100%;
		display: block;
		margin: 5px 0;
		height: 5px;
		border: 0;
		background-color: #FBFBFB;
}

input,
textarea {
		width: 100%;
		border: 5px solid #FFFFFF;
		border-radius: 5px;
		resize: none;
		padding: 0 5px;
		box-sizing: border-box;
		font-family: 'Open Sans' sans-serif;
		font-size: 18px;
		color: #25606f;
}

input[type="text"] {
		padding: 0;
		height: 40px;
		width: 100%;
}

input:focus,
textarea:focus {
		outline: none;
}

.contact__form-input {
		margin: 5px 0 10px 0;
}

.contact__form-textarea {
		margin: 5px 0;
		width: 100%;
		height: 100px;
}

input[type="submit"] {
		width: 100%;
		height: 50px;
		background-color: #25606f;
		border: 0;
		color: #FBFBFB;
		border: 5px solid #25606f;
		border-radius: 5px;
		margin: 10px 0 0 0;
		font-family: 'Open Sans' sans-serif;
		font-size: 22px;
}

input[type="button"]:hover {
		background-color: #368da2;
		border: #368da2;
}
  	</style>
</head>

<body>
	<div class="wrapper">
		<div class="contact__container">
				<div class="contact__title">
						<h2>Post a Problem!<hr></h2>

				</div>
				<form class="contact__form" action="studentHome.php" method="post">
						<p>Name</p>
						<input class="contact__form-input" type="text" name="fname">

						<p>Email</p>
						<input class="contact__form-input" type="text" name="email">

						<p>Message</p>
						<textarea class="contact__form-textarea" type="text" name="message"></textarea>

						<input type="submit" value="Send message" name="submit">
				</form>
		</div>
</div>


</body>
</html>