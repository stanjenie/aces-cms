<?php
	session_start();
	if (!isset($_SESSION['loggedin'])) {
		header('Location: members.html');
		exit;
	}
?><!DOCTYPE html>
<html lang="en">
<head><link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
<link rel="manifest" href="/site.webmanifest" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Inter:200,400,700" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Aces Dance Collective</title>
</head>
<body><nav class="navbar navbar-fixed-top navbar-inverse navbar-member">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="index.html">ACES DANCE COLLECTIVE</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="ccorner.php"><span class="glyphicon glyphicon-lock"></span> CHOREO CORNER</a></li>
				<li><a href="announcements.php">ANNOUNCEMENTS</a></li>
				<li><a href="forms.php">FORMS</a></li>
				<li><a href="calendar-members.php">CALENDAR</a></li>
				<li><a href="videos.php">PIECES</a></li>
				<li><a href="home.php">HOME</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container-fluid bg-1 text-center">
	<div class="row">
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive"></img>
		</div>
		<div class="col-sm-8">
			<h1>ACES DANCE COLLECTIVE</h1>
			<h2>(MEMBERS ONLY)</h2>
			<h4>Thank you for being a member!</h4><br />
			<h3 class="bold">MISSION STATEMENT</h3>
			<p>Aces Dance Collective (ADC) bridges geographic boundaries and dance skills as an incubator for amateur dances, choreographers, directors, and produces to explore and grow their creative skill sets. Through our inclusive and uplifting community, we build confidence for novice artists.</p><br />
			<p>Here's the best way to use this website:</p>
			<ul>
			    <li><b>ANNOUNCEMENTS</b> - check this page regularly! Afsaneh will update it every week with everything you need to know/do for showcase!</li>
			    <li><b>PIECES</b> - anything your choreograph has for you (tutorial/choreo vids, feedback notes, etc)</li>
			    <li><b>FORMS</b> - forms you need to fill out + their due dates</li>
			    <li><b>CALENDAR</b> - this has all ADC practice times with zoom link</li>
			    <li><b>CHOREO CORNER</b> - to-do list and announcements for piece leaders</li>
			</ul>
			<br><a href="about.php"><button class="btn btn-default btn-lg">About Aces</button></a>
		</div>	
	</div>
</div>
<footer class="container-fluid bg-4">
	<div class="row">
		<div class="col-sm-8">
			<h3>JOIN OUR MAILING LIST?</h3>
			<p>Sign up with your email address to receive news and updates!</p>
			<form action="subscribe.php" method="post">
				<div class="input-group" style="max-width:500px">
					<input type="email" name="email" class="form-control" size="50" placeholder="Email Address" required />
					<div class="input-group-btn">
						<button type="submit" class="btn btn-default">get updates!</button>
					</div>
				</div>
			</form>
		</div>
		
		<div class="col-sm-4">
			<h3>FOLLOW</h3>
			<ul class="nav flex-column">
				<li><a href="https://www.instagram.com/acesdancecollective">INSTAGRAM</a></li>
			</ul>
		</div>
	</div>
</footer></body>
</html>