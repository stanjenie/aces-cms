<?php
	
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  exit("Invalid email format.");
}
file_put_contents('subscribers.log', 
  $email.PHP_EOL, FILE_APPEND);
  echo("Success! Your subscription will be processed in 1-3 business days.");
  header('refresh:5;url=index.html');


?>


