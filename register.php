<?php 
   session_start();
   $db= mysqli_connect("localhost","root","","autenthication");
   if(isset($_POST['register_btn'])){
   	$username = $_POST['username']; 
   	$email = $_POST['email']; 
   	$A="";
   	$password = $_POST['password']; 
   	$password2 = $_POST['password2'];
   	if ($password == $password2) {
   		$password = md5($password);
   		$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
   		mysqli_query($db,$sql);
   		$_SESSION['message']="You are now logged in";
   		$_SESSION['username'] = $username;
   		header("location: userpage.php");
   	} 
   }
?>