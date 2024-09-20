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
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
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
				<li><a href="calendar-members.php">CALENDAR</a></li>
				<li><a href="videos.php">VIDEOS</a></li>
				<li><a href="home.php">HOME</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</div>
</nav><div class="container-fluid bg-1 text-center">
	<div class="row">
		<div class="col-sm-5" style="padding-right:50px;">
			<h4>Members-only calendar</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-sm-7">
			<iframe class="calendar" src="https://calendar.google.com/calendar/embed?src=qdv8f74pk18tun32relimldumk%40group.calendar.google.com&ctz=America%2FNew_York" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
</div>
<footer class="container-fluid bg-4">
	<div class="row">
		<div class="col-sm-8">
			<h3>JOIN OUR MAILING LIST?</h3>
			<p>Sign up with your email address to receive news and updates!</p>
			<form>
				<div class="input-group" style="max-width:500px">
					<input type="email" class="form-control" size="50" placeholder="Email Address" required />
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