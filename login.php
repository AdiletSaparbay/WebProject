<?php 
   session_start();
   $db= mysqli_connect("localhost","root","","autenthication");
   if(isset($_POST['login_btn'])){
   	$username = $_POST['username'];
   	$password = $_POST['password'];
   	$password = md5($password);

   	$sql ="SELECT*FROM users WHERE username='$username' AND password = '$password'";
   	$result = mysqli_query($db,$sql);
   	if (mysqli_num_rows($result)==1) {
   		$_SESSION['username'] = $username;
   		header("location:userpage.php");
   	}
   	else{
         header("location:index.php")
   		$_SESSION['message']="Valid password or Valid users";

   	}
   }
?>