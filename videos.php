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
<div class="container-fluid bg-2 text-center">
	<div class="row">
	    <h2>2025 Showcase Pieces</h2>
	    <h4>Choreo videos, logistic sheets, music cuts</h4>
	    </br>
	    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#adcopening">Opening</a>
            </h4>
          </div>
          <div id="adcopening" class="panel-collapse collapse">
            <div class="panel-body">
				<a href="https://docs.google.com/spreadsheets/d/1XkLN9nlo5fqFhP-J3UGi8DRyeY7DKcwUfAX_qFYkWyE/edit?usp=drive_link" target="_blank">Opening Logistics</a><br />
				<a href="https://drive.google.com/file/d/1ONmDy1dOGkLky9_D1GJK_gHlsaMAoyXS/view?usp=drive_link" target="_blank">Alexa_Wonderland Music Cut</a><br />
				<a href="https://docs.google.com/document/d/1tM6OSN0oIGDYb1YWq09ZJuF8fwxwzWsyAX9xoCJY0tw/edit?usp=drive_link" target="_blank">Opening Chorus Tutorials</a><br />
				<a href="https://docs.google.com/document/d/1u9SuCSFyByH4saauP25-kc3Z0MSuZJv6aSvFqoNdUZE/edit?usp=drive_link" target="_blank">Individual Tutorials</a><br />	
				<a href="https://drive.google.com/drive/folders/1uU6lO652Bp710ruO5GB555hFfoLARYdO?usp=drive_link" target="_blank">Video Submissions</a><br />
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#melikeyuh">Me Like Yuh</a>
            </h4>
          </div>
          <div id="melikeyuh" class="panel-collapse collapse">
            <div class="panel-body">
                <a href="https://docs.google.com/spreadsheets/d/1kV89ni3xMp8neyy8ggCTHcArJO7ykDkZHCNUOYveWmA/edit?usp=drive_link" target="_blank">Me Like Yuh Logistics</a><br />
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#lovedive">Love Dive</a>
            </h4>
          </div>
          <div id="lovedive" class="panel-collapse collapse">
            <div class="panel-body">
                <a href="https://docs.google.com/document/d/1WzmoRkJ0s4_IBpZn6ZUCsP__gV7T4xKrPt3TMvqGN3c/edit?usp=drive_link" target="_blank">12/17 Love Dive Meeting Notes</a><br />
				<a href="https://drive.google.com/file/d/13YgDpl2exUaa_yfW3b3McjN665ZidX2v/view?usp=drive_link" target="_blank">Beginning Moves Mirrored</a><br />
				<a href="https://drive.google.com/file/d/1B9FFTTEJuyBxsjcWNwGWv3QQRJhGH933/view?usp=drive_link" target="_blank">Love Dive Choreo Video</a><br />
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#girls">Girls</a>
            </h4>
          </div>
          <div id="girls" class="panel-collapse collapse">
            <div class="panel-body">
                <a href="https://drive.google.com/file/d/1RaOwIIebdIo5w4l6mWxA7NjSPhrUCRLX/view?usp=drive_link" target="_blank">Practice 1 Recording</a><br />
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#passthatdutch">Pass That Dutch</a>
            </h4>
          </div>
          <div id="passthatdutch" class="panel-collapse collapse">
            <div class="panel-body">
                <a href="https://docs.google.com/spreadsheets/d/1EomFiiVE1VCS65ggBuBmml8U4YJPOkCu8Sg_nn5fVw0/edit?usp=drive_link" target="_blank">Pass That Dutch Logistics Spreadsheet</a><br />
                <a href="https://drive.google.com/file/d/1_ejgIsLN1Ax4hy0_ZS7kHXfEsiErmubf/view?usp=drive_link" target="_blank">Pass That Dutch 0.75x Speed</a><br />
                <a href="https://drive.google.com/file/d/1nJR10GemX-3LDJXhAmOWEpDPaMqwT7LV/view?usp=drive_link" target="_blank">Pass That Dutch 1x Speed</a><br />
                <a href="https://drive.google.com/drive/folders/1Km41CvIn6hKRHIY4HcJo31KPlfN8OBPl?usp=drive_link" target="_blank">Demo Videos</a><br />
                <a href="https://drive.google.com/drive/folders/1zJwADktQ_VV6qAJakIbWGm5KAd3rU-My?usp=drive_link" target="_blank">Video Submissions</a><br />
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#finale">Finale</a>
            </h4>
          </div>
          <div id="finale" class="panel-collapse collapse">
            <div class="panel-body">
				<a href="https://docs.google.com/spreadsheets/d/13GmcyhRWNgvEiN4bQC6JsO2uDdkZKpvif2hVPLg-5IE/edit?usp=drive_link" target="_blank">Finale Logistics Spreadsheet</a><br />
				<a href="https://www.youtube.com/playlist?list=PL00RPn5p-A_tVSqYa5tjYCm_AabMvkhY5" target="_blank">General Tutorial Videos</a><br />
				<a href="https://drive.google.com/drive/folders/11_DP77xaMxDH-fDUPx69BY_AjmZTAiFh?usp=drive_link" target="_blank">Individual Choreo Videos</a><br />
            </div>
          </div>
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