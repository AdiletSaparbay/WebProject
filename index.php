<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IG</title>
	<script src="js/login.js"></script>
	<script src="js/slider.js"></script>
	<link rel="stylesheet" href="css/letter.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Girassol|Lilita+One&display=swap" rel="stylesheet">
	<script type="text/javascript">
    </script>
    <script src="js/validate.js"></script>
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
   		$_SESSION['message']="Valid password or Valid users";

   	}
   }
?>
    <style>
    </style>
</head>
<body>
	<header class="navbar">
			<div id="first">
				<a href="#"><span style="" id="log">IG</span></a>
				<div class="dropdown">
					<a href="index.html" class="dropbth">Home</a>
					<div class="dropdown-content">
						<a href="#hiw" style="">How it works!</a>
						<a href="news.html" style="">Ways to</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="">Works</a>
					<div class="dropdown-content">
						<a href="#hiw" style=""> How it works!</a>
						<a href="" style="">Training</a>
					</div>
			   </div>
			</div>
			<div id="second">
				<a  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up-it's free!</a>
				<a  onclick="document.getElementById('id00').style.display='block'" style="width:auto;">Log in</a>
			</div>

			<div id="id00" class="modal">
			  
			  <form class="modal-content animate" action="index.php" method="post">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('id00').style.display='none'" class="close" title="Close Modal">&times;</span>
			      </div>

			    <div class="container">
			      <label for="uname"><b>Username</b></label>
			      <input type="text" placeholder="Enter Username" name="username" required>

			      <label for="psw"><b>Password</b></label>
			      <input type="password" placeholder="Enter Password" name="password" required>
			      <div style="color: red;">
			     <?php if (isset($_SESSION['message'])) {
	 				echo $_SESSION['message'];
	 				unset($_SESSION['message']);
	 				}
	 			?>
	 			</div>
			        
			      <button type="submit" name="login_btn">Login</button>
			      <label>
			      </label>
			    </div>
			    <div class="container" style="background-color:#f1f1f1">
			      <button type="button" onclick="document.getElementById('id00').style.display='none'" class="cancelbtn">Cancel</button>
			    </div>
			  </form>
			</div>
			<div id="id01" class="modal">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<form class="modal-content" method="post" action="register.php" name="myform" onsubmit="return Valid()">
					<div class="container">
						<h1>Sign Up</h1>
						<p>Please fill in this form to create an account.</p>
						<hr>
						<label for="user"><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="username" required>
						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>
						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						<label for="psw-repeat"><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="password2" required>
						<div class="clearfix">
							<span id="p" style="color: red"></span>	
							<button type="submit" class="signupbtn" name="register_btn">Sign Up</button>
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
	</header>
	<section style="">
		<div id="letter">	
			 <div id="ig">
				<div>		
					<div id="letter-i">
						<iframe id="i1" src="particles.html" frameborder="0" ></iframe>
						<iframe id="i2" src="particles.html" frameborder="0" ></iframe>
						<iframe id="i3" src="particles.html" frameborder="0" ></iframe>
					</div>
			    </div>
			    <div>
					<div id="letter-g">
						<iframe id="g1" src="particles.html" frameborder="0"></iframe> 
						<iframe id="g2" src="" frameborder="0"></iframe>
						<iframe id="g3" src="particles.html" frameborder="0"></iframe>
						<iframe id="g4" src="particles.html" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<h1 id="h1">INTELECTUAL GAMES</h1>
	</section>
	<section id="s2">
		<div>
			<h1 id="title">How Does IG! work?</h1>
		</div>
		<div id="s2_v">
			<div id="sv">
				<div class="box_video">
					<video src="img/kc_1.webm" class="" poster="" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" autoplay width="250" height="250">
					</video>
				</div>
				<div id="text">
					<h2 id="hwt">Create</h2>
					<p id="hwt">It only takes minutes to create<br> a learning game or trivia quiz<br> on any topic, in any language.</p>
				</div>
			</div>
			<div id="sv">
				<div class="box_video">
					<video src="photo/kc_3.webm" class="" poster="" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" autoplay width="250" height="250">
					</video>
				</div>
				<div id="text">
					<h2 id="hwt">Play</h2>
					<p id="hwt">You will click start and <br>choose how team will be<br> play
						and click start
					</p>
				</div>
			</div>
		</div>
		<div class="out">
			<div class="banner">
				<div id="bor">
					Play IG!to see how it works!Explore our fetured games
				</div>
			</div>
			<svg width="40px" height="39px" viewBox="0 0 40 39" id="left" aria-hidden="true">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path class="hand__grip" style="fill: #C88A4A;" d="M6,32 L7.1340332,11 L29.0739746,11 L30.9841309,6.30419922 C32.5002016,-0.497833236 39.8556292,0.124038746 39.8556292,0.124038746 L36.2359774,20.1807405 L19.7161246,22.3503189 L18.9752808,31.1017456 L6,32 Z" fill="#FAD09E"></path>
                                <polygon class="hand__cuff" points="0.000131427821 39 0.000131427821 31.9825647 19.6968384 31 23 39"></polygon>
                            </g>
            </svg>
            <svg width="40px" height="39px" viewBox="0 0 40 39" id="right" aria-hidden="true">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path class="hand__grip" style="fill: #C88A4A;" d="M20.9,31.1l-0.7-8.8L3.6,20.2L0,0.1c0,0,7.4-0.6,8.9,6.2l1.9,4.7h21.9l1.1,21L20.9,31.1z" fill="#FAD09E"></path>
                            <polygon class="hand__cuff"  points="16.9,39 20.2,31 39.9,32 39.9,39"></polygon>
                        </g>
            </svg>
        </div>
	</section>
	<h1 id="h1">4 reasons to play IG! with family and friends</h1>
		<div class="all" style="">
		<div class="first">
			<div class="mySlides" style="">
				<img src="photo/t0.png" style="width:100%;">
				<div class="word" style="color: black;"><a>Millions of games  </a><br><a style="margin-left:150px;padding: 0px; ">on any topic</a></div>
				<div class="inf">
					<p>
						Putting the thrill in every rideThere’s<br> nothing quite like the thrill<br> of getting behind the wheel <br>of a sports car.<br> And when that car is a redesigned 2019 <br>Camaro — from the athletic LS to the track-ready<br> ZL1 — that feeling reaches legendary levels thanks to bold new looks
					</p>
				</div>
			</div>
			<div class="mySlides">
				<img src="photo/t1.png" style="width:110%;">
				<div class="word"><a>Or create your </a><br><a style="margin-left:150px;padding: 0px; ">own in minutes!</a></div>
				<div class="inf">
					<p>
						Nutteertollss the thrill in every rideThere’s <br>nothing quite like the thrill<br> of getting behind the wheel <br>of a sports car.<br> And when that car is a redesigned 2019 <br>Camaro — from the athletic LS to the track-ready<br> ZL1 — that feeling reaches legendary levels thanks to bold new looks
					</p>
				</div>
			</div>
			<div class="mySlides">
				<img src="photo/t2.png" style="width:110%;">
				<div class="word"><a>All your friends need </a><br><a style="margin-left:150px;padding: 0px; ">is a phone</a></div>
				<div class="inf">
					<p>
						Helllo the thrill in every rideThere’s <br>nothing quite like the thrill<br> of getting behind the wheel <br>of a sports car.<br> And when that car is a redesigned 2019 <br>Camaro — from the athletic LS to the track-ready<br> ZL1 — that feeling reaches legendary levels thanks to bold new looks
					</p>
				</div>
			</div>
			<div class="mySlides" style="display: block;">
				<img src="photo/t3.png" style="width:70%;">
				<div class="word"><a>It’s kid-friendly</a><br></div>
				<div class="inf">
					<p>
						Super the thrill in every rideThere’s<br> nothing quite like the thrill<br> of getting behind the wheel <br>of a sports car.<br> And when that car is a redesigned 2019 <br>Camaro — from the athletic LS to the track-ready<br> ZL1 — that feeling reaches legendary levels thanks to bold new looks
					</p>
				</div>
			</div>
			<div class="row">
				<div class="circle" id="border">
					<a class="prev" onclick="plusSlides(-1)"><img src="photo/left-arrow.png" alt=""></a>
				</div>
				<div class="column">
					<img class="demo cursor" src="photo/t0.png" style="width:130px;" onclick="currentSlide(1)">
				</div>
				<div class="column">
					<img class="demo cursor" src="photo/t1.png" style="width:130px;" onclick="currentSlide(2)">
				</div>
				<div class="column">
					<img class="demo cursor" src="photo/t2.png" style="width:130px;" onclick="currentSlide(3)" >
				</div>
				<div class="column">
					<img class="demo cursor" src="photo/t3.png" style="width:130px;" onclick="currentSlide(4)">
				</div>
				<div class="circle">
				<a class="next" onclick="plusSlides(1)"><img src="photo/right-arrow.png" alt=""></a>
			    </div>
			</div>
		</div>
		<div class="second" style="background-color: rgb(19,104,206);">
			<div class="show">
				<span id="s"><img src="r1.png" alt=""></span>
		</div>

		</div>
	</div>

	<!-- Start third -->
	<section id="s3">
		<div id="words">
			<div id="words_type" >
				<span style="margin:20%;">More than</span>
				<h1 style="padding: 0%;margin: 0%;text-align: center;">1,000,000,000</h1>
				<span style="margin: 15%;">players a year</span>
			</div>
	    </div>
		<div id="users">
			<div style="background-color: red;" id="user" class="red">
				<div id="c" >
					<img src="img/triangle.png" style="width: 24px;height: 24px;">
					<span>Players than more 200 countries</span>
				</div>
	
			</div>
			<div style="background-color: blue;" id="user" class="blue">
				<div id="c">
					<img src="img/diamond.png"  style="width: 24px;height: 24px;">
					<span>More than 50% of US
						teachers use IG
					</span>
				</div>	
			</div>
			<div style="background-color: rgb(255,165,0);" id="user" class="brown">
				<div id="c">
					<img src="img/circle.png" style="width: 24px;height: 24px;">
					Over 30 million public games available
				</div>
			</div>
			<div style="background-color: green;" id="user" class="green">
				<div id="c">
					<img src="img/rectangle.png"   style="width: 24px;height: 24px;">
					97% of the Fortune 500 use IG
				</div>
			</div>
		</div>
		<div id="rev">
			<div id="rev_d">
				<img src="img/boss.png" width="48" height="48" style="background-color: white;border-radius: 50%;" alt="">
				<p>"(With IG!) people pay more attention to the training,<br> and that is the dream of any trainer!"<br><br>		
					<span>	Lenardo Silva,Facebook</span></p>	
			</div>
			<div id="rev_d">
				<img src="img/boss.png" width="48" height="48" style="background-color: white;border-radius: 50%;" alt="">
				<p>"(With IG!) people pay more attention to the training,<br> and that is the dream of any trainer!"<br><br>		
					<span>	Lenardo Silva,Facebook</span></p>	
			</div>
		</div>
	</section>
</body>
</html>
<script>
	function Valid() {
    var x =document.forms["myform"]["password"].value;
    var y =document.forms["myform"]["password2"].value;
    if(x!==y){
      document.getElementById('p').innerHTML="Don't match Passwords";
      return false;
    }
  }

</script>