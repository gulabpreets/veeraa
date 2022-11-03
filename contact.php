<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<title>Contact</title>
<link rel="icon" href="img/nav-bar-logo-final.png">
<link rel="stylesheet" href="forms-css/contact.css">
</head>
<body>
<div class="message">

		<h1>Thanks for rising the query</h1>
	<p>Our team will contact you within 24 hours</p>
</div>
	<div class="warn">
	   <p>If our team do not resolve your query within 24 hours, do complain at <br> 
	   		<a href="https://wa.me/+918571994476"><button> +91 85719-94476</button></a>
	   </p>
	</div>

<?php


$servername = "localhost";
$username = "veere";
$password = "dSi?l?Z{N,As";
$dbname = "veere_veera";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

// $sqlquery = "INSERT INTO contact ( 'Name',' Email', 'Number', 'Message') VALUES
// 	('Gulabpreet Singh', 'agulab7503@gmail.com', '8571994476', 'hello, sir')"

// if ($conn->query($sql) === TRUE) {
// 	echo "record inserted successfully";
// } else {
// 	echo "Error: " . $sql . "<br>" . $conn->error;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$number = $_REQUEST['number'];
	$message = $_REQUEST['message']; 
	if (!$conn -> query("INSERT INTO contact ( Name, Email,Number, Message) VALUES ('$name', '$email','$number', '$message')")) {
		echo("Error description: " . $conn -> error);
	  }

}


?>

</body>
</html>