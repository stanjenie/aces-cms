<?php
	session_start();
	try {
		$conn = new PDO("sqlite:".__DIR__."/accounts.db");
		if ( !isset($_POST['id'], $_POST['pwd']) ) {
			exit("Username or password not found.");
		}
		if ($_POST['pwd'] != $_POST['pwd2']) {
			exit("Passwords do not match.");
		}
		$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
		$salt = "";
		$stmt = $conn->prepare("INSERT INTO accounts (username,password,salt,email) VALUES (:username,:password,:salt,:email)");
		$stmt->bindParam(':username', $_POST['id']);
		$stmt->bindParam(':password', $pwd);
		$stmt->bindParam(':salt', $_POST['name']);
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->execute();
		mail("stanjenie@gmail.com","New Member Registration","User ".$_POST['name']." at ".$_POST['email']." has registered for an ADC membership.");
		echo("Successful!");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	?>