<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die(mysqli_error('Error'));

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		$sql = "DELETE FROM queries WHERE id=$id";
		$result = mysqli_query($con, $sql) or die('Error 404');
		echo "<meta http-equiv='refresh' content='0; url=problems.php'>";
	}
?>