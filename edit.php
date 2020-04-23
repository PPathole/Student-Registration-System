<?php

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die (mysqli_error($con, 'Error'));

	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($con, "SELECT * FROM students WHERE id=$id");

		if(count($record) == 1){
			$n = mysqli_fetch_array($record);
			$fname = $n['fname'];
			$lname = $n['lname'];
			$rollno = $n['rollno'];
			$email = $n['email'];
			$password = $n['password'];
			$gender = $n['gender'];
			$state = $n['state'];
			$city = $n['city'];
		}
	}

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$roll_no = $_POST['rollno'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];	
		$state = $_POST['state'];
		$city = $_POST['city'];

		mysqli_query($con, "UPDATE students SET fname='$fname', lname='$lname', rollno='$roll_no', email='$email', password='$password', gender='$gender', state='$state', city='$city' WHERE id=$id");

		echo "<script type=\"text/javascript\">
			alert('Successfully Updated!');
			window.location='adminPage.php'
			</script>";

	}

?>
<html>
	<head>
		<title>Update details</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  		  		<style type="text/css">
  			@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

  		</style>

	</head>
	<body>
		<div class="container">  
  			<form id="contact" action="edit.php" method="post">
    			<h3>Edit your details</h3>
    			<input type="hidden" name="id" value="<?php echo $id; ?>">
    				<fieldset>
      					<input placeholder="Your First name" type="text" tabindex="1" required autofocus name="fname" value="<?php echo $fname; ?>">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Last name" type="text" tabindex="1" required autofocus name="lname" value="<?php echo $lname; ?>">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Roll number" type="text" tabindex="1" required autofocus name="rollno" value="<?php echo $rollno; ?>">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Email Address" type="email" tabindex="2" required name="email" value="<?php echo $email; ?>">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Password" type="password" tabindex="3" required name="password" value="<?php echo $password; ?>">
    				</fieldset>
    				<fieldset>
      					<input  name="gender" placeholder="Your Gender" tabindex="5" required value="<?php echo $gender; ?>">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your State" type="text" tabindex="4" required name="state" value="<?php echo $state; ?>">
    				</fieldset>
    				<fieldset>
      					<input  name="city" placeholder="Your City" tabindex="5" required value="<?php echo $city; ?>">
    				</fieldset>
    				<button type="submit" name="update">Update</button>
  			</form>
		</div>
	</body>
</html>