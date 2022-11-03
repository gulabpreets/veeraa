<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<title>Veera</title>
 <link rel="icon" href="img/nav-bar-logo.png">
</head>
	
	<style>
	
	h1{
    margin: 40px 50px 5px 50px;
	text-align: center;
	color: white;
	background-color: black;
	padding: 30px;
	border: dotted black 20px;
	border-radius: 20px;
/*	margin-left: */
	
}
.message{
	border-radius: 20px;
}
.message p{

	text-align: center;
	font-size: 30px;
	
}

.warn p{
	text-align: center;
	color: red;
	font-size: 20px;
}

.warn button{
	padding: 10px;
	border-radius: 25px;
	margin-top: 20px;
/*	width: 100px;*/
}
p{
    	text-align: center;
	/*color: red;*/
	font-size: 30px;
    
}
	</style>
	
<body>
		<h1>Thanks for Registration</h1>
	<!--<p>Our team will contact you within 24 hours</p>-->
</div>
	<div class="warn">
	   <p>Your response has been recorded<br>
	       Our team will contact you within 24 hours<br> 
<!--		<button> +91 8571994476</button>-->
		</p>
	</div>
	<p> Click here to go to <a href="https://veera.org.in">home page</a>.</p>
		
<!--	/////counter section//////////-->
<!--	/////counter section//////////-->
<!--	/////counter section//////////-->
<!--	/////counter section//////////-->
		
		<section style="display: none;" class="counter-sec">
		    <div class="counter">

        <div style="margin-top: 15px;" class="head">Total Website Visit</div>
        <div class="count">00</div>

    </div>

</section>	

    <script>
	
		function updateCounter() {
    fetch('https://api.countapi.xyz/update/veera/empowering/?amount=1')
        .then(res => res.json())
        .then(data => counterElement.innerHTML = data.value)
}

updateCounter()



counterElement = document.getElementsByClassName('count')[0];
		
	</script>
	
<!--	///////counter section end/////-->
<!--	///////counter section end/////-->
<!--	///////counter section end/////-->
<!--	///////counter section end/////-->

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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $name = $_REQUEST['name'];
//	$roll = $_REQUEST['roll'];
//	$branch = $_REQUEST['branch'];
	$email = $_REQUEST['email'];
	$number = $_REQUEST['number'];
    $age = $_REQUEST['age'];
	$gender = $_REQUEST['gender'];	
//    $state = $_REQUEST['state'];
//    $city = $_REQUEST['city'];
//    $file = $_REQUEST['file'];
    $query = $_REQUEST['query'];
	
	
  
	if (!$conn -> query("INSERT INTO prachidance ( name, email,number,age,gender,query) VALUES ('$name','$email','$number','$age','$gender', '$query')")) 
	  {
		echo("Error description: " . $conn -> error);
	  }

}

?>

</body>
</html>