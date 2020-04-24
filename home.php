<html>
	<head>
		<title>Student Registration</title>
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
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Student Registration</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Student Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="admin.html">Admin Login</a>
    </form>
  </div>
</nav>
		<div class="container">  
  			<form id="contact" action="home.php" method="post">
    			<h3>Register here</h3>
    				<fieldset>
      					<input placeholder="Your First name" type="text" tabindex="1" required autofocus name="fname">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Last name" type="text" tabindex="1" required autofocus name="lname">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Roll number" type="text" tabindex="1" required autofocus name="rollno">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Email Address" type="email" tabindex="2" required name="email">
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your Password" type="password" tabindex="3" required name="password">
    				</fieldset>
    				<fieldset>
      					<input  name="gender" placeholder="Your Gender" tabindex="5" required>
    				</fieldset>
    				<fieldset>
      					<input placeholder="Your State" type="text" tabindex="4" required name="state">
    				</fieldset>
    				<fieldset>
      					<input  name="city" placeholder="Your City" tabindex="5" required>
    				</fieldset>
    				<fieldset>
      					<button name="signup" type="submit" id="contact-submit">Submit</button>
    				</fieldset>
  			</form>
		</div>
	</body>
</html>

<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die (mysqli_error('Error'));

	if(isset($_POST['signup'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$roll_no = $_POST['rollno'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];	
		$state = $_POST['state'];
		$city = $_POST['city'];
		

		$sql = "INSERT INTO students (fname, lname, rollno, email, password, gender, state, city) VALUES ('$fname', '$lname', '$roll_no', '$email', '$password', '$gender', '$state', '$city')";

		if(mysqli_query($con, $sql)){
			echo "<script type=\"text/javascript\">
			alert('Successfully Registered!');
			window.location='login.php'
			</script>";
		}else{
			echo "Error".$sql."<br>".$con->error;
		}
	}


?>
