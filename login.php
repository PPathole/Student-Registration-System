<?php

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die (mysqli_error('Error'));

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		$sql = "SELECT * FROM students WHERE email='$email' && password='$password'";
		$data = mysqli_query($con, $sql);
		$total = mysqli_num_rows($data);
		$result = mysqli_fetch_assoc($data);

		if($total == 1){
			$_SESSION['email'] = $email;
			header('location:http://localhost/StudentRegistration/studentHome.php');
		} else {
			echo "<h4 style='color:red; text-align:center;'>Login failed.Please enter the valid credentials.</h4>";
		}
	}

?>


<html>
<head>
        <title>Student Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <style type="text/css">
            
            body {
  background: #35dc9b;
  display: flex;
  flex-direction: column;
  flex-grow: 0;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

h1 {
  margin: 0 auto 40px;
  color: #fff;
  font: 20px Helvetica;
  text-transform: uppercase;
  letter-spacing: 3px;
}

form {
  label {
    position: relative;
    display: block;
    
    input {
      font: 18px Helvetica, Arial, sans-serif;
      box-sizing: border-box;
      display: block;
      border: none;
      padding: 20px;
      width: 300px;
      margin-bottom: 20px;
      font-size: 18px;
      outline: none;
      transition: all 0.2s ease-in-out;
      
      &::placeholder {
        transition: all 0.2s ease-in-out;
        color: #999;
        font: 18px Helvetica, Arial, sans-serif;
      }
      
      &:focus, &.populated {
        padding-top: 28px;
        padding-bottom: 12px;
        
        &::placeholder {
          color: transparent;
        }
        
        & + span {
          opacity: 1;
          top: 10px;
        }
      }
    }
    
    span {
      color: #35dc9b;
      font: 13px Helvetica, Arial, sans-serif;
      position: absolute;
      top: 0px;
      left: 20px;
      opacity: 0;
      transition: all 0.2s ease-in-out;
    }
  }
  
  input[type="submit"] {
    transition: all 0.2s ease-in-out;
    font: 18px Helvetica, Arial, sans-serif;
    border: none;
    background: #1aaf75;
    color: #fff;
    padding: 16px 40px;
    
    &:hover {
      background: #109f67;
    }
  }
}

        </style>


</head>

<body>

    <h1>Students Only Please</h1>

<form action="" method="post">
  <label>
    <input type="email" placeholder="Email" name="email" required>
    <span>Email</span>
  </label>
  
  <label>
    <input type="password" placeholder="Password" name="pwd" required>
    <span>Password</span>
  </label>
 
  <input type="submit" value="Login" name="login">
</form>


</body>

</html>