<!DOCTYPE html>
<?php 	session_start(); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UserPage</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Girassol|Lilita+One&display=swap" rel="stylesheet">
</head>
<body style="background-color: #2a3698;">
	<?php
	if (isset($_SESSION['message'])) {
	 		echo "<div>".$_SESSION['message']."</div>";
	 		unset($_SESSION['message']);
	 	} 	
	 ?>
	<header class="navbar">
			<div id="first">
				<a href="#">User name:  <?php echo $_SESSION['username']; ?></a>
			</div>
			<div id="second">
				<a onclick="document.getElementById('game').style.display='flex'">Create Game</a>
				<a href="logout.php">Logout</a>
			</div>
	</header>
	<!-- <div class="" style="margin-top:50px; width: 400px;">
 -->		
	<div  id="game" style="display: none;flex-wrap: wrap;justify-content: center;">
		<form style="height:  42px;" action="create.php" method="post"><input type="text" placeholder="Topic names" name="t1"></form>
<!-- 		<form style="height:  42px;" action="create.php" method="post"><input type="text" placeholder="Topic names" name="t2"></form>
 -->		<!-- <form style="height:  42px;" action="create.php" method="post"><input type="text" placeholder="Topic names" name="t3"></form>
		<form style="height:  42px;" action="create.php" method="post"><input type="text" placeholder="Topic names" name="t4"></form>
		<form style="height: 42px;" action="create.php" method="post"><input type="text" placeholder="Topic names" name="t5"></form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point" name="point100">
			<input id="in" type="text"  placeholder="Write Question">
			<input id="in" type="text"  placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point" name="point101">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point" name="point102">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point" name="point103">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point" name="point104">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point" name="point1">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in"  type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>	
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form>
		<form action="create.php" method="post">
			<input id="in" type="text" placeholder="Write Point">
			<input id="in" type="text" placeholder="Write Question">
			<input id="in" type="text" placeholder="Write Answer">
		</form> -->
		<button style="margin: 0px;">Create Game</button>	
	</div>
</body>
</html>
