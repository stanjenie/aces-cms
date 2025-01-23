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
<title>About - Aces Dance Collective</title>
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
<div class="container-fluid bg-2 text-center about">
	<div class="row">	
	    <h1>ABOUT ACES DANCE COLLECTIVE</h1><br />
		<div class="col-sm-8">
			<h3 class="bold"> WHAT WE DO </h3>
			<p>ADC aims to span across both location and foundational dance ability to give amateur dancers, choreographers, directors, and producers a space to explore and grow their skillsets in a supportive, community-oriented environment. We welcome people who are just starting their dance journey as well as pro dancers who want to try their hand at producing shows. As masters of building community through dance virtually, members can join no matter where they’re located. </p>
			<p>Currently, we have an on-season and an off-season centered around our annual show. Each spring, we all travel to Ithaca, NY to perform with our origin team, the Assorted Aces, at their annual showcase. During the on-season, we prepare for our set in this show by choreographing, teaching, and practicing over zoom. We gather in-person in NYC for one weekend to bond and practice our set and we also have 1 day of practice the day before the show to put on the finishing touches before we perform.</p>
			<p>During the off-season, the summer and fall months between showcase and when we start preparing for the next year’s showcase, we train our dance skills over zoom. This includes hosting virtual workshops and taking classes in-person together locally where we have ADC members. In the future, we hope to set roots in a few main U.S. cities to be able to incorporate more in-person ADC activities and perform at other shows and even competitions.</p>
			<p>The purpose of all of these initiatives is to grow our member’s dance and creative abilities as well as each of our support systems. Being on a dance team is about so much more than just practicing and performing together. It’s about celebrating each other, using our talents to teach and mentor, building each other’s confidence, and growing as people and artists together. We have members that can teach first-time dancers the fundamentals. We have pro teachers that can guide new choreographers on how to teach dance. And we have amazing and experienced dance directors who can mentor members wanting to produce a set for the very first time. ADC welcomes all kinds of newbie artists to explore and grow their creativity in a supportive environment.</p>
		</div>
		<div class="col-sm-4">
			<img src="tower.jpg" class="img-responsive" />
		</div>
	</div>
	<div class="row">	
	    <h2>ABOUT OUR FOUNDER: AFSANEH</h2><br />
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
		</div>
		<div class="col-sm-8">
			<h4 class="text-left">
				<b>Role in ADC:</b> Founding President and Dance Coordinator <br />
				<b>Major/class year:</b> Math Major/2020 <br />
				<b>Day job:</b> Life Insurance Actuary <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					Dance is a whole other world for me. It’s my escape, it’s my peace, it’s the best way for me to release my emotions, and it’s one of my biggest comforts. I especially love how dance can bring people together and build such strong homes and communities
					</p><p>
					<b>Why did you join Aces?</b>
					I made Aces LOL. But the reason was, I saw there was a huge gap within our campus’s dance community. There were so many people who wanted to dance and perform but weren’t getting that opportunity because they lacked skill/foundation. If I had been turned away from my first hip hop crew because of my lack of skill at the time, I would be a totally different person. So I wanted to fill that gap and create a dance home for those people who wanted it and couldn’t find it elsewhere.
					</p><p>
					<b>Goals/vision for ADC:</b>
					I want ADC’s mission to align closely with Aces’ mission of providing a dance home for anyone willing to be a part of it. It’s challenging to find strong, supportive communities out in the adult world and I want ADC to be that for its members. I hope we can foster a sense of inclusivity in the dance space and eventually branch out to impact more individuals and incorporate more programming to grow that mission
				</p>
			</div>
		</div>			
	</div>
	
	<div class="row">
		<h2>ABOUT OUR BOARD</h2><br />
	</div>
	<div class="row">
		<div class="col-sm-8">
			<h3 class="bold">Andrea</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> Litty Titty Chair <br />
				<b>Major/class year:</b> Govt 2020 <br />
				<b>Day job:</b> Engagement Coordinator <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					I've grown up with dance as a part of my life. Before I ever danced in a choreography, there were social and cultural dances from back home in Togo to the steps and songs that permeated Black American culture. Movement has just always come to me. It's when I feel the safest to express myself, when I am all parts of me at once, and I feel most grounded in my body.
					</p><p>
					<b>Why did you join Aces?</b>
					Afsaneh. LOL, there really isn't much to say past that.
					</p><p>
					<b>Goals/vision for ADC:</b>
					I want to continue to curate spaces and places for people to connect with each other and themselves. I love the little community we have built that seems to evolve and grow as WE grow. Dance connects us in such varied ways and I want to continue to foster that feeling and community.
					</p><p>
					<b>Instagram:</b>
					personal - <a href="https://www.instagram.com/abitofabita/">@abitofabita</a>,
					business - <a href="https://www.instagram.com/davijewelry_/">@davijewelry_</a>,
					art - <a href="https://www.instagram.com/abitofanartist/">@abitofanartist</a>
				</p>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
		</div>
		<div class="col-sm-8">
			<h3 class="bold">Bryan</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> Internals Director<br />
				<b>Major/class year:</b> Math/CS, 2024 <br />
				<b>Day job:</b> Grad student @ UW <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					I dance to connect with other people in and around the community. Dance is a way for me to express myself and to communicate with others. I’ve met so many amazing and inspiring people through dance that I wouldn’t have otherwise been able to meet. 						
					</p><p>
					<b>Why did you join Aces?</b>
					I first joined Aces to be a part of a dance team and to try and improve at dancing! Over time, I continued to be a part of Aces not only to expand my range of dance styles/skills but also to build a welcoming dance community and have a safe space to share and connect via dance.
					</p><p>
					<b>Goals/vision for ADC:</b>
					In the short term – do everything a loose conglomeration of alumni was able to accomplish in the past year plus strengthening our community of alumni and providing more opportunities for people to dance, teach, and connect with each other even while apart. We’re just getting started &#128520;			
					</p><p>
					<b>Instagram:</b>
					<a href="https://www.instagram.com/bryan.lu.jr/">@bryan.lu.jr</a>
				</p>
			</div>
		</div>
		
	</div>
	<br />
	<div class="row">
		
		<div class="col-sm-8">
			<h3 class="bold">Deva</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> Engagement Director<br />
				<b>Major/class year:</b> CS/2022 <br />
			</h4>
			<div class="text-left">
				<p>I joined Aces the year it started by Afsaneh's invitation; at that time I had no dance experience, but I was almost immediately drawn to the way dance fostered an inclusive and supportive community. I think this is the core of Aces, and as engagement director my aim for ADC is to allow anyone interested in dance to experience the same joy and kinship.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="deva_bio.jpg" class="img-responsive" />
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
		</div>
		<div class="col-sm-8">
			<h3 class="bold">Jade</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> Timekeeper<br />
				<b>Major/class year:</b> HBHS 2019 <br />
				<b>Day job:</b> Internal Medicine Resident <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					I dance because it's a release from the stress of daily life, and it's something that grounds me when I go through busy times.
					</p><p>
					<b>Why did you join Aces?</b>
					I joined Aces because I didn't want to give up on dancing when I went to college and I was lucky enough to be asked to join this group! I stayed because I love the low-stress supportive atmosphere, and the friendliness whether you've interacted with a member hundreds of times or the first time!
					</p><p>
					<b>Goals/vision for ADC:</b>
					I hope that ADC can keep growing and be an avenue for people to stay connected!
				</p>
			</div>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-sm-8">
			<h3 class="bold">Mindy</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> Boston Chair<br />
				<b>Major/class year:</b> Computer science/2023 <br />
				<b>Day job:</b> Software engineer <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					It’s another way for me to feel music and I love being able to express this part of myself with the dance community.
					</p><p>
					<b>Why did you join Aces?</b>
					I wanted to explore different styles of dance and learn from other dancers!
					</p><p>
					<b>Goals/vision for ADC:</b>
					I hope ADC can become a community that helps people nurture their love of dance even postgrad
				</p>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
		</div>
	</div>
	<br />
	<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
		</div>
		<div class="col-sm-8">
			<h3 class="bold">Nina</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> TODO<br />
				<b>Major/class year:</b> TODO <br />
				<b>Day job:</b> TODO <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					TODO
					</p><p>
					<b>Why did you join Aces?</b>
					TODO
					</p><p>
					<b>Goals/vision for ADC:</b>
					TODO
				</p>
			</div>
		</div>
	<br />
	<div class="row">
		<div class="col-sm-8">
			<h3 class="bold">Steph</h3>
			<h4 class="text-left">
				<b>Role in ADC:</b> NYC Chair<br />
				<b>Major/class year:</b> Information Science/2022 <br />
				<b>Day job:</b> Teaching Artist/Makerspace Manager <br />
			</h4>
			<div class="text-left">
				<p><b>Why do you dance?</b>
					I like how dancing is a journey and there’s always ways to learn and improve!
					</p><p>
					<b>Why did you join Aces?</b>
					I wanted to have an opportunity to choreograph! Also to meet and dance with new people who I normally won’t meet otherwise.
					</p><p>
					<b>Goals/vision for ADC:</b>
					I like hearing and seeing the planning process! I hope to see how ADC can expand to the broader public and find ways to streamline the connection between new and old alums!
				</p>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="aces_logo.PNG" class="img-responsive" />
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