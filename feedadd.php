<?php
	session_start();
	try {
		$conn = new PDO("sqlite:".__DIR__."/accounts.db");
		if ( !isset($_POST['content']) ) {
			exit("Empty content.");
		}
		$content = $_POST['content'];
		file_put_contents($_SESSION['feed'],$content);
		echo("Successful!");
				header('refresh:5;url=announcements.php');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	?>