<?php


$username = $_POST['username'];
$password = $_POST['pwd'];

if($username == 'admin' && $password == 'admin'){
    header('Location: http://localhost/StudentRegistration/adminPage.php');
}else {
    header('Location: http://localhost/StudentRegistration/admin.php');
}

?>